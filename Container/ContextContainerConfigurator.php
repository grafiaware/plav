<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Container;

use Pes\Container\ContainerConfiguratorAbstract;
use Pes\Http\RequestInterface;

use Model\UvodniStranka;
use Model\SkolyFirmy;
use Model\OhlasyCtenaru;
use Model\Kontakt;

/**
 * Description of ContextDefinition
 *
 * @author pes2704
 */
class ContextContainerConfigurator extends ContainerConfiguratorAbstract {
    public function getAliases() {
        return [];
    }
    public function getParams() {
        return [];
    }
    
    public function getServicesDefinitions() {
        return                 [
        'pribeh' => function() use($request) {return $request->getQueryParam('pribeh', '');},  // druhý parametr je default hodnota
        'kraj' => function() use ($request) {return $request->getQueryParam('kraj', '');},
        'contents/layout.php' => function($c) {return
                [
                'mainAttributes' => $c->get('mainAttributes'),
                'uvodniStranka' => $c->get('uvodniStranka'),
                'pracMista' => $c->get('pracMista'),
                'skolyFirmy' => $c->get('skolyFirmy'),
                'ohlasyCtenaru' => $c->get('ohlasyCtenaru'),
                'perexyVsechny' => $c->get('perexyVsechny'),
                'pribehyAperexy' => $c->get('pribehyAperexy'),
                'kontakt' => $c->get('kontakt')
                ];
            },
            'uvodniStranka' => function($c) {return
                    [
                    'uvodniSlovo' => $c->get('uvodniSlovo'),
                    'anotace' => $c->get('anotace'),
                    'tematickeOkruhy' => $c->get('tematickeOkruhy'),
                    'ukazka' => $c->get('ukazka'),
                    'ohlasyCtenaruUvod' => $c->get('ohlasyCtenaruUvod'),
                    'kontakt' => $c->get('kontakt'),
                    ];
                },
            'uvodniSlovo' => function() {return (new UvodniStranka())->getUvodniSlovo();},
            'anotace' =>  function() {return (new UvodniStranka())->getAnotace();},
            'tematickeOkruhy' => function() {return  (new UvodniStranka())->getTematickeOkruhy();},
            'ukazka' => function() {return  (new UvodniStranka())->getUkazka();},
            'ohlasyCtenaruUvod' => function() {return  (new UvodniStranka())->getOhlasy();},
            'kontakt' => function() {return  (new Kontakt())->getKontakt();},

        'pracMista' => function($c) {return array_merge(
                    $c->get('kraje'),
                    ['nabidkaPraceVKraji' => $c->get('nabidkaPraceVKraji')]);
                },

        'skolyFirmy' => function() {return (new SkolyFirmy())->getDataSkolyFirmy(); },
        'ohlasyCtenaru' => function() {return (new OhlasyCtenaru())->getOdpovedi(); },
        'perexyVsechny' => function($c) {return ['perexy'=>$c->get('perexy')];},
        'pribehyAperexy' => function($c) {return array_merge(
                    $c->get('pribehStudenta'),
                    ['perexyOstatni'=>$c->get('perexy')]);
                },

        'kontakt' => function() {return (new Kontakt())->getKontakt();},

        ];
    }
    
    public function getServicesOverrideDefinitions() {
        return [];
    }
    public function getFactoriesDefinitions() {
        return [];
    }
}

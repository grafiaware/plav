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
        return  [
        UvodniStranka::class => function($c) {return
            new UvodniStranka();
        },
        Kontakt::class => function($c) {return
            new Kontakt();
        },
        SkolyFirmy::class => function($c) {return
            new SkolyFirmy();
        },
        OhlasyCtenaru::class => function($c) {return
            new OhlasyCtenaru();
        },

        ];
    }

    public function getServicesOverrideDefinitions() {
        return [];
    }
    public function getFactoriesDefinitions() {
        return [];
    }
}

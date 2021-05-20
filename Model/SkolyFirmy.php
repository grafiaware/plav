<?php
namespace Model;


class SkolyFirmy{
    private $data = [
        "infoSkolyFirmy" => [
            [
                "nadpis" => "Pro školy",
                "podnadpis" => "PLAV! pro studenty SŠ/SOU",
                "text" => "Ve spolupráci s krajskými úřady v ČR vydává Grafia, s.r.o. ve školním roce 2019/2020 již čtvrtým rokem publikaci určenou posledním ročníkům středních škol a učilišť pod názvem publikace \"PLAV! aneb průvodce absolventa SŠ přípravou na reálný život.\" Budoucí absolventi v jednotlivých krajích obdrží knihu zdarma, vždy pro každou školu podle počtu studentů v posledním ročníku (dle velikosti kraje 2.500 - 9.000 ks/kraj). Kniha je dle slov ředitelů škol rozdána studentům a mj. využívána pro kariérní přípravu ve společenskovědních předmětech."
            ],
            [
                "nadpis" => "Pro firmy",
                "podnadpis" => "Získejte absolventy SŠ a učňovských oborů dřív než jiní!",
                "text" => "V publikaci v každém kraji je vyčleněno několik stránek na personální inzerci, která je vhodným doplňkem budování brandu zaměstnavatele. Váš inzerát můžetete umístit i na zadní stranu obálky a její vnitřní strany. 

                           Využijte cílené distribuce k rukám vašich potenciálních zaměstnanců!"
            ]
        ],
        "kontakt" => "S dotazy nás neváhejte kontaktovat e-mailem na sekretariat@grafia.cz či telefonicky na 377 227 701"
    ];
    
    public function getDataSkolyFirmy(){
        return $this->data; 
    }
            
}


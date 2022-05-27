<?php

namespace Model;

/**
 * Description of Prace
 *
 * @author pes2704
 */
class NabidkaPrace {
    
    private $pracePodleIdKraje = [
        "plzensky" => [
            "nazevKraje" => "Plzeňský kraj",
            "nabidka" => [
                "zamestnavatele" => [
                    "Rodenstock" => [
                        "nazev" => "Rodenstock ČR, s.r.o.", "www" => "www.rodenstock.cz/cz/cz/index.html"
                    ],
                    "Ponnath" => [
                        "nazev" => "Ponnath řezničští mistři, s.r.o.", "www" => "www.ponnath.de/cz/kariera/"
                    ],
                    "Wacker" => [
                        "nazev" => "Wacker-chemie, s.r.o.", "www" => "www.wacker.com/cms/en-cz/careers/working-at-wacker/pilsen-careers.html"
                    ],
                    "LOXXES" => [
                        "nazev" => "LOXXESS Bor s.r.o.", "www" => "www.loxxess.com/cz"
                    ],
                    "SD-sped" => [
                        "nazev" => "SD sped a.s.", "www" => "www.sdsped.cz/"
                    ],
                    "Adient" => [
                        "nazev" => "Adient Bor s.r.o.", "www" => "www.adient.com/czech-republic/bor"
                    ],
                    "Rotarex" => [
                        "nazev" => "Rotarex Praha spol.,s.r.o.", "www" => "www.rotarex-praha.cz/"
                    ],
                    "IAC" => [
                        "nazev" => "IAC Group, s.r.o.", "www" => "www.iacgroup.com/about-iac/locations/europe-locations/"
                    ],
                    "Doosan" => [
                        "nazev" => "Doosan Škoda Power, s.r.o.", "www" => "www.doosanskodapower.com/cz/"
                    ],
                    "Canpack" => [
                        "nazev" => "Canpack Czech s.r.o.", "www" => "cz.canpack.com/#grow"
                    ],
                    "Invelt" => [
                        "nazev" => "Invelt-elektro s.r.o.", "www" => "www.invelt-kariera.cz"
                    ],
                    "MDElektronik" => [
                        "nazev" => "MD ELEKTRONIK", "www" => "www.md-elektronik.com/cs/kariera/"
                    ],
                ]
            ]
        ],
        "praha" => [
            "nazevKraje" => "město Praha",
            "nabidka" => [        
                "zamestnavatele" => [
                    "Policie" => [
                        "nazev" => "Policejní prezidium ČR", "www" => "nabor.policie.cz/"
                    ],
                    "VRL" => [
                        "nazev" => "VRL Praha a. s.", "www" => "www.vrl.cz/"
                    ],
                ]
            ]
        ],
        "jihocesky" => [
            "nazevKraje" => "Jihočeský kraj",
            "nabidka" => [        
                "zamestnavatele" => [
                    "Ponnath" => [
                        "nazev" => "Ponnath řezničští mistři, s.r.o.", "www" => "www.ponnath.de/cz/kariera/"
                    ],
                    "Wienerberger" => [
                        "nazev" => "Wienerberger s.r.o.", "www" => "www.wienerberger.cz/o-nas-a-kontakty/kariera.html"
                    ],
                    "KOKINETICS" => [
                        "nazev" => "KOKINETICS s.r.o.", "www" => "www.firmy.cz/detail/144544-kokinetics-kamenice-nad-lipou.html"
                    ],
                    "PovodiVltavy" => [
                        "nazev" => "Povodí Vltavy", "www" => "www.pvl.cz"
                    ],
                    "Avire" => [
                        "nazev" => "Avire s.r.o.", "www" => "www.avire-global.com/cs/careers"
                    ],
                    "DURA" => [
                        "nazev" => "DURA Automotive CZ, k.s.", "www" => "www.firmy.cz/detail/176747-dura-automotive-cz-blatna.html"
                    ]
                ]
            ]
        ],
        "jihomoravsky" => [
            "nazevKraje" => "Jihomoravský kraj",
            "nabidka" => [        
                "zamestnavatele" => [
                    "TeplarnyBrno" => [
                        "nazev" => "Teplárny Brno, a.s.", "www" => "www.teplarny.cz/"
                    ],
                    "Vetropack" => [
                        "nazev" => "Vetropack Moravia Glass a.s.", "www" => "www.vetropack.cz/cz/vetropack/kariera/volna-pracovni-mista/"
                    ],
                    "Cukrovary" => [
                        "nazev" => "Moravskoslezské cukrovary s.r.o.", "www" => "www.korunnicukr.cz/kontakt/"  
                    ],
                    "Westfalia" => [
                        "nazev" => "Westfalia Metal s.r.o.", "www" => "www.westfalia-mh.com/cs/kariera/"  
                    ],
                    "Zebr" => [
                        "nazev" => "Zebr, s.r.o.", "www" => "www.zebr.cz/cz/kariera/"  
                    ],
                    "Vodarenska" => [
                        "nazev" => "Vodárenská akciová společnost, a.s.", "www" => "vodarenska.cz/pracovni-prilezitosti/"  
                    ],
                    "Bomar" => [
                        "nazev" => "Bomar, spol, s.r.o.", "www" => "bomar.jobs.cz"  
                    ],
                    "Minerva" => [
                        "nazev" => "Minerva Boskovice, a.s.", "www" => "www.minerva-boskovice.cz/aktuality/nabidka-volnych-pracovnich-mist"  
                    ]
                ]
            ]
        ],
        "karlovarsky" => [
            "nazevKraje" => "Karlovarský  kraj",
            "nabidka" => [
                "zamestnavatele" => [
                    "Wacker" => [
                        "nazev" => "Wacker-chemie, s.r.o.", "www" => "www.wacker.com/cms/en-cz/careers/working-at-wacker/pilsen-careers.html"
                    ],
                    "NSCZ" => [
                        "nazev" => "NSCZ s.r.o.", "www" => "www.firmy.cz/detail/2344588-nscz-habartov.html"
                    ]
                ]
            ]
        ],
        "kralovehradecky" => [
            "nazevKraje" => "Královéhradecký kraj",
            "nabidka" => [
                "zamestnavatele" => [
                    "SIGNALBAU" => [
                        "nazev" => "SIGNALBAU a.s.", "www" => "www.signalbau.cz/"
                    ],
                    "Gondella" =>  [
                        "nazev" => "Gondella CZ s.r.o.", "www" => "www.gondella.com/cs"
                    ],
                    "Glatt" => [
                        "nazev" => "Glatt – Pharma, spol. s r.o.", "www" => "www.glattpharma.cz/"
                    ],
                    "Policie" => [
                        "nazev" => "Policejní prezidium ČR", "www" => "nabor.policie.cz/"
                    ]
                ]
            ]
        ], 
        "liberecky" => [
            "nazevKraje" => "Liberecký kraj",
            "nabidka" => [        
                "zamestnavatele" => [
                    "CIS" => [
                        "nazev" => "CIS systems s.r.o.", "www" => "rejstrik-firem.kurzy.cz/25024698/cis-systems-sro/"
                    ],
                    "DGS" => [
                        "nazev" => "DGS Druckguss Systeme s.r.o.", "www" => "www.dgs-druckguss.com/cz/start"
                    ],
                    "EMBA" => [
                        "nazev" => "EMBA, spol. s r.o.", "www" => "www.emba.cz"
                    ],
                    "CRYTUR" => [
                        "nazev" => "CRYTUR, spol. s r.o.", "www" => "www.crytur.cz/"
                    ],
                    "SIGNALBAU" => [
                        "nazev" => "SIGNALBAU a.s.", "www" => "www.signalbau.cz/"
                    ],
                    "Policie" => [
                        "nazev" => "Policejní prezidium ČR", "www" => "nabor.policie.cz/"
                    ]
                ]
            ]
        ],
        "moravskoslezsky" => [
            "nazevKraje" => "Moravskoslezský kraj",
            "nabidka" => [
                "zamestnavatele" => [
                    "KOVONA" => [
                        "nazev" => "KOVONA SYSTEM,a.s.", "www" => "www.kovona-system.cz/zakladni-informace-53.html"
                    ],
                    "Rochling" => [
                        "nazev" => "Röchling Automotive Kopřivnice s.r.o.", 
                        "www" => "www.roechling-automotive.com/contact/locations-automotive/koprivnice-roechling-automotive-koprivnice-sro"
                    ],
                    "Saft" => [
                        "nazev" => "Saft Ferak a.s. ", "www" => "www.saft-ferak.cz"
                    ],
                    "BLANCO" => [
                        "nazev" => "BLANCO Professional CZ spol. s r.o.", "www" => "www.blanco-professional.com/cs/service/zavod-chlebovice-.cfm"
                    ],
                    "ROMOTOP" => [
                        "nazev" => "ROMOTOP spol. s r.o.", "www" => "www.romotop.cz"
                    ],
                    "WEPPLER" => [
                        "nazev" => "WEPPLER CZECH s.r.o.", "www" => "www.wepplergroup.cz"
                    ]
                ]
            ],   
        ],
        "olomoucky" => [
            "nazevKraje" => "Olomoucký kraj",
            "nabidka" => [        
                "zamestnavatele" => [
                    "SIGNALBAU" => [
                        "nazev" => "SIGNALBAU a.s., Přerov", "www" => "www.signalbau.cz"
                    ],
                    "KOYO" => [
                        "nazev" => "Koyo Bearings Česká republika s.r.o.", "www" => "www.koyobearings.cz/uvod/"
                    ],
                    "Policie" => [
                        "nazev" => "Policejní prezidium ČR", "www" => "nabor.policie.cz/"
                    ],
                    "DITON" => [
                        "nazev" => "DITON s.r.o.", "www" => "www.diton.cz/"  
                    ]
                ]
            ]
        ],
        "pardubicky" => [
            "nazevKraje" => "Pardubický kraj",
            "nabidka" => [     
                "zamestnavatele" => [ 
                    "Sko-Ener" =>  [ 
                        "nazev" => "ŠKO-ENERGO, s.r.o.", "www" => "www.sko-energo.cz"
                    ],
                    "Techplast" => [
                        "nazev" => "Josef Škrkoň – Techplast, a.s.", "www" => "www.techplast.cz"
                    ],
                    "Wienerberger" => [
                        "nazev" => "Wienerberger s.r.o.", "www" => "www.wienerberger.cz/o-nas-a-kontakty/kariera.html"
                    ],
                    "TOMIL" => [
                        "nazev" => "TOMIL s.r.o.", "www" => "tomil.cz/kariera"
                    ],
                    "Buhler" => [
                        "nazev" => "Bühler CZ s.r.o.", "www" => "www.buhlercz.cz"
                    ],
                    "LFHK" => [
                        "nazev" => "Univerzita Karlova, Lékařská fakulta v Hradci Králové", "www" => "www.lfhk.cuni.cz"
                    ],
                    "UNIPETROL" => [
                        "nazev" => "UNIPETROL  RPA s.r.o.", "www" => "www.unipetrolrpa.cz/CS/Stranky/default.aspx"
                    ],
                    "Albertinum" => [
                        "nazev" => "Albertinum, OLÚ, Žamberk", "www" => "www.albertinum-olu.cz/o_nas-1.html"
                    ]
                ]
            ]
        ],
        "stredocesky" => [
            "nazevKraje" => "Středočeský kraj",
            "nabidka" => [
                "zamestnavatele" => [ 
                    "Louny" => [
                        "nazev" => "EKOSTAVBY Louny s.r.o.", "www" => "www.ekostavbylouny.cz"
                    ],
                    "Unipetrol" => [
                        "nazev" => "Unipetrol RPA s.r.o.", "www" => "www.unipetrolrpa.cz/CS/Stranky/default.aspx"
                    ],
                    "Policie" => [
                        "nazev" => "Policejní prezidium ČR", "www" => "nabor.policie.cz/"
                    ],
                    "Teoros" => [
                        "nazev" => "Teoros Ttd a.s.", "www" => "www.cukrovaryttd.cz/"
                    ],
                    "Kautex" => [
                        "nazev" => "Kautex Textron Bohemia s.r.o.", "www" => "kautex.jobs.cz/"
                    ],
                    "FST" => [
                        "nazev" => "ZČU – FST", "www" => "www.fst.zcu.cz/cs/"
                    ],
                    "P&G" => [
                        "nazev" => "PROCTER & GAMBLE – RAKONA, s.r.o.", "www" => "pg.jobs.cz/"
                    ],
                    "DZD" => [
                        "nazev" => "Družstevní závody Dražice – strojírna s.r.o.", "www" => "www.dzd.cz"
                    ],
                    "VRL" => [
                        "nazev" => "VRL Praha a. s.", "www" => "www.vrl.cz/"
                    ],
                ]
            ]
        ],
        "ustecky" => [
            "nazevKraje" => "Ústecký kraj",
            "nabidka" => [
                "zamestnavatele" => [
                    "SpolChemie" => [
                        "nazev" => "Spolek pro chemickou a hutní výrobu, a.s.", "www" => "www.spolchemie.cz/cs/uvod"
                    ],
                    "SSI" => [
                        "nazev" => "SSI Technologies s.r.o.", "www" => "www.ssi-sensors.com/czech/o-nas"
                    ],
                    "Louny" => [
                        "nazev" => "EKOSTAVBY Louny s.r.o.", "www" => "www.ekostavbylouny.cz"
                    ],
                    "Unipetrol" => [
                        "nazev" => "Unipetrol RPA s.r.o.", "www" => "www.unipetrolrpa.cz/CS/Stranky/default.aspx"
                    ],
                    "Policie" => [
                        "nazev" => "Policejní prezidium ČR", "www" => "nabor.policie.cz/"
                    ]
                ] 
            ]
        ],
        "vysocina" => [
            "nazevKraje" => "kraj Vysočina",
            "nabidka" => [
                 "zamestnavatele" => [
                    "KOKINETICS" => [
                        "nazev" => "KOKINETICS s.r.o.", "www" => "www.firmy.cz/detail/144544-kokinetics-kamenice-nad-lipou.html"
                    ],
                    "MOTORPAL" => [
                        "nazev" => "MOTORPAL, a.s.", "www" => "www.motorpal.cz"
                    ],
                    "Ammeraal" => [
                        "nazev" => "Ammeraal Belech s.r.o.", "www" => "www.ammeraalbeltech.com/cs-CZ"
                    ],
                     "LFHK" => [
                        "nazev" => "Univerzita Karlova, Lékařská fakulta v Hradci Králové", "www" => "www.lfhk.cuni.cz"
                    ]
                 ]
            ]            
        ],
        "zlinsky" => [
            "nazevKraje" => "Zlínský kraj",
            "nabidka" => [        
                "zamestnavatele" => [
                    "Tritcon" => [
                        "nazev" => "Tritcon a.s.", "www" => "rejstrik-firem.kurzy.cz/07685998/tritcon-as"
                    ],
                    "ELMO" => [
                        "nazev" => "ELMO a.s.", "www" => "www.elmo.cz"
                    ],
                    "LFHK" => [
                        "nazev" => "Univerzita Karlova, Lékařská fakulta v Hradci Králové", "www" => "www.lfhk.cuni.cz"
                    ],
                ]
            ]
        ]
    ];
    
    /**
     * 
     * @param mixed $idKraje
     * @return array
     * @throws \UnexpectedValueException Neznáma hodnota parametru idKraje
     */
    public function findPodleIdKraje($idKraje=NULL) {
        if (!isset($idKraje) OR !$idKraje) {
            return [];
        } elseif (isset($this->pracePodleIdKraje[$idKraje])) {
            return $this->pracePodleIdKraje[$idKraje];
        } else {
            throw new \UnexpectedValueException("Neznáma hodnota parametru idKraje $idKraje");
        }
    }
    
}

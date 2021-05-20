                        <section class="uvod-slovo">
                            <?= $this->insert("contents/main/uvod/uvodniSlovo.php", $uvodniSlovo)?>
                        </section>
                        <section class="anotace">
                            <?= $this->insert("contents/main/uvod/anotace.php", $anotace)?> 
                        </section>
                        <section class="tem-okruhy"> 
                            <?= $this->insert("contents/main/uvod/tematickeOkruhy.php", $tematickeOkruhy)?>  
                        </section>
                        <section class="ukazka">
                            <?= $this->insert("contents/main/uvod/ukazka.php", $ukazka) ?>
                        </section>
                        <section class="ohlasy">
                            <?= $this->insert("contents/main/uvod/ohlasyCtenaru.php", $ohlasyCtenaruUvod) ?>
                        </section>
                        <?= $this->insert("contents/main/kontakt.php", $kontakt) ?>
                        
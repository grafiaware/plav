                    <div class="ui centered grid">
                        <div class="fourteen wide mobile twelve wide tablet eleven wide computer column">
                            <?= $this->filter('mono|p', $vystupDotazniku) ?>
                            <?= $this->filter('mono|p', $dotaznik) ?>
                            <section class="graf"> 
                                <?= $this->insert("contents/main/ohlasy_ctenaru/graf.php", $sectionGraf)?>
                            </section>
                            <section class="odpovedi">
                                <?= $this->insert("contents/main/ohlasy_ctenaru/odpovedi.php", $sectionOdpovedi)?>
                            </section>
                        </div>
                    </div>


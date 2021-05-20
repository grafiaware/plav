                    <div class="ui centered grid">
                       <div class="fourteen wide mobile twelve wide tablet ten wide computer column justified">
                            <div class="ui breadcrumb">
                                    <a class="section" href="index.php?main=pribehy">Příběhy studentů</a>
                                    <i class="right angle icon divider"></i>
                                    <p class="active section"><?= $autor ?></p> 
                            </div> 
                            <article> 
                                <?= $this->insert('contents/main/pribeh/pribehPerex.php', $pribehPerex) ?>
                                <?= $this->insert('contents/main/pribeh/pribehClanek.php', $pribehClanek) ?>
                            </article> 
                            <div class="ui horizontal divider">Přečtěte si také</div>
                            <?= $this->repeat('contents/main/pribehy/perex.php', $perexyOstatni) ?>
                        </div>
                    </div>
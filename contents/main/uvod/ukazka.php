                            <h2><?= $this->filter('mono',$nadpisSekce)?></h2>
                            <div class="ui grid">
                                <div class="sixteen wide column center aligned">
                                    <?= $this->repeat("contents/main/uvod/ukazka/odkaz_obrazek_popisek.php", $dataSekce['obrazky'])?>
                                </div>
                            </div>
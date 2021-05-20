<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                            <h2><?= Text::filter('mono',$nadpisSekce)?></h2>
                            <div class="ui two column stackable centered grid left aligned">
                                <?= $this->repeat("contents/main/uvod/ohlasyCtenaru/rozdeleni_sloupcu.php", $dataSekce)?>
                            </div>
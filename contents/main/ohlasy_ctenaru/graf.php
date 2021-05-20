<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                                <h2><?= Text::filter('mono',$nadpis)?></h2>
                                <a <?= Html::attributes($odkazAttributes)?>>
                                    <img <?= Html::attributes($imgAttributes)?>>
                                    <?= Text::filter('e|mono|p',$odkazText) ?>
                                </a>


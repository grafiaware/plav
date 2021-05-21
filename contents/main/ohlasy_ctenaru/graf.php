<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                                <h2><?= Text::filter('mono',$nadpis)?></h2>
                                <a <?= Html::attributes($odkazAttributes)?>>
                                    <img <?= Html::attributes($imgAttributes)?>>
                                    <?= Html::p(Text::filter('e|mono',$odkazText)) ?>
                                </a>


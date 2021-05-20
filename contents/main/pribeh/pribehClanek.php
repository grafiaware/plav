<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                                <img <?= Html::attributes($imgPribehuAttributes) ?> />
                                <?= Text::filter('mono|p', $castPribehu) ?>
                                <img <?= Html::attributes($imgAutoraAttributes)?> />
                                <?= Text::filter('mono|p', $cast2Pribehu) ?>
<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                                    <a <?= Html::attributes($odkazAttributes)?>>
                                        <img <?= Html::attributes($imgAttributes)?>/>
                                        <?= Text::filter('mono|p',$popisek)?>
                                    </a>


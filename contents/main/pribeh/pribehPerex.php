<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                                <h2><?= Text::filter('e|mono', $pribehyPerexTitleText) ?></h2>
                                <?= Text::filter('mono|p', $pribehyPerexText) ?>
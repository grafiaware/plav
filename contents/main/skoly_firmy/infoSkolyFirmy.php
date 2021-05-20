<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                        <div class="column justified">
                            <h2><?= Text::filter('mono',$nadpis) ?></h2>
                            <h3><?= Text::filter('e|mono', $podnadpis) ?></h3>
                            <?= Text::filter('e|mono|p', $text) ?>
                        </div>

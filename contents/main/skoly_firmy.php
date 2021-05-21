<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                    <div class="ui stackable two column divided grid">
                         <?= $this->repeat("contents/main/skoly_firmy/infoSkolyFirmy.php", $infoSkolyFirmy); ?>
                    </div>
                    <div class="ui centered grid">
                        <div class="fifteen wide mobile twelve wide tablet ten wide computer column center aligned">
                            <i class="comments outline circular icon"></i>
                            <?= Html::p(Text::filter('e|mono', $kontakt)) ?>
                        </div>
                    </div>
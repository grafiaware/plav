<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                                <?php /* @var $this Pes\View\Renderer\PhpRenderer */ ?>
                                <section class="otazka">
                                    <h3 <?= Html::attributes(['id'=>'kotva'.$idOtazky])?>><?= Text::filter('e|mono', $otazka) ?></h3>
                                    <?= $this->repeat('contents/main/ohlasy_ctenaru/odpovedi/vypisOdpovedi/progressOdpoved.php', $progressOdpovedi) ?>

                                    <ul class="ui list">
                                        <?= $this->repeat('contents/main/ohlasy_ctenaru/odpovedi/vypisOdpovedi/li.php', $topDeset, 'odpoved') ?>
                                    </ul>

                                    <a <?= Html::attributes(['class'=>'oznaceni'.$idOtazky.'-vice'])?>>Další odpovědi<i class="caret down icon"></i></a>
                                    <div <?= Html::attributes(['class'=>'oznaceni'.$idOtazky])?>>
                                        <ul class="ui list">
                                            <?= $this->repeat('contents/main/ohlasy_ctenaru/odpovedi/vypisOdpovedi/li.php', $dalsiOdpovedi, 'odpoved') ?>
                                        </ul>

                                        <a <?= Html::attributes(['class'=>'oznaceni'.$idOtazky.'-mene', 'href'=>'#'.'kotva'.$idOtazky])?>>
                                            Zobrazit méně
                                            <i class="caret up icon"></i>
                                        </a>
                                    </div>
                                </section>
        <script>


           $(document).ready(function(){
               $(".oznaceni<?=$idOtazky?>").hide();

               $(".oznaceni<?=$idOtazky?>-vice").click(function(){
                $(".oznaceni<?=$idOtazky?>").toggle();
               });

               $(".oznaceni<?=$idOtazky?>-mene").click(function(){
                $(".oznaceni<?=$idOtazky?>").hide();
               });

               });


        </script>
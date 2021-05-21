<?php
use Pes\Text\Text;
use Pes\Text\Html;
/* @var $this Pes\View\Renderer\PhpRenderer */
?>
                                    <div class="progress-odpoved">
                                        <div class="ui blue progress" <?= Html::attributes($progressOdpovediAttributes) ?>>
                                            <div class="bar">
                                                <div class="progress"></div>
                                            </div>
                                        </div>
                                        <?= Html::p(Text::filter('e|mono',$progressOdpovediNazev)) ?>
                                    </div>

                                <script> $('.progress').progress(); </script>
<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                            <section class="perex">
                                <div class="ui segment">
                                    <div class="ui two equal width column grid">
                                        <div class="sixteen wide mobile seven wide tablet five wide computer column middle aligned center aligned">
                                            <img class="ui image" <?= Html::attributes($pribehPerex['pribehyPerexImageAttributes']) ?> />
                                        </div>
                                        <div class="column">
                                            <h3>
                                                <a <?= Html::attributes($pribehPerex['pribehyPerexTitleAttributes']) ?>>
                                                    <?= Text::mono($pribehPerex['pribehyPerexTitleText'])?>
                                                </a>
                                            </h3>
                                            <?= Html::p(Text::mono(Text::esc($pribehPerex['pribehyPerexText']))) ?>
                                            <p>
                                                <a class="ui secondary basic button" <?= Html::attributes($pribehPerex['pribehyPerexButtonAttributes'])?> > <?=$pribehPerex['pribehyPerexButtonText']?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>


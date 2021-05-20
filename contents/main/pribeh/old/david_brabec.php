<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                    <div class="ui centered grid">
                       <div class="fourteen wide mobile twelve wide tablet ten wide computer column justified">
                            <div class="ui breadcrumb">
                                    <a class="section" href="index.php?main=pribehy"> <?= $pribehyStudentu['nazev'] ?></a>
                                    <i class="right angle icon divider"></i>
                                    <p class="active section"><?= $pribehyStudentu['DavidBrabec']['autor'] ?></p>
                            </div>
                            <article>
                                <h2><?= Text::filter('e|mono', $pribehPerex['pribehyPerexTitleText']) ?></h2>
                                <?= Text::filter('e|mono|p', $pribehPerex['pribehyPerexText']) ?>
                                <img <?= Html::attributes($pribehyStudentu['DavidBrabec']['imgPribehuAttributes']) ?> />
                                <?= Text::filter('e|mono|p', $pribehyStudentu['DavidBrabec']['castPribehu']) ?>
                                <img <?= htmlattributes($pribehyStudentu['DavidBrabec']['imgAutoraAttributes'])?> />
                                <?= Text::filter('e|mono|p', $pribehyStudentu['DavidBrabec']['cast2Pribehu']) ?>
                            </article>
                            <div class="ui horizontal divider"><?= $pribehyStudentu['divider'] ?></div>
                            <?= $this->repeat('contents/main/pribehy/perex.php', $context['perexy']) ?>
                        </div>
                    </div>
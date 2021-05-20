<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
                                <h2><?= Text::filter('mono',$nadpis) ?></h2>
                                <?= $this->repeat("contents/main/ohlasy_ctenaru/odpovedi/vypisOdpovedi.php", $dataOdpovedi); ?>
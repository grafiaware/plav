<?php switch ($mainTemplate): ?>
<?php case 'ohlasy_ctenaru': ?>
    <?= $this->insert("contents/main/ohlasy_ctenaru.php", $ohlasyCtenaru) ?>
<?php break ?>
<?php case 'kontakt': ?>
    <?= $this->insert("contents/main/kontakt.php", $kontakt) ?>
<?php break ?>
<?php case 'prac_mista': ?>
    <?= $this->insert("contents/main/prac_mista.php", $pracMista) ?>
<?php break ?>
<?php case 'pribehy': ?>
    <?= $this->insert("contents/main/pribehy.php", $perexyVsechny) ?>
<?php break ?>
<?php case 'pribeh': ?>
    <?= $this->insert("contents/main/pribeh.php", $pribehyAperexy) ?>
<?php break ?>
<?php case 'skoly_firmy': ?>
    <?= $this->insert("contents/main/skoly_firmy.php", $skolyFirmy) ?>
<?php break ?>
<?php case 'uvod': ?>
<?php default: ?>
    <?= $this->insert("contents/main/uvod.php", $uvodniStranka) ?>
<?php endswitch ?>
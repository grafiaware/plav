<?php
use Pes\Text\Text;
use Pes\Text\Html;
?>
<!DOCTYPE html>

<html>
    <?= $this->insert("contents/head.php") ?>
    <body>
        <div class="ui centered grid">
            <div class="sixteen wide mobile fourteen wide tablet thirteen wide computer column">
                <header>
                    <?= $this->insert("contents/header.php") ?>
                </header>
                <nav>
                    <?= $this->insert("contents/nav.php") ?>
                </nav>
                <main <?= Html::attributes($mainAttributes) ?> >
                    <?= $this->insert($templateName, $context) ?>
                </main>
                <footer>
                    <?= $this->insert("contents/footer.php") ?>
                </footer>
            </div>
        </div>

        <script>
            $('.ui.sticky')
                .sticky()
            ;

            $('.ui.dropdown')
                .dropdown()
            ;
        </script>

    </body>
</html>
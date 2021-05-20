                    <h2>Příběhy reálných lidí pro inspiraci</h2>
                    <div class="ui grid">
                        <div class="fifteen wide mobile thirteen wide tablet eleven wide computer column">
                            <?= $this->insert('contents/main/pribehy/googleForm.php') ?>
                            <?= $this->repeat('contents/main/pribehy/perex.php', $perexy) ?>
                        </div>
                    </div>
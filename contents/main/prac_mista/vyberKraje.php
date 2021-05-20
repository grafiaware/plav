                            <div class="mapa">
                                <?= $this->repeat('contents/main/prac_mista/vyberKraje/vyberKrajeMapa.php', $seznamKraju) ?>
                            </div>
                            <form method="GET" action="" class="seznam-kraju">
                                <?= $this->repeat('contents/main/prac_mista/vyberKraje/hiddenInput.php', $hiddenInputs) ?> 
                                <select <?= $this->attributes($selectAttributes)?>>
                                    <?= $this->repeat('contents/main/prac_mista/vyberKraje/vyberKrajeSelectOption.php', $seznamKraju) ?>
                                </select>
                                <input class="ui basic button" type="submit" value="Vyhledat"/>
                            </form>
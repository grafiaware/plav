                                    <?php /* @var $this Pes\View\Renderer\PhpRenderer */ ?>                                    
                                    <div class="progress-odpoved">
                                        <div class="ui blue progress" <?= $this->attributes($progressOdpovediAttributes) ?>>
                                            <div class="bar">
                                                <div class="progress"></div>
                                            </div>
                                        </div>
                                        <?= $this->filter('e|mono|p',$progressOdpovediNazev) ?>
                                    </div>

                                <script> $('.progress').progress(); </script>
<?php

$candidates = array(
    'betty' => 'Betty Bear',
    'felix' => 'Felix Fox',
    'lucinda' => 'Lucinda Lizard',
    'roberto' => 'Roberto Rabbit',
    'diego' => 'Diego Deer'
);
//$candidates = shuffle_assoc($candidates);
$i = 10;
?>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form id="candidate-form" class="candidate-form" action="results.php" method="post">
                <div class="candidate-table">
                    <div class="table-row header">
                        <div class="cell light blank"></div>


                        <div class="english-content cell">
                            Rank <br><span class="number">1</span>
                        </div>
                        <span class="spanish-content cell">
                            <span class="number">1<sup>a</sup></span> Opción
                        </span>
                        <div class="english-content cell">
                            Rank <br><span class="number">2</span>
                        </div>
                        <span class="spanish-content cell">
                            <span class="number">2<sup>a</sup></span> Opción
                        </span>
                        <div class="english-content cell">
                            Rank <br><span class="number">3</span>
                        </div>
                        <span class="spanish-content cell">
                            <span class="number">3<sup>a</sup></span> Opción
                        </span>
                        <div class="english-content cell">
                            Rank <br><span class="number">4</span>
                        </div>
                        <span class="spanish-content cell">
                            <span class="number">4<sup>a</sup></span> Opción
                        </span>
                        <div class="english-content cell">
                            Rank <br><span class="number">5</span>
                        </div>
                        <div class="spanish-content cell">
                            <span class="number">5<sup>a</sup></span> Opción
                        </div>
                    </div>

                    <?php foreach ($candidates as $key => $candidate) : $i++; ?>
                        <div class="table-row">
                            <div class="cell name"><?php echo $candidate; ?></div>
                            <div class="cell"><input type="checkbox" value="1" name="<?php echo $key . '-' . $i++; ?>">
                            </div>
                            <div class="cell"><input type="checkbox" value="2" name="<?php echo $key . '-' . $i++; ?>">
                            </div>
                            <div class="cell"><input type="checkbox" value="3" name="<?php echo $key . '-' . $i++; ?>">
                            </div>
                            <div class="cell"><input type="checkbox" value="4" name="<?php echo $key . '-' . $i++; ?>">
                            </div>
                            <div class="cell"><input type="checkbox" value="5" name="<?php echo $key . '-' . $i++; ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <input type='hidden' name='form_submitted' value='1'/>
                <?php ft_nonce_create_form_input('vote-post'); ?>
                <input class="btn btn-success pull-right btn-lg" type="submit" value="Submit Vote"/>
            </form>
        </div>
    </div>
</div>

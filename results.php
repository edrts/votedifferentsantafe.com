<?php include_once 'includes/functions.php'; ?>
<?php
$error = false;
$votes = null;
if (isset($_POST['form_submitted']) && isset($_POST['_nonce'])) {
    if (ft_nonce_is_valid($_POST['_nonce'], 'vote-post')) {
        vote_record_vote($_POST);
        $votes = $_POST;
    } else {
        $error = "<p>No data was submitted or the proper form was not used!<p>";
    }
} else {
    $error = "<p>No data was submitted or the proper form was not used!<p>";
}
?>


    <!doctype html>
    <html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
    <?php include_once 'includes/head.php'; ?>

    <body>

    <div class="jumbotron">
        <div class="container">
            <h1><span class="english-content">Vote Different Santa Fe!</span><span class="spanish-content">Vota Differente Santa Fe!</span></h1>
            <h2><span class="english-content">Our New ranked-choice ballot</span><span class="spanish-content">La Votación por Rango de Preferencia</span></h2>
        </div>
    </div>
    <?php include 'layouts/navigation.php'; ?>



    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <?php if ($error) {
                    echo vote_output_response_container('open', 'danger');
                        echo $error;
                    echo vote_output_response_container('close');
                } else {
                    vote_analyze_vote($votes);
                }; ?>
                <a href="/practice-ballot" class="btn btn-success pull-right btn-lg" title="Practice Ballot"><span class="english-content">Submit a New Vote</span><span class="spanish-content">Presentar un nuevo voto</span></a>
            </div>
        </div>
    </div>





    <?php include 'layouts/footer.php'; ?>
    </body>
    <?php include 'includes/footer-scripts.php'; ?>
    </html>
<?php //open php tag to avoid headers already sent


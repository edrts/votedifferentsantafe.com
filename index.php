<?php include_once 'includes/functions.php';

//if(isset($_GET['user']) && isset($_GET['pass'])) :
//    $user = $_GET['user'];
//    $pass = $_GET['pass'];
//    if ($user == "olivia" && $pass == "owl") :
//
// ?>

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

<?php
include 'layouts/navigation.php';
include 'layouts/introparagraph.php';

include 'layouts/videos.php';
include 'layouts/sample-ballots.php';
include 'layouts/faq.php';

include 'layouts/footer.php'; ?>
</body>
<?php include 'includes/footer-scripts.php'; ?>
</html>
<?php // endif; endif; //open php tag to avoid headers already sent

<?php include_once 'includes/functions.php'; ?>
    <!doctype html>
    <html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
    <?php include_once 'includes/head.php'; ?>
    <body>

    <div class="jumbotron">
        <div class="container">
            <h1><a href="/" title="Home" alt="Home">Vote Different Santa Fe!</a> </h1>
            <h2>Our New ranked-choice ballot</h2>
        </div>
    </div>

    <?php
    include 'layouts/navigation.php';
    include 'layouts/votingcc/mappoints.php';

    include 'layouts/footer.php'; ?>
    </body>
    <?php include 'includes/footer-scripts.php'; ?>
    </html>
<?php //open php tag to avoid headers already sent

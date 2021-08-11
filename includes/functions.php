<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'ft-nonce-lib.php';


function mapi_var_dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


function vote_record_vote($votes)
{

}


//<div class="alert alert-success" role="alert">...</div>
//<div class="alert alert-info" role="alert">...</div>
//<div class="alert alert-warning" role="alert">...</div>
//<div class="alert alert-danger" role="alert">...</div>


function vote_output_response_container($open_or_close, $alert = 'success')
{
    $return = '';

    if ($open_or_close == 'open') {
        $return = '<div class="alert alert-' . $alert . '" role="alert">';
    } elseif ($open_or_close == 'close') {
        $return = '</div>';
    }
    return $return;
}


function vote_array_build($votes)
{
    $new_votes_array = array();


    foreach ($votes as $key => $vote) :
        $new_votes_array[] = array(
            substr($key, 0, -3) => substr($key, 0, -3),
            $vote => $vote
        );
    endforeach;
    return $new_votes_array;

}


function shuffle_assoc($list) {
    if (!is_array($list)) return $list;

    $keys = array_keys($list);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key) {
        $random[$key] = $list[$key];
    }
    return $random;
}


function vote_analyze_vote($votes)
{

    unset($votes['form_submitted']);
    unset($votes['_nonce']);


    $names = array(
        'betty' => 'Betty Bear',
        'felix' => 'Felix Fox',
        'lucinda' => 'Lucinda Lizard',
        'roberto' => 'Roberto Rabbit',
        'diego' => 'Diego Deer'
    );
    $candidates = array();
    $error = '';
    $success = '';
    $ballot = 'good';
    $event = '<script>';

    $rankings = array();

    foreach ($votes as $key => $vote) :
        if($ballot === 'good') :

        if (!array_key_exists(substr($key, 0, -3), $candidates)) {
            $candidates[substr($key, 0, -3)] = array(
                'candidate' => substr($key, 0, -3),
                'ranking' => $vote
            );

        } else {
            $error .= vote_output_response_container('open', 'warning');
            $error .= '<span class="english-content"><strong>This ballot has a Duplicate Ranking for ' . $names[substr($key, 0, -3)] . '</strong><br></span>';;
            $error .= '<span class="spanish-content"><strong>Esta boleta tiene un Rango Duplicado para ' . $names[substr($key, 0, -3)] . '</strong><br></span>';
            $error .= '<span class="english-content">You have ranked ' . $names[substr($key, 0, -3)] . ' at multiple rankings. The highest ranking for the candidate is valid and any lower rankings of that candidate shall be ignored.</span>';
            $error .= '<span class="spanish-content">Has clasificado a  ' . $names[substr($key, 0, -3)] . ' en varios rangos. El rango del candidato mas alto tendrá validez y cualquier rango siguiente, sera ignorado.</span>';
            $error .= vote_output_response_container('close');
            $event .= "gtag('event', 'vote_event', { 'event_action': 'Ballot Error', 'event_label': 'Duplicate Ranking for Candidate', 'event_category': 'vote', 'severity': 'warning' });";
        }


        if (!array_key_exists($vote, $rankings)) {
            $rankings[$vote] = array(
                'candidate' => substr($key, 0, -3),
                'ranking' => $vote
            );
        } else {

            $error .= vote_output_response_container('open', 'danger');
            $error .= '<span class="english-content"><strong>You ranked multiple candidates for Rank ' . $vote . '</strong><br></span>';
            $error .= '<span class="spanish-content"><strong>Clasificó varios candidatos para rango ' . $vote . '</strong><br></span>';
            $error .= '<span class="english-content">When the ballot counter reads multiple candidates ranked the same, it will discard the ballot.</span>';
            $error .= '<span class="spanish-content">Has clasificado a los candidatos por rango. Cuando la boleta muestra lo mismo se elimina la boleta.</span>';
            $error .= vote_output_response_container('close');
            $event .= "gtag('event', 'vote_event', { 'event_action': 'Ballot Error', 'event_label': 'Duplicate Votes for Candidate', 'event_category': 'vote', 'severity': 'danger' });";
            $ballot = 'discard';
        }
        endif;
    endforeach;


    if (count($candidates) < count($names)) {
        $error .= vote_output_response_container('open', 'warning');
        $error .= '<span class="english-content"><strong>You have skipped ranking some candidates.</strong><br></span>';
        $error .= '<span class="spanish-content"><strong>Te ha faltado clasificar por rango a algunos candidatos..</strong></span><br>';
        $error .= '<span class="english-content">If a voter skips a numerical ranking, the skipped ranking will be ignored and the next indicated ranking on that ballot will be valid.</span>';
        $error .= '<span class="spanish-content">Si el votante se salta un rango por orden numérico, el rango que ha sido saltado será ignorado y el rango que sigue será válido.</span>';
        $error .= vote_output_response_container('close');
        $event .= "gtag('event', 'vote_event', { 'event_action': 'Ballot Error', 'event_label': 'Skipped Candidates', 'event_category': 'vote', 'severity': 'warning' });";
    }


    function array_sort_by_column(&$arr, $col, $dir = SORT_ASC)
    {
        $sort_col = array();
        foreach ($arr as $key => $row) {
            $sort_col[$key] = $row[$col];
        }

        array_multisort($sort_col, $dir, $arr);
    }

    array_sort_by_column($candidates, 'ranking');


    if ($error) :
        echo $error;
    else :
        $success = vote_output_response_container('open', 'success');
        $success .= '<span class="english-content">Your ballot has no errors or warnings!</span>';
        $success .= '<span class="spanish-content">Tu boleta no contiene errores ni advertencias!</span>';
        $success .= vote_output_response_container('close');
        $event .= "gtag('event', 'vote_event', { 'event_action': 'Ballot Success', 'event_label': 'Ballot without Errors', 'event_category': 'vote', 'severity': 'success' });";

    endif;

    if ($ballot === 'good'):
        $success .= vote_output_response_container('open', 'success');
        $success .= '<span class="english-content"><h4>This is how you ranked the candidates:</h4></span>';
        $success .= '<span class="spanish-content"><h4>Aqui esta tu lista de candidatos por rango:</h4></span>';
        $success .= '<ol>';

        foreach ($candidates as $candidate):
            $success .= '<li><strong>' . $names[$candidate['candidate']] . '</strong></li>';
            $event .= "gtag('event', 'vote_event', { 'event_action': 'Vote Cast', 'event_label': '" . $names[$candidate['candidate']] . "', 'event_category': 'vote', 'value': " . $candidate['ranking'] . " });";

        endforeach;
        $success .= '</ol>';
    endif;

    $success .= vote_output_response_container('close');
    $event .= '</script>';


    echo $success;



    echo $event;


}
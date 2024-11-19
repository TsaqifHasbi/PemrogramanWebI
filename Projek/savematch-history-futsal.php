<?php
session_start();

$team_a_name = $_POST['team_a_name'];
$team_b_name = $_POST['team_b_name'];
$team_a_score = $_POST['team_a_score'];
$team_b_score = $_POST['team_b_score'];

date_default_timezone_set('Asia/Jakarta');
$currentDateTime = new DateTime();
$formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');

$match = [
    'team_a_name' => $team_a_name,
    'team_b_name' => $team_b_name,
    'team_a_score' => $team_a_score,
    'team_b_score' => $team_b_score,
    'match_date' => $formattedDateTime
];

if (!isset($_SESSION['match_history_futsal'])) {
    $_SESSION['match_history_futsal'] = [];
}

$_SESSION['match_history_futsal'][] = $match;

header('Location: score-futsal.php');
exit();
?>
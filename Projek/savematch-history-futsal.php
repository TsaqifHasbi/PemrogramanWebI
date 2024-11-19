<?php
session_start();

$team_a_name = $_POST['team_a_name'];
$team_b_name = $_POST['team_b_name'];
$team_a_score = $_POST['team_a_score'];
$team_b_score = $_POST['team_b_score'];

$match = [
    'team_a_name' => $team_a_name,
    'team_b_name' => $team_b_name,
    'team_a_score' => $team_a_score,
    'team_b_score' => $team_b_score,
    'match_date' => date('Y-m-d H:i:s')
];

if (!isset($_SESSION['match_history'])) {
    $_SESSION['match_history'] = [];
}

$_SESSION['match_history'][] = $match;

header('Location: score-futsal.php');
exit();
?>
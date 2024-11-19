<?php
session_start();

$team_a_name = $_POST['team_a_name'];
$team_b_name = $_POST['team_b_name'];
$team_a_score = $_POST['team_a_score'];
$team_b_score = $_POST['team_b_score'];
$team_a_set = $_POST['team_a_set'];
$team_b_set = $_POST['team_b_set'];

$match = [
    'team_a_name' => $team_a_name,
    'team_b_name' => $team_b_name,
    'team_a_score' => $team_a_score,
    'team_b_score' => $team_b_score,
    'team_a_set' => $team_a_set,
    'team_b_set' => $team_b_set,
    'match_date' => date('Y-m-d H:i:s')
];

if (!isset($_SESSION['match_history_badminton'])) {
    $_SESSION['match_history_badminton'] = [];
}

$_SESSION['match_history_badminton'][] = $match;

header('Location: score-badminton.php');
exit();
?>
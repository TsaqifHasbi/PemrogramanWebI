<?php
session_start();

$team_a_name = $_POST['team_a_name'];
$team_b_name = $_POST['team_b_name'];
$team_a_score = $_POST['team_a_score'];
$team_b_score = $_POST['team_b_score'];
$team_a_set = $_POST['team_a_set'];
$team_b_set = $_POST['team_b_set'];
$team_a_score_set1 = $_POST['team_a_score_set1'];
$team_a_score_set2 = $_POST['team_a_score_set2'];
$team_a_score_set3 = $_POST['team_a_score_set3'];
$team_b_score_set1 = $_POST['team_b_score_set1'];
$team_b_score_set2 = $_POST['team_b_score_set2'];
$team_b_score_set3 = $_POST['team_b_score_set3'];

$match = [
    'team_a_name' => $team_a_name,
    'team_b_name' => $team_b_name,
    'team_a_score' => $team_a_score,
    'team_b_score' => $team_b_score,
    'team_a_set' => $team_a_set,
    'team_b_set' => $team_b_set,
    'team_a_score_set1' => $team_a_score_set1,
    'team_a_score_set2' => $team_a_score_set2,
    'team_a_score_set3' => $team_a_score_set3,
    'team_b_score_set1' => $team_b_score_set1,
    'team_b_score_set2' => $team_b_score_set2,
    'team_b_score_set3' => $team_b_score_set3,
    'match_date' => date('Y-m-d H:i:s')
];

if (!isset($_SESSION['match_history_badminton'])) {
    $_SESSION['match_history_badminton'] = [];
}

$_SESSION['match_history_badminton'][] = $match;

header('Location: score-badminton.php');
exit();
?>
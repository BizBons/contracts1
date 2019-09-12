<?php
////UNCOMMENT FOR DEFENSE! or COMMENT FOR DEBUGGING! this will hide all the undefined error for optional fields
error_reporting(0);
@ini_set(‘display_errors’, 0);

session_start();
require_once ('dbconnect.php');

if($_POST['electionid']) {
	$voterid = $_SESSION['username'];
	$electionid = $_POST['electionid'];
	$pres = $_POST['pres'];
	$vpres = $_POST['vpres'];
	$sec = $_POST['sec'];
	$treas = $_POST['treas'];
	$firstRep = $_POST['first'];
	$secondRep = $_POST['second'];
	$thirdRep = $_POST['third'];
	$fourthRep = $_POST['fourth'];

	$error = false;

	//insert votes to DB
	$vote_pres = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 1, $pres, $electionid)";
	$pres_res = mysqli_query($conn,$vote_pres);echo $vote_pres;
	if($pres_res === FALSE)
	{
		$error = true;
		die(mysqli_error());
	}

	$vote_vpres = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 2, $vpres, $electionid)";
	$vpres_res = mysqli_query($conn,$vote_vpres);
	if($vpres_res === FALSE)
	{
		$error = true;
		die(mysqli_error());
	}

	$vote_sec = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 3, $sec, $electionid)";
	$sec_res = mysqli_query($conn,$vote_sec);
	if($sec_res === FALSE)
	{
		$error = true;
		die(mysqli_error());
	}

	$vote_treas = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 4, $treas, $electionid)";
	$treas_res = mysqli_query($conn,$vote_treas);
	if($treas_res === FALSE)
	{
		$error = true;
		die(mysqli_error());
	}

	if($firstRep != '')
	{
		$vote_first = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 5, $firstRep, $electionid)";
		$first_res = mysqli_query($conn,$vote_first);
		if($first_res === FALSE)
		{
			$error = true;
			die(mysqli_error());
		}
	}
	else if($secondRep != '')
	{
		$vote_second = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 6, $secondRep, $electionid)";
		$second_res = mysqli_query($conn,$vote_second);
		if($second_res === FALSE)
		{
			$error = true;
			die(mysqli_error());
		}
	}
	else if($thirdRep != '')
	{
		$vote_third = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 7, $thirdRep, $electionid)";
		$third_res = mysqli_query($conn,$vote_third);
		if($third_res === FALSE)
		{
			$error = true;
			die(mysqli_error());
		}
	}
	else if($fourthRep != '')
	{
		$vote_fourth = "INSERT INTO vote_count (voter_id, position_id, candidate_id, election_id) VALUES ($voterid, 8, $fourthRep, $electionid)";
		$fourth_res = mysqli_query($conn,$vote_fourth);
		if($fourth_res === FALSE)
		{
			$error = true;
			die(mysqli_error());
		}
	}

	//then Update status of voter to already voted
	if(!$error)
	{
		$voted_query = "UPDATE voter_election SET already_voted=1 WHERE username = '$voterid' and election_id = $electionid and (role = 'voter' or role='comsel')";echo $voted_query;
		$voted_res = mysqli_query($conn,$voted_query);
		if($voted_query === FALSE)
			die(mysqli_error());
	}
	
}

?>
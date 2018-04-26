<?php 
	$a = $_POST['amount']; 
	include 'logic.php';
	
?>


<title>bracket voila!</title>
<link rel="stylesheet" type="text/css" href="flexBox.css">
<a href="/test_bracket_build/form/"> <-- BACK</a><br>
<main id="tournament">
	
	<ul class="round round-1"> <?php printFirstRoundBracket($a); ?> </ul>
	<ul class="round round-2"> <?php printSecondRoundBracket($a); ?> </ul>
	<ul class="round round-3"> <?php printThirdRoundBracket($a); ?> </ul>
	<ul class="round round-4"> <?php printFourthRound($a); ?> </ul>


</main>

<script type="text/javascript">console.log('form executed!');</script>
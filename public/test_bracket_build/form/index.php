<title>public/test_bracket_build/form/</title>





<?php 
	$a = $_POST['amount']; 
	include 'logic.php';
	$setup = whatWeNeedToKnow($a);
	
?>



<form action="/test_bracket_build/form/index.php" method="post">
	Enter the amount of competitors (between 4-128): <input type="text" name="amount">
	<!-- <input type="submit"> -->
	<button type="submit">build bracket</button>
</form>


<title>bracket voila!</title>
<link rel="stylesheet" type="text/css" href="flexBox.css">

<main id="tournament">
	
	<ul class="round round-1"> <?php printBracket($setup['amount_of_teams_first_round']); ?> </ul>
	<ul class="round round-2"> <?php printBracket($setup['amount_of_teams_second_round'], $setup['amount_of_teams_first_round_buys']); ?> </ul>
	<ul class="round round-3"> <?php printBracket($setup['amount_of_teams_third_round']); ?> </ul>
	<ul class="round round-4"> <?php printBracket($setup['amount_of_teams_fourth_round']); ?> </ul>
	<ul class="round round-5"> <?php printBracket($setup['amount_of_teams_fifth_round']); ?> </ul>
	<ul class="round round-6"> <?php printBracket($setup['amount_of_teams_sixth_round']); ?> </ul>
	<ul class="round round-7"> <?php printBracket($setup['amount_of_teams_seventh_round']); ?> </ul>


</main>

<script type="text/javascript">console.log('form executed!');</script>
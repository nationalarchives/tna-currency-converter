<html>
 <head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

<style>

h1,h2,h3,h4,h5,h6 {
	font-family: "Bitter","Sans-serif";
}

body {
	font-family: "Open Sans","Sans-serif";
}

</style>

 	<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);



$userInputMoney = $_POST["money"];
$userInputYear = $_POST["year"];

include 'currency-math-values.php';


$money = $userInputMoney/$rate;




$totalHorses = floor($money/$horsePrice);
$totalCows = floor($money/$cowPrice);
$totalWool = floor($money/$woolPrice);
$totalWheat = floor($money/$wheatPrice);
$totalWages = floor($money/$wagesPrice);



?>


  <title>Form Test</title>
 </head>
 <body>

<h1>Results</h1>

<p> <?php echo "User Input: £" .$userInputMoney .", Year " .$userInputYear; ?> </p>


<p> <?php echo $totalWages ." <strong>x</strong> <img src='./img/wages.gif' /> Days (craftsman wages in building trade)" ; ?> </p> 
<p> <?php echo $totalWool ." <strong>x</strong> <img src='./img/wool.gif' /> Wool (per stone)"; ?></p> 
<p> <?php echo $totalWheat ." <strong>x</strong> <img src='./img/wheat.gif' /> Wheat (quarter)"; ?> </p>
<p> <?php echo $totalCows ." <strong>x</strong> <img src='./img/cow.gif' /> Livestock (cow)"; ?> </p>
<p> <?php echo $totalHorses ." <strong>x</strong> <img src='./img/horse.gif' /> Horses (single)"; ?> </p>








<form action="buying-power.php" method="post">
£ <input type="number" name="money" value="<?= $userInputPound ?>" maxlength="10">
<select name="year">
	<option value="2005">2005</option>
   

	<?php for($i = 1270; $i <= 1900; $i = $i+10){ 
		if($i == $userInputYear){
		echo "<option value='".$i."' selected>".$i ."</option>";
		}
		else {
		echo "<option value='".$i."'>".$i ."</option>";
		}

		

	} ?>

	<?php for($i = 1905; $i <= 2005; $i = $i+5){ 
		if($i == $userInputYear){
		echo "<option value='".$i."' selected>".$i ."</option>";
		}
		else {
		echo "<option value='".$i."'>".$i ."</option>";
		}

	} ?>


</select>
<input type="submit">
</form>

<p><a href="./index.php">Go Back</a></p>

 </body>
</html>
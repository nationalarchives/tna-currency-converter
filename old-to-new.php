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

$userInputYear = $_POST["year"];

include 'currency-math-values.php';


$pound = $_POST["pounds"];
$shilling = $_POST["shillings"];
$pence = $_POST["pence"];


$addup = $pound + ($shilling/20) + ($pence/240);
$value = $addup * $rate;



?>


</head>

<body>

<h1>Results</h1>

<p>Equation: (pounds) + (shilling/20) + (pence/240)</p>
<p><?php echo "£" .$pound ."+(" .$shilling ."s/20)+(" .$pence ."p/240) =" ?></p>
<p> <strong><?php echo "£".number_format($value, 2); ?></strong></p>

<p><a href="./index.php">Go Back</a></p>

</body>
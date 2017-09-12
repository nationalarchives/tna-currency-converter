<head>

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

</head>

<h1>Buying power</h1>
<form action="buying-power.php" method="post">
£ <input type="number" name="money" step="0.01" min="0" max="1000000000" required >
<select name="year">
	<option value="2005">2005</option>
   

	<?php for($i = 1270; $i <= 1900; $i = $i+10){ 
		echo "<option value='".$i."'>".$i ."</option>";

	} ?>

	<?php for($i = 1905; $i <= 2005; $i = $i+5){ 
		echo "<option value='".$i."'>".$i ."</option>";

	} ?>


</select>
<input type="submit">
</form>

<h1>Convert 1270-1970 money to 2005 money</h1>
<form action="old-to-new.php" method="post">

£ <input type="number" name="pounds" min="0" max="1000000000" required >
Shillings <input type="number" name="shillings" min="0" max="19" required >
Pence <input type="number" name="pence" step="0.01" min="0" max="11.99" required >


<select name="year">
   

	<?php for($i = 1270; $i <= 1900; $i = $i+10){ 
		echo "<option value='".$i."'>".$i ."</option>";

	} ?>

	<?php for($i = 1905; $i <= 1970; $i = $i+5){ 
		echo "<option value='".$i."'>".$i ."</option>";

	} ?>


</select>
<input type="submit">
</form>

<?php print('<?xml version = "1.0" encoding = "utf-8"?>') ?>
<html>
<head>
	<title>Using PHP document</title> 
</head>
<?php
	$file = fopen("times.txt", "r");
	$sum = fgets($file);
	$sum = $sum+1;
	$file = fopen("time.txt", "w");
	fwrite($file,$sum);
	fclose($file);
	$abc = 12;
?>
<body style ="font-size: 2em">
		<strong>        
			你的姓名為： <?php print("$_POST[username]"); ?>!
		</strong>
		<br />
		    你的學號為： <?php print("$_POST[usernumber]"); ?>!
		<br />
		    你猜的數字為： <?php print("$_POST[number]"); ?>!
		<br />
		<?php if($abc>"$_POST[number]"){
			echo "數字太小了";
		}
		else{
			echo "猜對了";
		}
		?>
		<br />
			你總共猜了： <?php echo "$sum" ?>次!
</body>

<br />
<input type="button" onclick="history.back()" value="回到上一頁"/>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		include 'contador2.php';
		if (isset($_COOKIE['counte'])) {
			$counte = $_COOKIE['counte'] + 1;
		} else {
			$counte = 1;
			$a++;
		}	
		$abre =@fopen("contador2.php","w");
		$ss ='<?php $a='.$a.'; echo "<H6>$a Pessoas visitaram esse Projeto.</H6>";?>';
		$escreve =fwrite($abre, $ss);
	?>
							  
	<?php $a=0;?>

</body>
</html>
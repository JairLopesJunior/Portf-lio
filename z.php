<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!--acrescente na sua pagina principal substitua 3700 pelo tento que quiser em segundos-->
<?php
include 'contador.php';
   if (isset($_COOKIE['counte'])) {
      $counte = $_COOKIE['counte'] + 1;
  } else {
    $counte = 1;
    $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>

<!--e coloque onde você quiser que que exiba o contador, personalize do jeito que quiser-->

<?php
echo "<br>$a Pessoas vizitaram esse site voce ja vitou $counte vezes";
?>  

e crie um arquivo no mesmo diretório chamado "contador.php"

<?php $a=0; ?>

</body>
</html>
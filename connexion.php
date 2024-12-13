<?php
$serv="127.0.0.2";
$user="root";
$pass="";
$BD="ks_service";
$connect=mysqli_connect($serv,$user,$pass);
if ($connect)
{
	echo ("connexion effectuee").'<br>';
	$sel=mysqli_select_db($connect ,$BD,);


if($sel)
{
	echo ("base de donnees trouvee").'<br>';
}
else 
{
echo ("base de donnees non trouvee").'<br>';
}

}

else 
{
	echo ("connexion non effectuee").'<br>';
}
?>
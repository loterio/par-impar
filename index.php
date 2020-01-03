<!DOCTYPE html>
<?php
$you=0;
	if(isset($_POST['voce']))
		$you=$_POST['voce'];

$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';

$pc=0;
$tipopc='';
$nega=0;
?>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title><?php  ?></title>
	<link rel="stylesheet" href="style.css">

		<style media="screen">
			fieldset{
				width: 350px;
			}
			h6{
				font-size: 18px;
				color: red;
			}
			h5{
				font-size: 18px;
				color: green;
			}
		</style>

</head>
<body>
<center>
Escolha um número para jogar par ou ímpar
<form class="" action="" method="post">
	<select name="voce" id="voce">
		<?php
		for($i=0; $i <= 10 ; $i++){
			echo "<option value='".$i."'>".$i."</option>";
		}
		?>
	</select>
	Par <input type="radio" name="tipo" value="par">
	Ímpar <input type="radio" name="tipo" value="impar"><br>
	<input type="submit" value="send"><br><br>
</form>
</center>
<?php
echo "<center>";
srand();
$pc=rand(0,10);
$nega=$you+$pc;
if($tipo=='par'){ // eu=par pc=impar
echo "<fieldset>";
	$tipopc='ímpar';
	echo "<br>Usuário: ".$you." / ".$tipo."<br>Computador: ".$pc." / ".$tipopc."<br>Total: ".$nega;
	if($nega%2==0){
		echo "<br><br><h5>Você ganhou</h5>";
	}elseif($nega%2==1){
		echo "<br><br><h6>O PC ganhou</h6>";
	}
echo "</fieldset>";
}else{ // eu=impar pc=par
echo "<fieldset>";
	$tipopc='par';
	echo "<br>Usuário: ".$you." / ".$tipo."<br>Computador: ".$pc." / ".$tipopc."<br>Total: ".$nega;
	if($nega%2==0){
		echo "<br><br><h6>O PC ganhou</h6>";
	}elseif($nega%2==1){
		echo "<br><br><h5>Você ganhou</h5>";
	}
}
echo "</fieldset>";
echo "</center>";

echo "<center>";
switch($you){
	case 0:
			echo "<img src='img/zero.png' width='240'>";
		break;
	case 1:
			echo "<img src='img/um.png' width='240'>";
		break;
	case 2:
			echo "<img src='img/dois.png' width='240'>";
		break;
	case 3:
			echo "<img src='img/tres.png' width='240'>";
		break;
	case 4:
			echo "<img src='img/quatro.png' width='240'>";
		break;
	case 5:
			echo "<img src='img/mao.png' width='240'>";
		break;
	case 6:
			echo "<img src='img/seis.png'>";
		break;
	case 7:
			echo "<img src='img/sete.png'>";
		break;
	case 8:
			echo "<img src='img/oito.png'>";
		break;
	case 9:
			echo "<img src='img/nove.png'>";
		break;
	case 10:
			echo "<img src='img/dez.png''>";
		break;
	default:
			echo "Erro";
		break;
}
switch($pc){
	case 0:
			echo "<img src='img/zero.png' width='240'>";
		break;
	case 1:
			echo "<img src='img/um.png' width='240'>" ;
		break;
	case 2:
			echo "<img src='img/dois.png' width='240'>";
		break;
	case 3:
			echo "<img src='img/tres.png' width='240'>";
		break;
	case 4:
			echo "<img src='img/quatro.png' width='240'>";
		break;
	case 5:
			echo "<img src='img/mao.png' width='240'>";
		break;
	case 6:
			echo "<img src='img/seis.png' >";
		break;
	case 7:
			echo "<img src='img/sete.png' >";
		break;
	case 8:
			echo "<img src='img/oito.png' >";
		break;
	case 9:
			echo "<img src='img/nove.png' >";
		break;
	case 10:
			echo "<img src='img/dez.png' >";
		break;
	default:
			echo "Erro";
		break;
}
echo "</center>";
?>
</body>
</html>

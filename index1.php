<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>INDEX 1</title>
		<style>
		  input[type=text], input[type=submit], select{
		      text-align:center;
		      border-radius:10px;
		      border;1px solid #39c;
		  }
		</style>
	</head>
	<body>
		<?php
		$num1="";
		$num2="";
		$suma="";
		$msg="";
		
		if(isset($_POST['suma'])){
		    $num1=$_POST['n1'];
		    $num2=$_POST['n2'];
		    if(is_numeric($num1) && is_numeric($num2)){
		        $suma=$num1+$num2;
		    }else{
		        $num1="";
		        $num2="";
		        $suma="";
		        $msg="";
		        $msg="datos incorrectos";
		    }
		}
		?>
		
		
		<form action="index1.php" method="POST">
			numero 1: <input type="text" name="n1" size="10" value="<?php echo $num1;?>"/>
			numero 2: <input type="text" name="n2" size="10" value="<?php echo $num2;?>"/>
			resultado: <input type="text" name="res" size="10" value="<?php echo $suma;?>" disabled/>
			mensaje: <input type="text" name="msg" size="15" value="<?php echo $msg;?>" disabled/>
			<input type="submit" value="SUMAR" name="suma">
		</form>
	</body>
</html>
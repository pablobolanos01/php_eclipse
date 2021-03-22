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
		if(isset($_POST['submit'])){
		    $num=$_POST['num'];
		    $den=$_POST['den'];
		}
		?>
		<form action="index3-1.php" method="POST">
			numerador: <input type="text" name="num" size="10" value="<?php echo $num;?>"/>
			denominador: <input type="text" name="den" size="10" value="<?php echo $den;?>"/>
			<input type="submit" value="CALCULAR" name="submit">
		</form>
		<?php
		$num=2;
		$den=2;
		$div=2;
		if(isset($_POST['submit'])){
		    $num=$_POST['num'];
		    $den=$_POST['den'];
		    if(is_numeric($num) && is_numeric($den)){
		        while($div<=$num && $div<=$den){
		            while(($num%$div)==0 && ($den%$div)==0){
		                $num=$num/$div;
		                $den=$den/$div;
		            }
		            $div++;
		        }
		    }
		}
		?>
		<form action="index3-1.php" method="POST">
			fraccion simplificada: <input type="text" name="num" size="10" value="<?php echo $num;?>"disabled/>  /  <input type="text" name="den" size="10" value="<?php echo $den;?>"disabled/>
		</form>
	</body>
</html>
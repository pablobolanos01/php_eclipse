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
		<h3>ax+b=0</h3>
		<?php
		$a="";
		$b="";
		$x=0;
		if(isset($_POST['submit'])){
		    $a=$_POST['a'];
		    $b=$_POST['b'];
		    if(is_numeric($a) && is_numeric($b)){
		        $x=($b*-1)/$a;
		    }
		}
		?>
		<form action="index2-2.php" method="POST">
			valor de a: <input type="text" name="a" size="10" value="<?php echo $a;?>"/>
			valor de b: <input type="text" name="b" size="10" value="<?php echo $b;?>"/>
			x= <input type="text" name="x" size="10" value="<?php echo $x;?>" disabled/>
			<input type="submit" value="CALCULAR" name="submit">
		</form>
	</body>
</html>
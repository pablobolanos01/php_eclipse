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
	$a="";
	$b="";
	$c="";
	$x1=0;
	$x2=0;
	if(isset($_POST['submit'])){
	    $a=$_POST['a'];
	    $b=$_POST['b'];
	    $c=$_POST['c'];
	    if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
	        $raiz=($b*$b)-(4*$a*$c);
	        $x1=((($b)*-1+(sqrt($raiz))/($a*2)));
	        $x2=((($b)*-1-(sqrt($raiz))/($a*2)));
	    }
	}
	?>
	<form action="index2-3.php" method="POST">
			valor de a: <input type="text" name="a" size="10" value="<?php echo $a;?>"/>
			valor de b: <input type="text" name="b" size="10" value="<?php echo $b;?>"/>
			valor de c: <input type="text" name="c" size="10" value="<?php echo $c;?>"/>
			<input type="submit" value="CALCULAR" name="submit"><br>
			x1= <input type="text" name="x1" size="10" value="<?php echo $x1;?>" disabled/>
			x2= <input type="text" name="x2" size="10" value="<?php echo $x2;?>" disabled/>
		</form>
	</body>
</html>
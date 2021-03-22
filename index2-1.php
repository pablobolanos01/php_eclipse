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
		$num="";
		$f=1;
		if(isset($_POST['submit'])){
		    $num=$_POST['num'];
		    if(is_numeric($num)){
		        for($i=1;$i<=$num;$i++){
		            $f=$f*$i;
		        }
		    }
		}
		?>
		<form action="index2-1.php" method="POST">
			numero: <input type="text" name="num" size="10" value="<?php echo $num;?>"/>
			factorial: <input type="text" name="fact" size="10" value="<?php echo $f;?>"disabled/>
			<input type="submit" value="CALCULAR" name="submit">
	</body>
</html>
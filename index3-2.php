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
		}
		?>
		<form action="index3-2.php" method="POST">
			rango de primos entre 1 y <input type="text" name="num" size="10" value="<?php echo $num;?>"/>
			<input type="submit" value="CALCULAR" name="submit"><br>
		</form>
		<?php
		$num="";
		$div=0;
		$primo=0;
		$c=0;
		if(isset($_POST['submit'])){
		    $num=$_POST['num'];
		    if(is_numeric($num)){
		        if($num>=2){
		            for($i=2; $i<=$num; $i++){
		                $div=2;
		                $primo=1;
		                while($div<$i){
		                    if(($i%$div)==0){
		                        $primo=0;
		                        break;
		                    }
		                    $div++;
		                }
		                if($primo==1){
		                    $c++;
		                    echo "numero primo (",$c,") ",$i,"<br>";
		                }
		            }
		        }else{
		            echo "un numero primo es un numero natural que solo puede dividirse por 1 y por si mismo";
		        }
		    }
		}
		?>
	</body>
</html>
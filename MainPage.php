<!DOCTYPE html>
 <html>
 <head>
		<title>calculator</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="icon" href="icons/calculator.ico">
	</head>


 <body>
   <div>
	<h1>Calculator</h1>
 <?php
		
   include ('objects/Calculator.php');
			use objects\makeCalculator as cal;

		$Calculator1 = new cal();

		$Calculator1->calculator();
		echo "<p>the answer is : </p>";
		
		if(isset($_GET['submit'])){
				$result = $_GET['Expression'];
				$result =	str_replace(' ', '', $result);
				if(preg_match('~[\^\+\-\/\*]$~',$result)){
					echo "please enter Mathmatical Expression";
				} else if(preg_match('~^[0-9()\+\-*\/]+$~', $result)){
					eval("echo $result;");
				
				}else if(preg_match('~^[0-9()\+\-*\^\/\%]+$~', $result)){
				$result = str_replace('^', '**', $result);
				eval("echo $result;");
					
			}else
				echo "please enter Mathmatical Expression"; 
		}

 ?>
		<a href="MainPage.php"> back link </a>
		</div>
	</body>
</html>

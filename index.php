<!DOCTYPE 	html>
<html>
	<head>
	</head>
	<body>
		<p>
			<?php
				// echo "<h2>I see you</h2>";
				// echo "<b>Script Name</b>: ". $_SERVER['PHP_SELF'] . "<br>";
				// echo "<b>Your Browser</b>: ". $_SERVER['HTTP_USER_AGENT'] . "<br>";
				// echo "<b>Your IP address</b>:" . $_SERVER['REMOTE_ADDR'] . "<br>";
				// echo "<b>Server Host Name</b>:" . $_SERVER['SERVER_NAME'] . "<br>";
				// echo "<b>Web Server Software</b>: ". $_SERVER['SERVER_SOFTWARE'] . "<br>";
				// echo "<b>Transmission Protocol</b>: ". $_SERVER['SERVER_PROTOCOL']; 

				// phpinfo();

				
				echo "Hello World \n";
				echo "A carriage return is \r";
				echo "A tab is \t.";
				echo "A dollar sign is \$";
				echo "A double-quote is \" <br>";
				echo 0x1A . "<br>" ;
				$var = 5;
				$var2 = -10;
				echo "$var + $var2" . '<br>';
				echo $var . '<br>';

				//use html formatting tags to format PHP outputs
				echo "World <u>history</u> is <b>his</b> story, not <i>mine</i>!<br>";
				
				//use CSS to define style and use \ to escape sequence
				echo "<div style=\"font-size:45px;color:red\">Those who teach do not 
				know!</div><br>";

				//hexadecimal and octal integers
				$hex = 0xFF;  // hexadecimal value 
				$oct = 0146;  // octal value
				echo $hex - $oct . "<br>";

				$var = "2";
				$var2 = 5;
				echo $var . '<br>';
				echo $var2 . '<br>';
				echo $var%$var2 . '<br>';

				$y = true;

				var_dump($y, $var);
				echo '<br>';

				echo $var + 3 . '<br>';
				var_dump($y, $var);				
				echo '<br>';

				echo $var++ . '<br>';
				var_dump($y, $var);		
				echo '<br>';

				$var += 3;
				echo $var . '<br/>';

				$var -= 3;
				echo $var . '<br/>';

				$var *= 3;
				echo $var . '<br/>';

				$var /= 3;
				echo $var . '<br/>';

			
				$x = 9; 
				$y = 10; 
				echo '$x & $y: <b>' . ($x & $y) . "</b><br>"; 
				echo '$x | $y: <b>' . ($x | $y) . "</b><br>"; 
				echo '$x ^ $y: <b>' . ($x ^ $y) . "</b><br>"; 
				echo '~$x & $y: <b>' . (~$x & $y) . "</b><br>"; 
				echo '$x << 2: <b>' . ($x << 2) . "</b><br>";
				echo '$x >> 2: <b>' . ($x >> 2) . "</b><br>";
				 
				echo "<hr size=1 width=100%>";
				$a = rand(1,9);
				$b = rand(1,9);
				echo '$a is ' . $a . ', $b is ' . $b . "<br>";
				echo '$a & $b: <b>' . ($a & $b) . "</b><br>"; 
				echo '$a | $b: <b>' . ($a | $b) . "</b><br>"; 
				echo '$a ^ $b: <b>' . ($a ^ $b) . "</b><br>"; 
				echo '~$a & $b: <b>' . (~$a & $b) . "</b><br>"; 
				echo '$a << 2: <b>' . ($a << 2) . "</b><br>";
				echo '$a >> 2: <b>' . ($a >> 2) . "</b><br>";


				$state = array(1 => "Alabama", "Alaska", "California");
				echo  $state[0] . '<br>';
				echo  $state[1] . '<br>';



				$lists = array ( 1 => array( 12, 14, 16), 2 => array(11, 13, 15) );

				echo $lists[1][0] . "<br>\n";
				//echo $lists[1][1] . "<br>\n";
				//echo $lists[1][2] . "<br>\n";
				 
				echo $lists[2][0] . "<br>\n";
				//echo $lists[2][1] . "<br>\n";
				//echo $lists[2][2] . "<br>\n";

				$week_day = date("w");
				echo $week_day . '<br>';
				$week_day = 11;
				switch ($week_day) {
				case 0:
				   echo "Sunday";
				   break;
				case 1:
				   echo "Monday";
				   break;
				case 2:
				   echo "Tuesday";
				   break;
				case 3:
				   echo "Wednesday";
				   break;
				case 4:
				   echo "Thursday";
				   break;
				case 5:
				   echo "Friday";
				   break;
				case 6: 
				   echo "Saturday";
				   break;
				default:
				   echo "No such weekday";
				}
				echo '<br>';
				$x = !(6 <= 4);
				echo "!(6 <= 4) es: " . $x;

			?> 
		</p>
	</body>

</html>

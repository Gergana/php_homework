<?php
	
	global $array;
	$array=range(20,1000,37);
	
	echo "Find 3 prime number in the array ";
	function prime($number)
		{
			$is_prime=true;
			if ($number<2)
				{
					$is_prime=false;
				}
			for ($i=2;$i<=($number/2);$i++)
				{
					if ($number%$i==0)
						{
							$is_prime=false;
						}
				}
			return $is_prime;	
		}

	function find_3_prime()
		{
			$i=0;
			foreach ($GLOBALS['array'] as $value)
				{
					if (prime($value))
						{
							$i+=1;
							if ($i==3)
								{
									echo $value;
								}
						}
				}
		}	
		
		find_3_prime();
	
	echo "<br>";
	echo "<br>";
	echo "Check if the numbers 146,284 and 871 exist in the array ";
	
	function check_exists()
		{
			$first=146;
			$second=284;
			$third=871;
			
			if(in_array($first,$GLOBALS['array']))
			echo '<p style="color:red;">The number '.$first.' exist in the array </p>';		
		else
			echo '<p style="color:cyan;">The number '.$first.' does not exist in the array </p>';				

		if (in_array($second, $GLOBALS['array']))
			echo '<p style="color:red;">The number '.$second.' exist in the array </p>';
		else
			echo '<p style="color:cyan;">The number '.$second.' does not exist in the array </p>';				

		if (in_array($third, $GLOBALS['array']))
			echo '<p style="color:red;">The number '.$third.' exist in the array </p>';	
		else
			echo '<p style="color:cyan;">The number '.$third.' does not exist in the array </p>';				
		}

	check_exists();
			
		

?>
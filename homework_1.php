<?php
	$my_num=$_GET["number"];
	
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
	
	
	
	
	if (!is_numeric($my_num))
		{
				echo '<p style="color:red;">The parameter is not a number</p>';
		}
	else if ($my_num<0||$my_num>19999)
		{
			echo '<p style="color:red;">The parameter is not within the range </p>';
		}
			
	else if(prime($my_num))
		{
			echo '<p style="color:red;">The number '.$my_num.' is prime.</p>';
		}
		else
			{
				 echo '<p style="color:red;">The number '.$my_num.' is Not prime</p>';
			}
			
?>

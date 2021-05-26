
	<?php
	
		$marks=75;
		
		echo "Your Marks : $marks <br>";
		
		if($marks>=75)
		{
			echo "Distinction <br>";
		}
		
		else if($marks>=60 && $marks<75)
		{
			echo "First Class <br>";
		}
		
		else if($marks>=50 && $marks<60)
		{
			echo "Second Class <br>";
		}
		
		else if($marks>=35 && $marks<50)
		{
			echo "Pass Class <br>";
		}
		
		else
		{
			echo "Fail <br>";
		}
		
	?>
	

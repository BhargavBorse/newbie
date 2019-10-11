<?php
	
	$a[]="Aman";
	$a[]="Anand";
	$a[]="Bracket";
	$a[]="Books";
	$a[]="Chintan";
	$a[]="Cathline";
	$a[]="Dhruv";
	$a[]="Dad";
	$a[]="Harshil";
	$a[]="Jay";
	$a[]="Mango";
	$a[]="Nest";
	$a[]="X-Bow";
	$a[]="M416";
	$a[]="Wire";
	$a[]="Zenith";
	
	$q=$_REQUEST["q"];
	
	$hint=" ";
	
	if($q!==" ")
	{
		$q=strtolower($q);
		$len=strlen($q);
		
		foreach($a as $name)
		{
			if(stristr($q,substr($name,0,$len)))
			{
				if($hint==" ")
				{
					$hint=$name;
				}
				else
				{
					$hint.=",$name";
				}
			}
		}
	}
	
	echo $hint ===" "?"-----------OOPS! No suggestion for this character.-----------":$hint;


?>
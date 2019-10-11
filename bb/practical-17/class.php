<?php
		class register
		{
			var $name="";
			var $age= "";
			var $address="";
			function __construct($n,$a,$ad)
			{
				$this->name=$n;
				$this->age=$a;
				$this->address=$ad;
			}
	     	function show_name()	
			{
				return $this->name;
			}
			function show_age()	
			{
				return $this->age;
			}
			function show_address()	
			{
				return $this->address;
			}
			function __destruct()
			{

			}
		}
?>
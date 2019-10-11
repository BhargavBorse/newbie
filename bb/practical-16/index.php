<html>
	<head>
		<title> Search Box  </title>
		
			<script type="text/javascript">
			
				function showhint(str)
				{
					if(str.length==0)
					{
						document.getElementBy.id("txthint").innerHTML="";
						return;
					}
					else
					{
						var xmlhttp=new XMLHttpRequest();
						xmlhttp.onreadystatechange=function()
						{
							if(xmlhttp.readyState==4&&xmlhttp.status==200)
							{
								document.getElementById("txthint").innerHTML=xmlhttp.responseText;
							}
						};
						xmlhttp.open("POST","gethint.php?q="+str,true);
						xmlhttp.send();
					}
				}
			
			</script>	
	</head>
	<style>
		input[type=text] {
				width: 80%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 2px solid ;
				border-radius:8px;
					
			}

			body {
				font-family: Arial, Helvetica, sans-serif;
				border-radius:8px;	
				background-image: url(926968.png);
				background-repeat: no-repeat;
	 			background-size: cover;
			}
			fieldset{
				width:30%;
				border-radius:8px;
				border-color:black;
				background-color: rgba(255, 255, 255, 0.8);
				margin-left: 33%;
			}
	</style>
 <body>
	
	
<br><br><br><br><br>
	<fieldset> <h1><u> <center> Search </center></u></h1>
	<form method="POST"> 
	<center>
	
		<input type="text" name="name" placeholder="Enter any first character" onkeyup="showhint(this.value)"><br>
		<!-- <span id="txthint"></span> -->
	
	</center>
	</form>
	</fieldset>
			<br><br><br>
	<fieldset>
		<h2><u> <center> Search Result </center></u></h2>
		<span id="txthint"></span>
	</fieldset>
</body>
</html>
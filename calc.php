<?php
define('COMPANY_NAME', 'CSE 330');
define('DEV_NAME', 'Stanford Rosenthal');
define('DEV_URL', 'http://rosenthal.co');
define('PROJECT_NAME', 'Module 3');
define('PROJECT_DESCRIPTION', 'Ajax Calculator');
?>

<html>
<head>
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="one-page.css" />
	<title><?=PROJECT_NAME?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
	   $("#calc").submit(function() {
		operation = $("input[name=operation]:checked").attr("id");
		val1 = parseInt($("#value1").val());
		val2 = parseInt($("#value2").val());
		if(operation == "add"){
			ans = val1 + val2;
		}
		if(operation == "multiply"){
			ans = val1 * val2;
		}
		if(operation == "subtract"){
			ans = val1 - val2;
		}
		if(operation == "divide"){
			ans = val1 / val2;
			ans = ans.toFixed(2);
		}
		
		$("#ans").html(ans);
		return false;
	   });
	 });
	</script>
</head>
<body>
<div id="content">
<header class="clearfix">
	<h1 id="project_name"><?=PROJECT_NAME?></h1>
	<h2 id="company_name"><?=COMPANY_NAME?></h2>
</header>
<h3 id="project_description"><?=PROJECT_DESCRIPTION?></h3>

<div style="float:right; font-size:800%; margin-right:1em;" id="ans"></div>

<form id="calc">
	<strong>Integers</strong><br/>
	Val 1: <input type="text" id="value1" value="2" /><br />
	Val 2: <input type="text" id="value2" value="3" /><br /><br />
	<strong>Operation</strong><br/>
	<input type="radio" name="operation" id="add" /> Add<br />
	<input type="radio" name="operation" id="subtract" /> Subtract<br />
	<input type="radio" name="operation" id="multiply" /> Multiply<br />
	<input type="radio" name="operation" id="divide" /> Divide<br /><br />
	<input type="submit" value="Calculate" />
</form>

</div>
<footer>
<address>Developed by <a href="<?=DEV_URL?>"><?=DEV_NAME?></a>.</address>
</footer>

</body>
</html>
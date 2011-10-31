<?php
define('COMPANY_NAME', 'CSE 330');
define('DEV_NAME', 'Stanford Rosenthal');
define('DEV_URL', 'http://rosenthal.co');
define('PROJECT_NAME', 'Module 3');
define('PROJECT_DESCRIPTION', 'Dialogs');
?>

<html>
<head>
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="one-page.css" />
	<title><?=PROJECT_NAME?></title>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
		// GOOGLE
		$("button").button();
		$("#google_dialog").dialog().dialog("close");
		$("#google_dialog_close").dialog().dialog("close");
		$("#google_logo").hide();	
		$("#google").click(function(){
			$("#google_dialog").dialog("open");	
		});
		$("#google_dialog button").click(function(){
			$("#google_logo").fadeIn();
			$("#google_dialog").dialog("close");	
		});
		$("#google_dialog_close button").click(function(){
			$("#google_logo").fadeOut();
			$("#google_dialog_close").dialog("close");	
		});
		$("#google_logo").click(function(){
			$("#google_dialog_close").dialog("open");	
		});
		
		// YAHOO
		$("button").button();
		$("#yahoo_dialog").dialog().dialog("close");
		$("#yahoo_dialog_close").dialog().dialog("close");
		$("#yahoo_logo").hide();	
		$("#yahoo").click(function(){
			$("#yahoo_dialog").dialog("open");	
		});
		$("#yahoo_dialog button").click(function(){
			$("#yahoo_logo").fadeIn();
			$("#yahoo_dialog").dialog("close");	
		});
		$("#yahoo_dialog_close button").click(function(){
			$("#yahoo_logo").fadeOut();
			$("#yahoo_dialog_close").dialog("close");	
		});
		$("#yahoo_logo").click(function(){
			$("#yahoo_dialog_close").dialog("open");	
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
<img src="http://www.google.com/intl/en_com/images/srpr/logo3w.png" id="google_logo" />
<img src="http://zoknowsgaming.com/wp-content/uploads/2011/04/yahoo_logo_.jpg" width="400" id="yahoo_logo" />
<h1 id="google">Google</h1>
<h1 id="yahoo">Yahoo</h1>

<div id="google_dialog" title="Google"><button>Display Google Logo</button></div>
<div id="google_dialog_close" title="Google"><button>Hide Google Logo</button></div>
<div id="yahoo_dialog" title="Yahoo"><button>Display Yahoo Logo</button></div>
<div id="yahoo_dialog_close" title="Yahoo"><button>Hide Yahoo Logo</button></div>

</div>
<footer>
<address>Developed by <a href="<?=DEV_URL?>"><?=DEV_NAME?></a>.</address>
</footer>

</body>
</html>
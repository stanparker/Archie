<?php
	require_once ('config.php');
	require_once ('functions.php');
?>
<html>

<head>
	<title>KTVQ Tape & Film Archive</title>
	<script src="/js/jquery-1.10.2.min.js"></script>
	<script src="/js/jquery-ui-1.9.2.custom.js"></script>
	<script src="/js/archive.js"></script>
	<script src="/js/fastLiveFilter.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.9.2.custom.css" />
	
</head>

<div id="header">
	<h1>KTVQ Tape & Film Archive</h1>
	
	<ul id="top-menu">
		<li><a href="/">Home</a></li>
		<li><a href="/new-tape.php">New Tape</a></li>
	</ul>
	
	<button id="show-menu"><img id="menu-dropdown" src="/img/nav-arrow.png" /></button>
	
</div>


<div id="wrapper">

<div id="side-column">
	<h3>Tapes</h3>
	<script>
    $(function() {
        $('#search_input').fastLiveFilter('#tapes');
    });
</script>
	<input id="search_input" placeholder="Type to filter">
		<ul id="tapes">
		<?php
			
			$tapes = list_tapes($path.$video_directory);
			
			foreach ($tapes as $tape) {
			
				if ( $tape != "." && $tape != ".." )
					{
					$name_elements = explode ("-",$tape);
					echo "<li><a href =/?tape_id=".$tape.">".str_replace("_"," ",$name_elements[1])." ".$name_elements[2]."</a></li>";
					}
			}
			
		
		
		?>
</ul>	
</div>


<div id="main-window">


	

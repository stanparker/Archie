<?
/**
KTVQ Tape & Film Archive
header.php
**/

function list_tapes($v) {
	return scandir($v); 
}

function list_files($id) {
	global $path, $video_directory;
	return scandir($path.$video_directory."/".$id);
}

function clean_name($id) {
	$elements = explode ("-",$id);
	return str_replace("_"," ",$elements[1]);
}

function tape_number($id) {
	$elements = explode ("-",$id);
	return $elements[2];
}

function index_exists ($id) {
	global $path, $video_directory;
	$index_file = $path.$video_directory."/".$id."/".$id."-index.jpg";
	if (file_exists($index_file)) return true;
		else return false;
}

function txt_exists ($id) {
	global $path, $video_directory;
	$index_file = $path.$video_directory."/".$id."/".$id."-index.txt";
	if (file_exists($index_file)) return true;
		else return false;
}

function mp4_exists ($id) {
	global $path, $video_directory;
	$mp4_file = $path.$video_directory."/".$id."/".$id.".mp4";
	if (file_exists($mp4_file)) return true;
		else return false;
}

function get_mp4 ($id) {
	global $video_directory;
	return "/".$video_directory."/".$id."/".$id.".mp4";
}

function get_txt ($id) {
	global $video_directory;
	return $video_directory."/".$id."/".$id.".txt";
}

function display_tape ($id) {
	global $path, $video_directory;
	$index_file = $path.$video_directory."/".$id."/".$id."-index.txt";
	$txt_file = file_get_contents($index_file);
	$rows = explode ("\n", $txt_file);
	array_shift($rows);
	
	$to_do = 1;
	
	foreach ($rows as $row => $data)
	{
		switch($to_do) {
			
			case 1:
				if (strpos($data,"Slug")) {
					$to_do = 2;
					echo "<h1>PSYCH!</h1>";
					break;
					}
					
				echo "<p>".$data."</p>";
				break;
			
			case 2:
			
			echo "Index Line";
			
			}
	}
}

?>
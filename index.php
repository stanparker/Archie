<?php require_once ('app/header.php');

if (isset($_GET['tape_id'])) {
	
?>


<div id="media-view">
<h2><?php echo clean_name($_GET['tape_id'])." ".tape_number($_GET['tape_id']); ?></h2>
	
	<?php
	$mp4_file = $path.$video_directory."/".$_GET['tape_id']."/".$_GET['tape_id'].".mp4";
	if (mp4_exists($_GET['tape_id']))
		{
		?>
		<div id="video-player">
		<video controls>
			<source src="<?php echo get_mp4($_GET['tape_id']); ?>" type="video/mp4">
			Your browser does not support the video tag.
		</video>
</div>		

<?php } ?>
		<div id="tape-meta">
		<?php if (txt_exists($_GET['tape_id']))
				{
				display_tape ($_GET['tape_id']);
				}
		?>
		
		</div>
		
	<?php		
		if (index_exists($_GET['tape_id'])) {
			echo "No mp4 file availabe. Showing Index. <br />";
			echo '<img src = "/video/U-GUS_KOERNIG-9-19930917/U-GUS_KOERNIG-9-19930917-index.jpg" />';
		}
		
		
		
	?>
	
</div>
<div id="media-list">
<?php var_dump (list_files($_GET['tape_id'])); ?>
</div>
	
<?php	
}

else echo "<h2>No tape selected</h2>";


?>

<?php
require_once ('app/footer.php');		
?>



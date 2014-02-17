<?php require_once ('app/header.php'); ?>

<script src="/js/validation.js"></script>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: "1953:2020"
    });

  });
  </script>


<h1>Create New Media Record</h1>

<?php 

if (isset($_POST['tape-name'])) {

	echo "<pre>";
	var_dump ($_POST);
	echo "</pre>";

}


?>

<form  id="new-tape-form" action='<?php echo $_SERVER['PHP_SELF']?>' method='post'> 

	<div>
		<label for="tape-name">Name on Tape</label>
		<input type="text" id="tape-name" name="tape-name" value="" />
		<span id="tape-name-info">Reporter name, or Newsfile, etc. Use first name and last name for reporter tapes. For reporters whose names have changed (i.e., got married) use [First Name] [Maiden Name] [Married Name](Jeanelle Lamphier Slade)</span>
	</div>
	
	<div>
		<label for="tape-number">Tape Number</label>
		<input type="text" id="tape-number" name="tape-number" size="4" maxlength="3" value="" />
		<span id="tape-number-info">What is the tape number?</span>
	</div>
	
	<div>
	<label for="media-type">Media Type</label>
		<select name="media-type" id="media-type">
			<option value="u">3/4" Tape</option>
			<option value="f">16mm Film</option>
			<option value="dvd">DVD</option>
			<option value="dvc">DVCPRO</option>
			<option value="b">Beta-Cam</option>
			<option value="1i">1" Tape</option>
			<option value="2i">2" Tape</option>
			<option value="m">Misc</option>
		</select>	
	</div>
	
	
	<div>
		<label for="datepicker">Date of Tape's First Story</label>
		<input type="text" name="tape-date" id="datepicker" />
		<span id="tape-date-info">If date unknown or unapplicable, leave blank</span>
	</div>
	</label>
	<input type="submit">

</form>




<?php require_once ('app/header.php'); ?>
<!DOCTYPE html>
<?php
include 'includes/_header.html'
?>
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="3.css">
	</head>
	<body>   
      
		  <div class="container">
  <h2>Feedback Form</h2>
  <form action="/action_page.php">
    <div class="form-group">
  <label for="pid">PatientId:</label>
  <textarea class="form-control" rows="1" id="pid"></textarea>
</div>
    <div class="form-group">
  <label for="vid">VolunteerId:</label>
  <textarea class="form-control" rows="1" id="vid"></textarea>
</div>
    <div class="form-group">
  <label for="feedback">Feedback:</label>
  <textarea class="form-control" rows="5" id="feedback"></textarea>
</div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
		  
		  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	</body>
</html>

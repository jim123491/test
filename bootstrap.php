<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form class="navbar-form navbar-left" role="search" action="" method="POST">
  		<div class="form-group">
    		<input type="text" class="form-control" placeholder="Name" name="firstname">
  		</div>
  		<div class="form-group">
    		<input type="text" class="form-control" placeholder="Surname" name="surname">
  		</div>
  		<div class="form-group">
    		<input type="text" class="form-control" placeholder="Address" name="adress">
  		</div>
  		<div class="form-group">
    		<input type="text" class="form-control" placeholder="Tel" name="tel">
  		</div>
  		<div class="form-group">
    		<input type="text" class="form-control" placeholder="Place of birth" name="placeofbirth">
  		</div>
  		<div class="form-group">
    		<input type="text" class="form-control" placeholder="Year" name="year">
  		</div>
  	<button type="submit" class="btn btn-default">Submit</button>
</form>

<?php 
echo "Your name: ".strip_tags($_POST["firstname"])."<br/>";
echo "Your surname: ".strip_tags($_POST["surname"])."<br/>";
echo "Your adress: ".strip_tags($_POST["adress"])."<br/>";
echo "Your telephone: ".strip_tags($_POST["tel"])."<br/>";
echo "Your place of birth: ".strip_tags($_POST["placeofbirth"])."<br/>";
echo "Year of birth: ".strip_tags($_POST["year"])."<br/>";
?>

</body>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile Maker</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Recruiter Profile</h2>
  </div>
	
  <form method="post" action="recruiterprofile.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	<div class="input-group">
  	  <label>Company Name</label>
  	  <input type="text" name="companyname">
  	</div>
  	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="contactnumber">
  	</div>
  	
  	<div class="input-group">
  	  <label>Select an image..size<200kb</label>
  	  <input type="file" name="fileToUpload" id="fileToUpload">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="uploadprofile">upload</button>
  	</div>
  	<p>
  		Already have a profile? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
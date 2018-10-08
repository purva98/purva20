<?php
include('connsp.php');
session_start();
if(isset($_REQUEST['submit']))
{
	$TeamName = $_REQUEST['TeamName'];
	$Name = $_REQUEST['Name'];
	$Mail=$_REQUEST['Mail'];
 	$City = $_REQUEST['City']; 	
 	$College = $_REQUEST['College'];
 	$Contact= $_REQUEST['Contact']; 	
 	$GitHub = $_REQUEST['GitHub'];
    $stack = $_REQUEST['stack'];
    $project = $_REQUEST['project'];
    $past = $_REQUEST['past'];
    $theme=$_REQUEST['theme'];
	$gender=$_REQUEST['gender'];
    
	       
	
		$ins="insert into data( 
			TeamName,
			Name,
			Mail,
			City, 	
			College,
			Contact,	
			GitHub,
			stack,
			project,
			past,
			theme,
			gender
		
		) values ('$TeamName','$Name','$Mail','$City','$College','$Contact','$GitHub','$stack','$project','$past','$theme','$gender')";

		//echo $ins;
		
		$res=$connsp->query($ins);
		if($res)
		{
			?> 
			<script type="text/javascript">
				alert('insert success'); 
			   window.location="/purva/index.php";
			</script>
			<?php
		}
		else
		{
			?> 
			<script type="text/javascript">
				alert('insert not success'); 
			   window.location="index.php";
			</script>
			<?php

		}
	}
		 


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
<div class="container">
  <form>
    <div class="row">
      <h4>Register</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Team Name" name="TeamName"/>
        </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email" name="Mail"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="City" name="City"/>
        <div class="input-icon"><i class="fas fa-city"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="College" name="College"/>
        <div class="input-icon"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="number" placeholder="Contact"  name="Contact"/>
        <div class="input-icon"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="Github Profile Link" name="GitHub"/>
        <div class="input-icon"></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" placeholder="Stackoverflow Profile Link" name="stack"/>
        <div class="input-icon"></div>
      </div>
	 
	 </div>
	  <div>
	  
	    <h4>Mention past projects (if any)</h4>
		<div class="input-group input-group-icon">
        <input type="text" placeholder="" name="project"/>
        <div class="input-icon"></div>
      </div>
    </div>
	 <div>
	  
	    <h4>Mention Past Experience (if any)</h4>
		<div class="input-group input-group-icon">
        <input type="text" placeholder="" name="past"/>
        <div class="input-icon"></div>
      </div>
    </div>
	 <div>
	  
	    <h4>If you are to choose a theme for hackathon, what will you choose and why?</h4>
		<div class="input-group input-group-icon">
        <input type="text" placeholder="" name="theme"/>
        <div class="input-icon"></div>
      </div>
    </div>
    <div class="row">
     
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
	 
    </div>
    <div class="row">
     <input class="btn btn-success" type="submit" name="submit" style="width:20%; height: 45%;" value="submit">
	</div> 
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>

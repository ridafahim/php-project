<?php 
session_start(); 
include('header1.php');
?>  



<br>
<br>   
<br>
<br>
<br>
<br>
<div class="container pt-2 pt-md-5" >
<div class="col-md-6 mt-2" >
			<h2 class="text-center text-dark mb-2">Register</h2>
			<form action="registeration_process.php" method="post">
			  <div class="form-group">
			    <label for="first_name">First Name</label>
			    <input type="text" class="form-control" id="first_name" name="first_name"  required=""  placeholder="Enter first name"> 
			  </div>
			  <div class="form-group">
			    <label for="last_name">Last Name</label>
			    <input type="text" class="form-control" id="last_name" name="last_name" required=""  placeholder="Enter last name"> 
			  </div>
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" name="username"   required="" placeholder="Enter username"> 
			  </div>
			  <div class="form-group">
			    <label for="Password">Password</label>
			    <input type="password" class="form-control" id="Password" name="user_pass"  required="" placeholder="Password">
			  </div> 
			  <button type="submit" class="btn btn-lg btn-theme">Register</button>
			</form>
		</div>
	</div>

</div>


<?php 
include('footer.php');
?>  
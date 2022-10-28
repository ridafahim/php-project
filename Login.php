<?php
session_start();  
require_once("header1.php"); ?> 

<br>
<br>   
<br>
<br>
<br>
<br>


<div class="container pt-2 pt-md-5">

	<div class="row">
		
		<div class="col-md-6 mt-2">
			<h2 class="text-center text-dark mb-2">User Log In</h2>
			<form action="userlogin.php" method="POST">
			<div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" name="username"   required="" placeholder="Enter username"> 
			  </div>
			  <div class="form-group">
			    <label for="Password">Password</label>
			    <input type="password" class="form-control" id="Password" name="password"  required="" placeholder="Password">
			  </div> 

			  <div class="p-t-10">	
                            <input class="btn btn--pill btn--green" type="submit" name="btn"></button>
                        </div>
			</form>
		</div>
	</div>

	
</div>



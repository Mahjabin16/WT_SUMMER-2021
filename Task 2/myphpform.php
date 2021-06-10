<?php
     $fname="";
	 $err_fname="";
	 $email="";
	 $err_email="";
     $pass="";
	 $err_pass="";
     $gender="";
	 $err_gender="";
	 $hobbies="";
	 $err_hobbies="";
	 $profession="";
	 $err_profession="";
	 $comment="";
	 $err_comment="";
	 
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
        
			 if(empty($_REQUEST["fname"]))
             {
				 $err_fname="Full name Required";
			 }
			 elseif(strlen($_REQUEST["fname"])<5){
				 $err_fname="Full name must be 5 characters Long";
			 }
			 elseif(strpos($_REQUEST["fname"],"")){
				 $err_fname="Full name should not contain White Space";
			 }
			 else{
				 $err_fname = $_REQUEST["fname"];
			 }
             if(empty($_REQUEST["email"])){
                  $err_email ="Please enter valid email";
             }
             else
             {
                 $err_email = $_REQUEST["email"];
             }
             if(empty($_REQUEST["pass"])){
				 $err_pass="Password Must be Required";
			 }
			  elseif(strlen($_REQUEST["pass"])<5){
				 $err_pass="Password must be 8 characters Long";
			 }
			 else{
				 $pass=$_REQUEST["pass"];
			 }



			 if(empty($_REQUEST["gender"])){
				 $err_gender="Chose Your Gender";
			 }
			 else{
				 $gender=$_REQUEST["gender"];
			 }
			  if(empty($_REQUEST["hobbies"])){
				 $err_hobbies="Select Your Hobbies";
			 }
			 else{
				 $hobbies=$_REQUEST["hobbies"];
			 }
			  if(empty($_REQUEST["profession"])){
				 $err_profession="Confirm Your Profession";
			 }
			 else{
				 $profession=$_REQUEST["profession"];
			 }
			 if(empty($_REQUEST["comment"])){
				 $err_comment="Comment Required";
			 }
			 else{
				 $comment=$_REQUEST["comment"];
			 }
		 } 
?>

<html>
     <head></head>
	 <body>
	      <h1>Registration Form</h1>
		  <form action="" method="post">
		      <table>
			        <tr>
					    <td><span>Full name</span></td>
						<td>:<input type="text" name="fname" value="<?php echo $fname;?>" placeholder="Full name">
						<span><?php echo $err_fname;?></span></td>
					</tr>
                    <tr>
					    <td><span>Email</span></td>
						<td>:<input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
					    <td><span>Password</span></td>
						<td>:<input type="text" value="<?php echo $pass;?>" name="pass">
						<span><?php echo $err_pass;?></span></td>
					</tr>



					<tr>
					    <td><span>Gender</span></td>
						<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
                        <input type="radio" name="gender" value="Female"><span>Female</span>
						<input type="radio" name="gender" value="Others">Others<br>
						<span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
					    <td><span>Hobbies</span></td>
						<td>:
						<input type="checkbox" value="Singing" name="hobbies[]">Singing
						<input type="checkbox" value="Dancing" name="hobbies[]">Dancing
						<input type="checkbox" value="Reading" name="hobbies[]">Reading<br>
						<span><?php echo $err_hobbies;?></span></td></td>
					</tr>
					<tr>
					    <td><span>Profession</span></td>
						<td>
						    :<select name="profession">
							     <option disabled selected>Choose One</option>
						         <option>Teaching</option>
								 <option>Student</option>
								 <option>Business</option>
							</select>
							<span><?php echo $err_profession;?></span></td>
						</td>
					</tr>
					<tr>
					    <td><span>Comment :</span></td>
                        <td><textarea  cols="30" rows="5"></textarea></td>
					</tr>
                    <tr>
                         <td><label for="file">Please choose a file</label></td>
                         <td>:<input type="file" id="file"></td>
                    </tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset"></td>
					</tr>
			  </table>
		</form>
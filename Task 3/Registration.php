<?php   
	include "Control\FormHandler.php";
	 ?>
<html>
     <head></head>
	 <body>
	      <h1>Registration Form</h1>
		  <form action="" method="post" enctype="multipart/form-data">
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
                         <td>:<input type="file" id="file"  name="image" Required> <?php  echo  $validImage;    ?></td>
                    </tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset"></td>
					</tr>
			  </table>
		</form>
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
	 $validImage="";
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
        
			 if(empty($_REQUEST["fname"]))
             {
				 $err_fname="Full name Required";
			 }
			 elseif(strlen($_REQUEST["fname"])<5){
				 $err_fname="Full name must be 5 characters Long";
			 }
			 elseif(strpos($_REQUEST["fname"]," ")){
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
             $fnm = $_FILES["image"]["name"];
             $dst = "./Images/".$fnm;
         if(move_uploaded_file($_FILES["image"]["tmp_name"],$dst))
            {
                $validImage= "You have uploadede a new image";
            }
            else 
            {
                $validImage= "Sorry ,You must upload an image to continue";
            }
		 } 
         
?>
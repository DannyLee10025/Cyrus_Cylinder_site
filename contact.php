<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Information request confirmation</title>
<link href="styles.css" rel="stylesheet">
<style type="text/css">

	body {
		font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;	
	}

	.error {
		font-weight: bold;
		color: #C00;
	}

</style>

</head>
<body>
<div class="pageWrapper">
<header>
<h1>The Cyrus Cylinder</h1>
</header>

<div id="main">
</br>
<!--START:sendisset-->
<?php
	if (isset($_POST["send"])){
		// END:sendisset
  		// START:postdata
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$body = $_POST["body"];
		// END:postdata
  		
  	// START:validations
	# Name check
	if ( !empty ( $_POST['name'] ) ){
    	$name = $_POST['name'] ;   
  	} else { 
    	$name = NULL ;
    	echo '<p class="error">You must enter a name.</p></br>' ;
   }

   # Email check	

	if ( !empty ( $_POST['email'] ) ){
  		$email = $_POST['email'] ; 
  
  	# Format check.
  	$pattern = '/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/' ;
  	if ( !preg_match(  $pattern , $email ) ){ 
    	$email = NULL ;
    	echo '<p class="error">Email address has an incorrect format.</p></br>' ;
  	}
  
	}
	else
	{ 
  		$email = NULL ;
  		echo '<p class="error">Please enter an email address.</p></br>' ;
 	}

 	# Comments check

 	if ( !empty ( $_POST['body'] ) ){
    	$body = $_POST['body'] ;   
  	} else { 
    	$body = NULL ;
    	echo '<p class="error">Please enter a comment.</p></br>' ;
   }

	# Success response
	if ( ( $name != NULL ) && ( $email != NULL ) && ( $body != NULL) )
 	{
   		echo "<p>Thank you for your comment $name.</p></br>";
		echo "<p>We will reply to you at <i>$email</i>.</p>\n</br>";
 	} else {
 		echo "<p>Please go back and fill out the form again.</p>";
 	}
		

}

?>


</br>
<p>Return to the <a href="index.html">main</a> page.</p>
</br>
</div>

</div>  <!--end of contentWrapper div-->

</div><!--pageWrapper ends -->
</body>
</html>

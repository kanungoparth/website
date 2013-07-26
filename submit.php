
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<title> CRACK A STORY </title>
<style>
#intro
{
    margin-top:5%;
    margin-left:20%;
    margin-right:20%;
    font-size:20pt;
    text-align:center;
    
    

}    


#subtitle
{
    text-align:center;
    font-size:16pt;
	
	color:#A52A2A;
}


#title {
    margin-top:10%;
    margin-left:20%;
    margin-right:20%;
    font-family: 'Tangerine', 'Helvetica', serif;
    font-size: 88pt;
    text-shadow: 4px 4px 4px #aaa;
    text-align:center;
    color:#A52A2A;
}



footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align:center;
}
a:link {color:#000000;text-decoration:none;}      /* unvisited link */
a:visited {color:#A52A2A;text-decoration:none;}  /* visited link */
a:hover {color:#A52A2A;text-decoration:none;}  /* mouse over link */
a:active {color:#0000FF;text-decoration:none;}  /* selected link */

</style>
</head>
<body bgcolor=#F0FFFF>
<div id="title">Crack A Story </div>
<div id="subtitle">The online platform for collaborative storywriting and publishing ! </div>

<div id="intro">
	
<?php
// get the posted email address here //
 $email = $_POST['uid'];
 
 
if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
  //echo "Email is valid.";
  

//define the receiver of the email
$to =  $email;
//define the subject of the email
$subject = 'Welcome to Crack A Story'; 
//define the message to be sent. Each line should be separated with \n
//$message = "Hello Storyteller!\nThis is Crack A Story. \n Everyone loves to read a great story. And, everone loves to tell it. So, start punching your keyboard keys to bring out an amazing story from your mind. At CAS, you will find people who will write with you and help you complete your first novel, whose chapter 3 is still half-baked. Come on. And, start typing, because you have a great story to tell.  \n\n Crack A Story"; 
$message = "Hello Storyteller!\n\nThis is Crack A Story. \n\n Everyone loves to read a great story. And, you love to write that great story. \n\nSo, what are you waiting for? \nRoll up your sleeves and start typing. \n \nI will soon provide you a great platform. \n \n If you have any questions or suggestions, mail me at info@crackastory.com \n\n Parth K \n Core Developer"; 
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: info@crackastory.com\r\nReply-To: info@crackastory.com";
//send the emaiL
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Thanks for your interest. We will keep you updated." : "Re-enter your email. There was a server error";

//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database

$hostname="mailingListCAS.db.10174585.hostedresource.com";
$username="mailingListCAS";
$password="Me@parth12";
$dbname="mailingListCAS";
$usertable="AUTHOR";
$yourfield = "email";

mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);

# Check If Record Exists

//$query = "SELECT * FROM $usertable";

//$query = "INSERT INTO AUTHOR VALUES ( '0', 'Gandalf', $email, 'xxx', 'shire');";

$query = "INSERT INTO AUTHOR VALUES ( '123', '$email', '', '','');";

//echo $query;

$result = mysql_query($query);

//echo $result;

if(!($result))
{
    echo " DB insertion failed. \n Please report this event to info@crackastory.com";
}
?>




</div>  
 <?php 
}
else {

  echo "Email in invalid.";
}
 ?>



<footer>&nbsp;&copy; 2013 - CRACK A STORY.</footer>
</body>
</html>









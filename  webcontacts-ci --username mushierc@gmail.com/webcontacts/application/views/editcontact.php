<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Contact</title>
<style type="text/css">
@charset "utf-8";
/* CSS Document */
#canvas{
	width:850px;
	min-height:650px;
	max-height:850px;
	border-radius:15px;
	margin-left:auto;
	margin-right:auto;
	background-image:linear-gradient(#00F,#00C,#009,#006,#00F,#00C,#009,#006,#00F,#00C,#009,#006);
	border:2px solid #FF0;
}
#main{
	background-image:radial-gradient(#CCC,#999,#666,#333,#CCC,#999,#666,#333,#CCC,#999,#666,#333,#CCC,#999,#666,#333);
}
.ibtns{
	border:2px solid #F0F;
	background-color:#0C3;
	border-radius:5px;
	color:#FFF;
	font-size:16px;
	margin-left:10px;
}
.ibtns:hover{
	border:2px solid #0CF;
	background-color:#009;
	font-size:16px;
	color:#0FF;
}
.sbtns{
	border:3px solid #FFF;
	background-color:#03F;
	color:#0FF;
	font-size:20px;
	border-radius:10px;
}
.sbtns:hover{
	border:3px solid #0FF;
	background-color:#69C;
	color:#00F;
}
.cbtns{
	border:2px solid #F0F;
	background-color:#0C3;
	border-radius:5px;
	color:#FFF;
	font-size:23px;
	margin-left:10px;
}
nav a:hover{
	border:2px solid #0CF;
	background-color:#009;
	color:#0CF;
}
nav:hover{
	border:2px solid #0CF;
	background-color:#009;
	color:#0CF;
}
#pr{
	color:#0FC;
	font-size:24px;
}
#title{
	font-size:20px;
	color:#F09;
	text-align:center;
}
footer center{
	font-size:24px;
	color:#0FF;
}
#middle{
	min-height:500px;
	max-height:600px;
}
#content{
	height:460px;
	width:560px;
	border:hidden;
}
#left{
	width:270px;
	border-right:2px solid #0CF;
	height:300px;
}
#left p{
	margin-left:15px;
	font-size:20px;
}
#left p:hover{
	border:1px solid #CCC;
	background-color:#39C;
	border-radius:5px;
	color:#93F;
}
#right nav{
	float:left;
}
#middle aside{
	float:left;
}
a{
	text-decoration:none;
}
#head{
	height:40px;
}
nav{
	float:left;
}
#display{
	min-height:150px;
	width:555px;
	border:hidden;
}
.txt{
	background-color:#0FC;
	border:2px solid #FFF;
	border-radius:15px;
	color:#600;
}
select{
	background-color:#0FC;
	color:#300;
	border-radius:5px;
}
</style>
</head>
<body>
<h4>Select the Contact to Edit(Leave blank the Field not to be changed)</h4>
<form action="#" method="post">
Select Contact to Edit:<br/>
<select name="id">
<option value="N/A">Select a Contact's Name from Dropdown</option>
<?php 
$conn=mysql_connect("localhost","root","") or die("Could not Establish Connection".mysql_error());
$db=mysql_select_db("contacts_ms",$conn) or die("No DB Selected".mysql_error());
$st="EM";
$qry=mysql_query("SELECT * FROM info_contacts");
while($r=mysql_fetch_array($qry)){
	/*
	*This code selects the contacts that are available in the system for editing.
	*/
	?>
		<option value="<?php echo $r['contact_id'] ?>"> <?php echo $r['fname'].' '.$r['sname'] ?></option>
		<?php
	
}
?>
</select><br/>
New First Name:<br/>
<input type="text" name="fname" size="30" class="txt"><br/>
New Second Name:<br/>
<input type="text" name="sname" size="30" class="txt"><br/>
New Email:<br/>
<input type="text" name="email" size="30" class="txt"><br/>
New Phone Number:<br/>
<input type="text" name="phone" size="30" class="txt"><br/><br/>
<input type="submit" value="Edit Contact" name="submit"  class="sbtns">&emsp;&emsp;&emsp;
<input type="reset" name="reset" value="Cancel" class="sbtns">
</form>
<?php
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$sname=$_POST['sname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	/*
	*This code updates the Contacts details according to the inputs provided and skipping the fields that have not yet been 
	*provided!
	*It does this by checking the states of the input fields.
	*/
	if($fname && $sname && $email && $phone){
		$th=mysql_query("UPDATE info_contacts SET fname='$fname',sname='$sname',email='$email',phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$fname){
		$th=mysql_query("UPDATE info_contacts SET sname='$sname',email='$email',phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$sname){
		$th=mysql_query("UPDATE info_contacts SET fname='$fname',email='$email',phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$email){
		$th=mysql_query("UPDATE info_contacts SET fname='$fname',sname='$sname',phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$phone){
		$th=mysql_query("UPDATE info_contacts SET fname='$fname',sname='$sname',email='$email' WHERE contact_id='$id'");
	}
	elseif(!$fname && !$sname){
		$th=mysql_query("UPDATE info_contacts SET email='$email',phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$fname && !$email){
		$th=mysql_query("UPDATE info_contacts SET sname='$sname',phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$fname && !$phone){
		$th=mysql_query("UPDATE info_contacts SET sname='$sname',email='$email' WHERE contact_id='$id'");
	}
	elseif(!$sname && !$email){
		$th=mysql_query("UPDATE info_contacts SET fname='$fname',phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$sname && !$phone){
		$th=mysql_query("UPDATE info_contacts SET fname='$fname',email='$email' WHERE contact_id='$id'");
	}
	elseif(!$fname && !$sname && !$email){
		$th=mysql_query("UPDATE info_contacts SET phone='$phone' WHERE contact_id='$id'");
	}
	elseif(!$fname && !$sname && !$phone){
		$th=mysql_query("UPDATE info_contacts SET email='$email' WHERE contact_id='$id'");
	}
	elseif(!$sname && !$email && !$phone){
		$th=mysql_query("UPDATE info_contacts SET fname='$fname' WHERE contact_id='$id'");
	}
	elseif(!$fname && !$email && !$phone){
		$th=mysql_query("UPDATE info_contacts SET sname='$sname' WHERE contact_id='$id'");
	}
	elseif(!$fname && !$sname && !$email && !$phone) $th=false;
	if(!$th) echo "Could not Update the Contact Details.Please try again later!";
	else echo "Successfully Edited Contact's Details!";
}
?>
</body>
</html>
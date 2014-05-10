<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Contact to Group</title>
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
<h4>Select Group to add contact to</h4>
<form action="#" method="post">
Select Group:<br/>
<select name="name">
<option value="N/A">Select a Group from Dropdown</option>
<?php 
$conn=mysql_connect("localhost","root","") or die("Could not Establish Connection".mysql_error());
$db=mysql_select_db("contacts_ms",$conn) or die("No DB Selected".mysql_error());
$st="EM";
$qry=mysql_query("SELECT * FROM info_group");
$cqry=mysql_query("SELECT * FROM info_contacts");
while($r=mysql_fetch_array($qry)){//This code selects the group that the user wants to associate contact with.
	?>
		<option value="<?php echo $r['name'] ?>"> <?php echo $r['name'] ?></option> <?php
}
?>
</select><br/>
Select a Contact:<br/>
<select name="phone">
<option value="n/a">Select a Contact's Name to add to Group</option>
<?php
while($rw=mysql_fetch_array($cqry)){//This code lets the user select the contact in system to bind to a certain group.
	?>
		<option value="<?php echo $rw['phone'] ?>"> <?php echo $rw['fname'].' '.$rw['sname'] ?></option> <?php
}
?>
</select><br/><br/>
<input type="submit" value="Add to Group" name="submit" class="sbtns">&emsp;&emsp;&emsp;
<input type="reset" name="reset" value="Cancel" class="sbtns">
</form>
<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$status="NE";
	$er="N/A";
	$ec="n/a";
	//This code executes the grouping of the contact to a group as well as updating the status of the group if it were empty.
	if($name ==$er || $phone==$ec){
		echo "Select Group and Contact Details to accordingly";
	}
	elseif($name !=$er && $phone !=$ec){
	$iqry=mysql_query("INSERT INTO group_contacts(group_name,phone) VALUES('$name','$phone')");
	if(!$iqry) $re="Could Not Add Contact to Group";
	else {
		echo "Contact Added to Group successfully";
		mysql_query("UPDATE info_group SET status='$status' WHERE group_name='$name'");
	}
	}
}
?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Remove Contact</title>
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
<h4>Select Contact to Remove from Group</h4>
<form action="#" method="post">
<select name="id">
<option value="n/a">Select a Contact's Name &amp; current Group to Ungroup</option>
<?php
$conn=mysql_connect("localhost","root","") or die("Could not Establish Connection".mysql_error());
$db=mysql_select_db("contacts_ms",$conn) or die("No DB Selected".mysql_error());
$cqry=mysql_query("SELECT * FROM group_contacts ORDER BY group_name");
while($rw=mysql_fetch_array($cqry)){//This code selects the contact that the user wants to ungroup
?>
		<option value="<?php echo $rw['id'] ?>"> <?php echo $rw['group_name'].' '.$rw['phone'] ?></option> <?php
}
?>
</select><br/><br/>
<input type="submit" value="Remove from Group" name="submit" class="sbtns">&emsp;&emsp;&emsp;
<input type="reset" name="reset" value="Cancel" class="sbtns">
</form>
<?php
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	//This code now delete the grouping field of the contact.
	$dqry=mysql_query("DELETE FROM group_contacts WHERE id='$id' ");
	if(!$dqry) $er="Could not Ungroup contact";
	else $er="Successfully Ungrouped Selected Contact";
	echo $er;
}
?>
</body>
</html>
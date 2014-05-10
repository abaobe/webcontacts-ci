<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacts</title>
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
<nav class="ibtns"><a href="../index.php/addcontact" target="display">Add New Contact</a>
</nav>
<nav class="ibtns"><a href="../index.php/removecontact" target="display">Ungroup Contact</a>
</nav>
<nav class="ibtns"><a href="../index.php/delcontact" target="display">Delete Contact</a>
</nav>
<nav class="ibtns"><a href="../index.php/editcontact" target="display">Edit Contact</a>
</nav><br/>
<p id="pr">Contacts' Window</p>
<iframe name="display" id="content" src="../index.php/addcontact"></iframe>
</body>
</html>
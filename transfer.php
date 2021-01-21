<?php
session_start();
$con=mysqli_connect('localhost','root','','banking system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/12.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#0086b3;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Chandra"){
				 var arr=["Raju","Hari","Bhuvi","kk","BB","Surya","Ben","Mohith","Sri"];
				 }
				 else if(a==="Raju"){
					var arr=["Chandra","Hari","Bhuvi","kk","BB","Surya","Ben","Mohith","Sri"];
				 }
				else if(a==="Hari"){
					var arr=["Chandra","Raju","Bhuvi","kk","BB","Surya","Ben","Mohith","Sri"];
				}
				else if(a==="Bhuvi"){
					var arr=["Chandra","Raju","Hari","kk","BB","Surya","Ben","Mohith","Sri"];
				 }
				 else if(a==="kk"){
					var arr=["Chandra","Raju","Hari","Bhuvi","BB","Surya","Ben","Mohith","Sri"];
				 }
				 else if(a==="BB"){
					var arr=["Chandra","Raju","Hari","Bhuvi","kk","Surya","Ben","Mohith","Sri"];
				 }
				 else if(a==="Surya"){
					var arr=["Chandra","Raju","Hari","Bhuvi","kk","BB","Ben","Mohith","Sri"];
				 }
				 else if(a==="Ben"){
					var arr=["Chandra","Raju","Hari","Bhuvi","kk","BB","Surya","Mohith","Sri"];
				 }
				 else if(a==="Mohith"){
					var arr=["Chandra","Raju","Hari","Bhuvi","kk","BB","Surya","Ben","Sri"];
				 }
				 else if(a==="Sri"){
				 var arr=["Chandra","Raju","Hari","Bhuvi","kk","BB","Surya","Ben","Mohith"];
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#pink;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Chandra">Chandra</option>
			<option value="Raju">Raju</option>
			<option value="Hari">Hari</option>
			<option value="Bhuvi">Bhuvi</option>
			<option value="kk">kk</option>
			<option value="BB">BB</option>
			<option value="Surya">Surya</option>
			<option value="Ben">Ben</option>
			<option value="Mohith">Mohith</option>
			<option value="Sri">Sri</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()">
			<option selected>Select Name</option>
			<option value="Chandra">Chandra</option>
			<option value="Raju">Raju</option>
			<option value="Hari">Hari</option>
			<option value="Bhuvi">Bhuvi</option>
			<option value="kk">kk</option>
			<option value="BB">BB</option>
			<option value="Surya">Surya</option>
			<option value="Ben">Ben</option>
			<option value="Mohith">Mohith</option>
			<option value="Sri">Sri</option>
        </select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>

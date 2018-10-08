<!DOCTYPE html>
<html>
<head>
<title> Activity Scheduler</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<style type="text/css">
		*{ box-sizing: border-box;}
		body, html{
			height:100%;
			margin:0;
			background-color:#fee;
		}
		.tab{
			overflow:auto;
			background-color:#fee;
			border:none;
		}
		.tablinks{
			background-color:inherit;
			float:left;
			border:none;
			outline:none;
			cursor:pointer;
			padding:14px 16px;
			transition:0.3s;
			font-size:17px;
			width:33%;
		}
		.tablinks.active{
			background-color: #ccc;
		}
		.tablinks:hover{
			background-color:#ffc;
		}
		.tabcontent{
			display:none;
			padding:10px 12px;
			border:1px solid #ccc;
			height:100%;
			border-top:none;
			color:#fefefe;
		}

		form{
			align-content: center;
			background-color:inherit;
			margin:40px auto;
			width:80%;
		}
		input[type=text], input[type=date]{
			border:1px solid #ccc;
			border-radius:4px;
			font-size:17px;
			margin-left:25px;
			height:30px;
			padding:3px;
			margin-bottom: 5px;
			margin-right: 25px;
			width: 90%;
		}
		textarea{
			border:0.5px solid #888;
			height:150px; width: 90%;
			margin-left: 25px;
			margin-right: 25px;
		}
		#Task{
			background-color: #ffe;
			height:45%;
			margin: 60px;
			border: 1px solid #888;
			display: block;
		}
		#Exam{
			background-color: #ffe;
			height:45%;
			margin: 60px;
			border: 1px solid #888;
		}
		#Goal{
			background-color: #ffe;
			height:45%;
			margin: 60px;
			border: 1px solid #888;;
		}
		img{
			height:30px;
			width:30px;
		}
		#save, #cancelbtn{
			margin-top: 17px;
			margin-left: 15%;
			background-color: inherit;
			border: none;
			font-size: 19px;
			color: #88f;
			outline: none;
		}
		#save:hover, #cancelbtn:hover{
			color:#88e;
			border-bottom: 1px solid #887;
		}
	</style>
	<div class="header">
		<div class="tab">
		<button class="tablinks" onclick="document.getElementById('Task').style.display='block';document.getElementById('Exam').style.display='none';document.getElementById('Goal').style.display='none'" id="defaultOpen">Tasks</button>
		<button class="tablinks" onclick="document.getElementById('Exam').style.display='block';document.getElementById('Task').style.display='none';document.getElementById('Goal').style.display='none'">Exams</button>
		<button class="tablinks" onclick="document.getElementById('Goal').style.display='block';document.getElementById('Task').style.display='none';document.getElementById('Exam').style.display='none' ">Goals</button>
		</div>
		<div id="Task" class="tabcontent">
			<form name="addTask">
			<h4 style="color: #888; text-align: center;font-size: 20px;">Tasks</h4>
			<input type="text" placeholder="Name" name="Task"/><br>
			<input type="date" placeholder="Date" /><br>
			<input type="text" placeholder="Priority" /><br>
			<textarea placeholder="Notes"></textarea><br>
			<button type="submit" id="save">Save</button>
			<button type="reset" id="cancelbtn">Cancel</button>
			</form>
		</div>
		<div id="Exam" class="tabcontent">
			<form name="addExam">
				<h4 style="color: #888; text-align: center;font-size: 20px;">Exams</h4>
			<input type="text" placeholder="Name/Subject" /><br>
			<input type="date" placeholder="Date" /><br>
			<input type="text" placeholder="Duration" /><br>
			<textarea placeholder="Notes"></textarea><br>
			<button type="submit" id="save">Save</button>
			<button type="reset" id="cancelbtn">Cancel</button>
			</form>
		</div>
		<div id="Goal" class="tabcontent">
		<form name="addGoals">
			<h4 style="color: #888; text-align: center;font-size: 20px;">Goals</h4>
			<input type="text" placeholder="Title" /><br>
			<input type="text" placeholder="Category" /><br>
			<input type="date" placeholder="By" /><br>
			<textarea placeholder="Notes"></textarea><br>
			<button type="submit" id="save">Save</button>
			<button type="reset" id="cancelbtn">Cancel</button>
		</form>
		</div>
	</div>
</body>
</html>
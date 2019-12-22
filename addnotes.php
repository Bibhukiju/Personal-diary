<!DOCTYPE html>
<html>
<head>
	<title>addnotes</title>
</head>
<style type="text/css">
	.date
	{
		margin: 0px;
		width: 20%;
		height: 30px;
		background-color: lightyellow;
		border: 3px double black;
		float: left;
	}
	.title
	{
		width: 60%;
		height: 28px;
		font-size: 30px;
		background-color: lightyellow;
		border: 3px double black;
		text-shadow: 1px 1px 2px #ffffff;
		text-align: center;
	}
	.notes
	{
		width: 100%;
		background-color: lightyellow;
		height: 730px;
		border: 3px double black;
		vertical-align: top;
		text-align: left;
		font-size: 30px;

	}
	.done
	{
		float: right;
		height: 33px;
		width: 10%;
		background-color: lightyellow;
		border: 3px double black;
	}
</style>
<body>
	<form action="addnotes.php" method="post">
		<input type="text" name="title" placeholder="title" class="title" required>
		<input type="submit" name="done"   value="done" class="done">	
		<input type="date" name="date" required class="date">
		<input type="text" name="notes" class="notes" required placeholder="Addnotes.....">
	</form>

</body>
</html>
<?php
if(isset($_POST['done']))
{
	  $title=$_POST['title'];
	 $date=$_POST['date'];
	  $notes=$_POST['notes'];
$connection=mysqli_connect("localhost","root","","diary");
$qry="INSERT INTO notes(title,date,notes)VALUES('$title','$date','$notes')";
$result=mysqli_query($connection,$qry);
}
?>
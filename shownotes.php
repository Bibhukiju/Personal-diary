<!DOCTYPE html>
<html>
<head>
	<title>addnotes</title>
</head>
<style type="text/css">
	.date
	{
		margin: 0px;
		width: 29%;
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
	<?php
	$click=$_GET['id'];
	$connection=mysqli_connect("localhost","root","","diary");
	$query ="select * from notes where id=$click";
	$result=mysqli_query($connection,$query);

	 ?>
</style>
<body>
	<form >
		<?php while($row=mysqli_fetch_assoc($result))
		{
		 ?>
		<input type="text" name="title" placeholder="title" class="title" value="<?php echo $row['title']; ?>" required>
		<input type="submit" name="done"   value="update" class="done">
		<input type="date" name="date" required class="date" value="<?php echo $row['date'];?>">
		<input type="text" name="notes" class="notes" required placeholder="Addnotes..... " value="<?php echo $row['notes']; ?>">
		<?php
	}
	?>
	</form>

</body>
</html>

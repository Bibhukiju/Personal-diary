<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diary</title>
  </head>
<style>
.tite{
  background-color: aqua;
  color: #ffffff;
  font-size: 40px;
  padding: 10px;
  font-family: cursive;
}
.tite .dot
{
    float: right;
}
#add,#apple
{
  background-color: aqua;
  font-size: 30px;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  margin-top: 10%;
  float: right;

}
a
{
  color: black;
  text-decoration:none;

}
#d
{
  width: 100% ;
  height:30px;
  background-color: lightyellow;
  font-size: 30px;
}
</style>
  <body>
    <div class="tite">

      <b>Personal note</b>

    </div>
    <?php
    $connection=mysqli_connect("localhost","root","","diary");
$query="SELECT * FROM notes";
$result=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($result))
 {?>
    <table id="d">
      <tr>
        <td>
    <a href="shownotes.php?id=<?php echo   $row['id']?>"><?php echo($row['title'])."<br>";
    echo $row['date'];
    ?>

    </a>
  </td>
  </tr>
</table>
<hr>
    <?php
 }
  ?>
    <div id="add">
      <center>
      <a href="addnotes.php">+</a>
    </center>
    </div>

  </body>
</html>

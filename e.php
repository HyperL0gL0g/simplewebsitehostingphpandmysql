 <?php
$con= mysqli_connect('127.0.0.1','root','');
  
  if(!$con)
  {
	  echo " SERVER NOT CONNECTED";
  }

  if(!mysqli_select_db($con,'new'))
  {
	  echo " DATABASE NOT SELECTED";
  }

$Form1= $_POST['form1'];
$Form2= $_POST['form2'];
$sql = "INSERT INTO reg (Form1,Form2) VALUES ('$Form1','$Form2')";

  if(!mysqli_query($con,$sql))
  {
	  echo "NOT INSERTED INTO TABLE";
  }
  
  else
  {
	  echo " INSERTION SUCCESS";
  }
  ?>



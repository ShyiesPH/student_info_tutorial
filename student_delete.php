

<?php
//database connection  file
include('db.php');
//Code for deletion
if(isset($_GET['id']))
{
$rid=intval($_GET['id']);
$sql=mysqli_query($conn,"delete from students where id=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'home.php'</script>";     
} 
?>
<?php
include("db.php");
include("header.php");

$flag=0;
if(isset($_POST['submit']))
{
foreach($_POST['attendence_status']
 as $id=>$attendence_status)
{
$student_name=$_POST['student_name'][$id];
$roll_number=$_POST['roll_number'][$id];
$date=date("Y-m-d H:i:s");


$result=mysqli_query($con,"insert into attendence_records(student_name,roll_number,attendence_status,date)values ('$student_name','$roll_number','$attendence_status','$date')");

if($result)
{
$flag=1;
}
}
}
?>

<div class="panel panel-default">

<div class="panel panel-heading">
<h2>
<a class="btn btn-success" href="add.php">Add Student</a>
<a class="btn btn-info pull-right" href="view_all.php"> View All</a>

</h2>
<?php if($flag) {?>
<div class="alert alert-success">
Attendence Date Insert Successfully
</div>
<?php } ?>

<H3><div class="well text-center">Date:<?php echo date("Y-m-d");?> </div></H3>
<div class="panel panel-body">
<form action="index.php" method="Post">
<table class="table table-striped">

<tr>
<th>#serial Number</th><th> Student Name</th><th> Roll Number</th><th> Attendence Status</th>
</tr>

<?php $result=mysqli_query($con,"select * from attendence");
$s=0;
$counter=0;

while($row=mysqli_fetch_array($result))
{
$s++;

?>

<tr>
<td> <?php echo $s; ?></td>
<td> <?php echo $row['student_name']; ?> </td>

<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">
<td> 
<?php echo $row['roll_number']; ?>
<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">
</td>

<td>
<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Present"> Present
<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Absent"> Absent

</td>
</tr>

<?php
$counter++;
}
?>

</table>
<input type="submit" name="submit" value="submit">

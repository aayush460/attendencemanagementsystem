<?php
include("db.php");
include("header.php");
?>

<div class="panel panel-default">

<div class="panel panel-heading">
<h2>
<a class="btn btn-success" href="add.php">Add Student</a>
<a class="btn btn-info pull-right" href="index.php">Back</a>

</h2>

<div class="panel panel-body">
<form action="index.php" method="Post">
<table class="table table-striped">

<tr>
<th>Serial Number</th> <th> student names</th><th>roll no</th><th> Attendence Status</th>
</tr>

<?php $result=mysqli_query($con,"select * from attendence_records");
$s=0;
$counter=0;

while($row=mysqli_fetch_array($result))
{
$s++;

?>

<tr>
<td> <?php echo $s; ?></td>
<td> <?php echo $row['student_name']; ?> 
</td>
<td> <?php echo $row['roll_number'];?>
<td>
<input type="radio" name="attendence_status[<?php echo $counter; ?>]" 
<?php if($row['attendence_status']=='Present')
echo "checked==checked";
?>
value="Present">Present
<input type="radio" name="attendence_status[<?php echo $counter; ?>]" 
<?php if($row['attendence_status']=='Absent')
echo "checked==checked";
?>
value="Absent">Absent

</tr>

<?php
$counter++;
}
?>

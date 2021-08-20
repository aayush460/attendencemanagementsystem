<?php

include("header.php");

?>

<div class="panel panel-default">

<h2>
<a class="btn btn-success" href="add.php"> Add student</a>

<a class="btn btn-info pull-right" href="index.php"> Back </a>

</h2>

</div>

<div class="panel-body">

<form action="" method="post">

<div class="form-group">

<<label for="name"> Student Name </label>
<input type="text" name="name" id="name" class="form-control" required>
</div>

<div class="form-group">

<<label for="roll"> Roll Number </label>


<input type="text" name="roll" id="roll" class="form-control" required>
</div>

<div class="form-group">
<input type="submit"name="submit" value="submit" class="btn-btn-primary" required>
</div>

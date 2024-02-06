<?php $title = "Exercise 3: Variable, Strings & Operators"; include '../nart-tasks/header.php';
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];?>
<div class="exercise1">
<h3><?php echo "Hello " . $Firstname . " " . $Lastname . ", welcome to my website!";?></h3>
</div>
<?php include '../nart-tasks/footer.php';?>
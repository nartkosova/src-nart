<?php $title = "Exercise 4: Control flow and loops"; include 'header.php';?>
<div class="exercise3">
    <h3>1.Create a file (ex4.php): Create a file named ex4.php in your exercise folder. 
        Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
        <h3>2.If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
             decide if he/she is eligible for voting.
             (18 or more than 18 years is eligible for voting).</h3>
             <div class="exercise31">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $age = $_POST["age"];
            }
            ?> 
            <form name="ageform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
            <label for="age">Age:</label>
            <input type="number" name="age" required><br>
            <input type="submit" value="Check Eligibility"> <br></br>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST")  
            {if ($age>=18){
                echo "<p>You are eligible to vote!</p>";
            }else {
                echo "<p>You are too young to vote!</p>";
            }}?> 
        </form>
             </div>
        <h3>3.Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
            depending on whether it's August or not: It's August, so it's still holiday.
            Not August, this is Month-name so I don't have any holidays</h3>
            <?php 
            $month = date("F");
            switch($month){
                case 'August':
                    echo "<p>It's August, so it's still holiday</p>";
                    break;
                default:
                    echo "<p>Not August, this is " . $month . " so I don't have any holidays.</p>";
                    break;
            }
            ?>
        <h3>4.For Loop: Write a PHP script that will print the multiplication table of a number (n).</h3>
        <?php 
        $n= 5;
        for($i=1; $i<=10; $i++) {
            echo $n . "*" . $i . "=" . $n * $i . "<br></br>";
        }
        ?>
        <h3>5.While Loop: Write a PHP script that will print all the numbers from 1 to n.</h3>
        <?php 
        $i= 1;
        do {
            echo $i++ . "<br>";
        }while ($i<=$n);
        ?>
        <h3>6.Foreach Loop: Write a PHP script that will print all the elements of an array.</h3>
        <?php 
        $numbers = [10, 20, 30, 40, 50];
        foreach ($numbers as $value) {
            echo $value . "<br>";
        };
        ?>
    </div>
<?php include 'footer.php';?>
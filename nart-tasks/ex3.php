<?php $title = "Exercise 3: Variable, Strings & Operators"; include 'header.php';?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="exercise3">
        <h3 class="text-center mb-4">2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
            Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>

        <div class="exercise31">
            <form method="post" action="process.php" class="bg-white p-4 rounded shadow-sm">

                <div class="form-group">
                    <label for="Firstname">Firstname:</label>
                    <input type="text" class="form-control" id="Firstname" name="Firstname" required>
                </div>

                <div class="form-group">
                    <label for="Lastname">Lastname:</label>
                    <input type="text" class="form-control" id="Lastname" name="Lastname" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <h3>4.HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it.
             Note, you have already done a table in Exercise 1. 
             If you wish, you can use the same table.</h3>
        <div class="exercise31">
        <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Firstame</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Nart</td>
                    <td>Kosova</td>
                    <td>5</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>John</td>
                    <td>Smith</td>
                    <td>4</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Alice</td>
                    <td>Johnson</td>
                    <td>5</td>
                    </tr>
                </tbody>
                </table>
        </div>
        <h3>5.String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
            Join them together and print the length of the string.</h3>
            <?php 
            $str1 = "Hello"; 
            $str2 = "World";
            echo $str1 . " " . $str2; 
            echo "<br>";
            echo strlen($str1 . " " . $str2);
            ?>
           <h3>6.Number Addition: Write a script to add up the numbers: 298, 234, 46. 
            Use variables to store these numbers and an echo statement to output your answer.</h3>
            <?php
            $num1 = 298;
            $num2 = 234;
            $num3 = 46;
            echo $num1 + $num2 + $num3;
            ?>
            <h3>7.Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
                Hint: Use predefined variables: $_SERVER).</h3>
                <?php
                $browser = "Unknown";
                if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
                    $browser = 'Internet Explorer';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) {
                    $browser = 'Firefox';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
                    $browser = 'Google Chrome';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE) {
                    $browser = 'Safari';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE) {
                    $browser = 'Opera';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE) {
                    $browser = 'Microsoft Edge';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
                    $browser = 'Internet Explorer 11';
                }
                echo "You are using: " . $browser;
                ?>
            <h3>8.File Modification Time: Write a PHP script in the footer section of your universal footer to display 
                the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , 
                filetime function to get the last modified time & date function to print the date and time</h3>
    </div>
</div>

<?php include 'footer.php';?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="row">
        <div class="col-md-12 text-center base-font">
            <h3 class="base-font">Also check out my socials</h3>
            <div class="socials">
            </div>
            <div class="custom-div">
            <a href="https://twitter.com"style=color:red> Twitter </a>
            <a href="https://linkedin.com"style=color:red> LinkedIn </a>
            <a href="https://facebook.com"style=color:red> Facebook </a>
            <a href="https://github.com"style=color:red> GitHub </a>
            </div>
            <?php
    $filename = basename($_SERVER['PHP_SELF']);
    if (file_exists($filename)) {
        $lastModifiedTime = filemtime($filename);
        $lastModifiedDateTime = date("F d, Y H:i:s", $lastModifiedTime);
        
        echo "Last modified: $lastModifiedDateTime";
    } else {
        echo "File not found.";
    }
    ?>
        </div>
    </footer>
    </body>
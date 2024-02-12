<?php $title = "JavaScript"; include 'header.php';?>
<div class="container mt-4">
<h2>About us</h2>
<script>
    document.write("Hello World")
</script>

<script>
function hello(){
    document.write("This is after the page has loaded")
}
</script>
<button onclick="hello()"> Click Me</button>
</div>
<?php include 'footer.php'; ?>
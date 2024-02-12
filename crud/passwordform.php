<?php $title = "Exercise 7"; include '../nart-tasks/header.php'; ?>
<div class="exercise3">
    
<h2>Input Your Information Below:</h2>
<div class="exercise31">
<form name="form1" method="post" action="">
    <div class="form-group">
        <div class="row-mt-3">
            <div class="col-md-12">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required maxlength="20" minlength="3">
                <p id="nameError"></p>
            </div>
            <div class="col-md-12">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                <p id="emailError"></p>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row-mt-3">
            <div class="col-md-12">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                <p id="passwordError"></p>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
</div>
<script>
    //function to validate first name
function validateName() {
const name = document.getElementById("name").value;
const nameError = document.getElementById("nameError");
if(name.length < 3 || name.length > 20) {
    nameError.innerHTML = "Name must be between 3 & 20 characters.";
    return false;
}else {
    nameError.innerHTML = "";
    return true;
}
}
//function to validate last name
function validateEmail() {
const email = document.getElementById("email").value
const emailError = document.getElementById("emailError")
if(email ==="" || !email.includes("@")) {
    emailError.innerHTML = "Your email must include @."
    return false
}else {
    emailError.innerHTML = ""
    return true
}
}
function validatePassword() {
const password = document.getElementById("password").value
const passwordError = document.getElementById("passwordError")
if (password.length < 6){
    passwordError.innerHTML =  "Your password must be at least 6 characters!"
    return false
}else {
    passwordError.innerHTML=""
}
}
//event listeners
document.getElementById("name").addEventListener("input", validateName)
document.getElementById("email").addEventListener("input", validateEmail)
document.getElementById("password").addEventListener("input", validatePassword)
</script>

<?php include '../nart-tasks/footer.php'; ?>
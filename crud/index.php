<?php $title = "Exercise 7"; include '../nart-tasks/header.php'; ?>
<div class="exercise3">
    
<h2>Input Your Information Below:</h2>
<div class="exercise31">
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row-mt-3">
            <div class="col-md-12">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required maxlength="20" minlength="3">
                <!-- <p id="fnameError"></p> -->
            </div>
            <div class="col-md-12">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                <!-- <p id="lfameError"></p> -->
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row-mt-3">
            <div class="col-md-12">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
                <!-- <p id="cityError"></p> -->
            </div>
            <div class="col-md-12">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
                <!-- <p id="groupdidError"></p> -->
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
</div>
<!-- <script>
    //function to validate first name
function validatefName() {
const name = document.getElementById("fname").value
const nameError = document.getElementById("fnameError").value
if(fname.length < 3 || fname.length > 30) {
    nameError.innerHTML = "Name must be between 3 & 20 characters."
    return false
}else {
    nameError.innerHTML = ""
    return true
}
//function to validate last name
function validatelName() {
const name = document.getElementById("lname").value
const nameError = document.getElementById("lnameError").value
if(lname.length < 3 || lname.length > 30) {
    nameError.innerHTML = "Last name must be between 3 & 20 characters."
    return false
}else {
    nameError.innerHTML = ""
    return true
}
}

}
function validateCity() {
const name = document.getElementById("city").value
const nameError = document.getElementById("cityError").value
}
function validategroupid() {
const name = document.getElementById("groupid").value
const nameError = document.getElementById("groupdidError").value
}
//event listeners
dcoument.getElementId("fname").addEventListener("input", validatefName)
</script> -->

<?php include '../nart-tasks/footer.php'; ?>
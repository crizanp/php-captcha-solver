<!-- html css code from w3 school 
     php validator by crizan -->

<?php
session_start();
if (isset($_POST['submit'])) {
    $Captcha = $_POST['captcha'];
    if ($_SESSION['CODE'] == $Captcha) {
        $FirstName = $_POST['firstname'];
        $LastName = $_POST['lastname'];
        $Country = $_POST['country'];
        header("Location: redirectionpage.php?name=$FirstName");
        exit();
        } 
        else {
        echo "Your captcha got wrong enter valid one ( Wow your code worked )";
    }
} ?>
<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .captcha {
        width: 50% !important;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    label {
        font-weight: bold;
    }

    img {
        padding-top: 13px;
        margin-bottom: -10px;
    }
</style>

<body>

    <h3>Criz Form</h3>

    <div>
        <form method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>
            <label for="lname">Captcha</label><br>
            <img src="generator.php">
            <input type="text" id="lname" name="captcha" class="captcha"
                placeholder="Enter captcha as of above image..">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>
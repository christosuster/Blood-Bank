<?php
session_start();
if (!isset($_SESSION['login_user']))
    header("Location:/bb/index.php");

include "components/header.php";
include "classes/dbconnect.php";

$encode = $_GET['id'];
$username = base64_decode($encode);

$sql = "SELECT * FROM users WHERE `username` = '$username'";
$result = mysqli_query($con, $sql);
if ($result) {
    $row = mysqli_fetch_array($result);
}
?>
<div class="container">
    <h1 class="heading-reg">Profile Details</h1>
    <form action="classes/update.php" method="post">
        <div class="row form-row">
            <div class="col-md-6">
                <label for="FirstName">First Name</label>
                <input type="text" name="fname" value="<?php echo $row['fname']; ?>" class="form-control" id="FirstName"
                    aria-describedby="FirstName" placeholder="Enter your first name">
            </div>
            <div class="col-md-6">
                <label for="LastName">Last Name</label>
                <input type="text" value="<?php echo $row['lname']; ?>" name="lname" class="form-control" id="LastName"
                    aria-describedby="LastName" placeholder="Enter your last name">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="form-row row">
            <div class="col-md-12">
                <label for="StreetAddress">Street Address</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control"
                    id="StreetAddress" aria-describedby="StreetAddress" placeholder="Enter your street address">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="row form-row">
            <div class="col-md-6">
                <label for="city">City</label>
                <input type="text" name="city" value="<?php echo $row['city']; ?>" class="form-control" id="city"
                    placeholder="Enter your City">
            </div>
            <div class="col-md-6">
                <label for="division">Division</label>
                <input type="text" value="<?php echo $row['division']; ?>" name="division" class="form-control"
                    id="division" placeholder="Enter your division">
            </div>
        </div>

        <div class="spacer"></div>
        <div class="row form-row">

            <div class="col-md-6">
                <label for="Country"> Country </label>
                <input type="text" name="country" value="<?php echo $row['country']; ?>" class="form-control"
                    id="Country" aria-describedby="Country" placeholder="Enter your country">
            </div>
            <div class="col-md-6">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender">
                    <option value="Male" <?php if ($row['gender'] == "Male")
                        echo "selected"; ?>>Male</option>
                    <option value="Female" <?php if ($row['gender'] == "Female")
                        echo "selected"; ?>>Female</option>
                </select>
            </div>
        </div>

        <div class="spacer"></div>
        <div class="row form-row">
            <div class="col-md-6">
                <label for="Contact">Contact Number</label>
                <input type="text" name="contact" value="<?php echo $row['contact']; ?>" class="form-control"
                    id="Contact" aria-describedby="Contact" placeholder="Enter contact number">
            </div>
            <div class="col-md-6">
                <label for="email">Email Address </label>
                <input type="email" class="form-control" value="<?php echo $username ?>" disabled id="email"
                    name="email">
            </div>
        </div>
        <input type="hidden" value=<?php echo $username; ?> name="uname" />
        <div class="spacer"></div>
        <div class="row form-row">
            <div class="col-md-6">
                <label for="bgroup">Blood Group</label>
                <select name="bgroup" class="form-control" id="bgroup">
                    <option value="A+" <?php if ($row['bgroup'] == "A+")
                        echo "selected"; ?>>A+</option>
                    <option value="B+" <?php if ($row['bgroup'] == "B+")
                        echo "selected"; ?>>B+</option>
                    <option value="AB+" <?php if ($row['bgroup'] == "AB+")
                        echo "selected"; ?>>AB+</option>
                    <option value="O+" <?php if ($row['bgroup'] == "O+")
                        echo "selected"; ?>>O+</option>
                    <option value="A-" <?php if ($row['bgroup'] == "A-")
                        echo "selected"; ?>>A-</option>
                    <option value="B-" <?php if ($row['bgroup'] == "B-")
                        echo "selected"; ?>>B-</option>
                    <option value="AB-" <?php if ($row['bgroup'] == "AB-")
                        echo "selected"; ?>>AB-</option>
                    <option value="O-" <?php if ($row['bgroup'] == "O-")
                        echo "selected"; ?>>O-</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="active">Active Donator?</label>
                <select name="active" class="form-control" id="active">
                    <option value="YES" <?php if ($row['active'] == "YES")
                        echo "selected"; ?>>YES</option>
                    <option value="NO" <?php if ($row['active'] == "NO")
                        echo "selected"; ?>>NO</option>
                </select>
            </div>
        </div>

        <div class="spacer"></div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" name="submit" value="Save Profile" class="btn btn-success">
            </div>
        </div>
        <div class="spacer"></div>
</div>
</form>
</div>

<div class="cover">
</div>
<?php
include "components/footer.php";
?>
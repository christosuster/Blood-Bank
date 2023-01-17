<?php
    session_start();
    if(!isset($_SESSION['login_user']))
        header("Location:/bb/index.php");

    include "components/header.php";
    include "classes/dbconnect.php";    

    if( isset($_POST['submit']) ) 
    {
        if( $_POST['city'] != "" && $_POST['division'] != "" )
        {
            $bgroup = $_POST['bgroup'];
            $division = $_POST['division'];
            $city = $_POST['city'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup' and `city`='$city' and `division` = '$division' and `active`='YES'";
        }
        else if ( $_POST['city'] != "" )
        {
            $bgroup = $_POST['bgroup'];
            $city = $_POST['city'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup' and `city`='$city' and `active`='YES'";
        }
        else if ( $_POST['division'] != "" ) 
        {
            $bgroup = $_POST['bgroup'];
            $division = $_POST['division'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup' and `division` = '$division' and `active`='YES'";
        }
        else {
            $bgroup = $_POST['bgroup'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup' and `active`='YES'";
        }

        $result = mysqli_query($con,$sql);
        if( !$result ) {
            header('Location:error.php');
        }
    }
    else {
        $sql = "SELECT * FROM `users` where `active`='YES'";
    
        $result = mysqli_query($con,$sql);
        if( !$result ) {
            header('Location:error.php');
        }
    }
    
?>
<div class="container">
    <h1 class="heading-reg">Active Donors</h1>
    <div class="row">
        <form method="post" action="search.php">
            <div class="col-md-3">
                <div class="form-row">
                    <label for="bgroup">Blood Group</label>
                    <select name="bgroup" class="form-control" id="bgroup">
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="O+" >O+</option>
                        <option value="A-" >A-</option>
                        <option value="B-" >B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <label for="ldonated">City</label>
                <input type="text" name="city" class="form-control" id="ldonated" placeholder="City">
            </div>
            <div class="col-md-3">
                <label for="ldonated">Division</label>
                <input type="text" name="division" class="form-control" id="ldonated" placeholder="Division">
            </div>
            <div class="col-md-3">
                <input type="submit" name="submit" class="btn btn-primary sbutton" value="Search" />
            </div>
        </form>
    </div>

    <div class="spacer"></div>
    <div class="spacer"></div>

    <?php if( isset($result)) while($row = mysqli_fetch_array($result)) : ?>
        <div class="row">
            <div class="container request">
                <div class="col-md-2 blood">
                    <?php echo $row['bgroup']; ?>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">Name</td>
                            <td><?php echo $row['fname'];
                                      echo " "; 
                                      echo $row['lname'];
                                ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Address</td>
                            <td><?php 
                                    echo $row['address'];
                                    echo ", ";
                                    echo $row['city']; 
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">Contact </td>
                            <td><?php echo $row['contact']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Division</td>
                            <td><?php echo $row['division']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php endwhile;?>
    

    <div class="spacer"></div>
    <div class="spacer"></div>
</div>

<div class="cover">
</div>
<?php
    include "components/footer.php";
?>
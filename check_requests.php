<?php
    session_start();
    if(!isset($_SESSION['login_user']))
    header("Location:/bb/index.php");

    include "components/header.php";
    include "classes/dbconnect.php";

    $sql = "SELECT * FROM request";
    $result = mysqli_query($con,$sql);
    if(! $result ) {
        header('Location:../error.php');
    }
    
?>


<div class="container">
    <h1 class="heading-reg">All Requests</h1>   
    
    <?php while($row = mysqli_fetch_array($result)) : ?>
        <div class="row req_row">
            <div class="container request">
                <div class="col-md-2 blood">
                    <?php echo $row['bgroup']; ?>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">Patient's Name</td>
                            <td><?php echo $row['pName']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Hospital Name</td>
                            <td><?php echo $row['hName']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Hospital Address</td>
                            <td><?php echo $row['haddress']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">City</td>
                            <td><?php echo $row['city']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Contact's Name</td>
                            <td><?php echo $row['cName']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Contact's Number</td>
                            <td><?php echo $row['cNumber']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="cross">
            <?php echo "<td><a href='delete.php?id=".$row['id']."'>X</a></td>";
            echo "</tr>"; ?>
            
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
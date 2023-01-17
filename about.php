<?php
session_start();
if (!isset($_SESSION['login_user']))
    header("Location:/bb/index.php");

include "components/header.php";
include "classes/dbconnect.php";

?>

<div class="about">
    <h1>
        This project was created by Christos Uster Biswas for his DBMS course.
    </h1>
</div>
<div class="cover"></div>
<?php
include "components/footer.php";
?>
<?php
    $set_title = "Birds-page";

    include("../common/head.php");
    require("../html/header.html");
?>


<?php
    include 'config.php';
    $select = mysqli_query($conn, "SELECT * FROM products");
    require("./page/birds.html");
?>

<?php
require("../html/footer.html");
?>
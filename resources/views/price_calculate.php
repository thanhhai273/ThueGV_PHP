<!-- <?php
    if (isset($_POST['submit'])) {
    if(isset($_POST['radio']))
        {
            $h = $_POST['hour'];
            $x = $_POST['use-chemical'];
            $price = 60000*$h + 100000*$x;
            echo"Giá vệ sinh: ".$price;
        }
    }
?> -->
<?php
$h = $_POST['hour'];
$x = $_POST['optradio'];
$price = 60000*$h + 100000*$x;
echo"Giá vệ sinh: ".$price;
?>
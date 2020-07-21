<?php
   
    if (isset($_POST["my_submit"])) {
        $first_name = trim($_POST["first_name"]);
        $last_name = trim($_POST["last_name"]);
        $hours = trim($_POST["num_hours"]);
        $wage = trim($_POST["wage"]);
        $gross = trim($_POST["gross"]);

        $gross = $hours * $wage;

    }
    else {
        $first_name = "";
        $last_name = "";
        $hours = "";
        $wage = "";
        $gross = "";
    }  



    include ("Include/header.html");
    include ("Include/navigation.html");
    include ("Include/calculate.html");
    if ($gross > 0) {
        //echo "<script> document.getElementById('hide_payroll').style.display = 'block'; </script>";
        include ("Include/navigation.html");
        
    }
    include ("Include/footer.html");



?>
<?php


    if (isset($_POST["my_submit"])) {

        $step2 = 1; //if 1 output withing the form and if 0 output just to blank page
        /*$f = new NumberFormatter("en", NumberFormatter::CURRENCY);
        $wage = $f->formatCurrency($w, "USD"); 
        $wage = $f->formatCurrency($wage, "en_CA"); 
        $gross = $f->formatCurrency($gross, "en_CA"); */

        $overtime_hours = 0;
        $payroll_tax = 0;
        $first_name = trim($_POST["first_name"]);
        $last_name = trim($_POST["last_name"]);
        $hours = trim($_POST["num_hours"]);
        $wage = trim($_POST["wage"]);
       
        If ($hours > 40) {
            $reg_hours = 40;
            $overtime_hours = $hours - 40;
        }
        else {
            $reg_hours = $hours;
        }

        $regular = $reg_hours * $wage;
        $overtime = $overtime_hours * ($wage * 1.5);
        $gross = $regular + $overtime;
        $payroll_tax = $gross * 0.25;
        $net_pay = $gross - $payroll_tax;

    }
    else {
        $first_name = "";
        $last_name = "";
        $hours = "";
        $wage = "";
        $gross = "";
        $payroll = "";
        $net_pay = "";
    }  


    include ("Include/header.html");
    include ("Include/navigation.html");
    include ("Include/paystep1.html");
    include ("Include/footer.html");

?>
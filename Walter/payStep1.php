<?php

/*
    if (isset($_POST["my_submit"])) {

        $step2 = 1; //if 1 output withing the form and if 0 output just to blank page
        $f = new NumberFormatter("en", NumberFormatter::CURRENCY);
        $wage = $f->formatCurrency($w, "USD"); 
        $wage = $f->formatCurrency($wage, "en_CA");

        function Calcuate_Regular_Pay ($number_of_hours, $my_wage) {

            $pay = $number_of_hours * $my_wage;
            return $pay;

        } 

        function Calculate_OverTime_Pay ($number_of_hours, $my_wage) {

            $overtime_pay = $number_of_hours * ($my_wage * 1.5);
            return $overtime_pay; 

        } 

        function Calculate_Taxes ($pay, $tax_bracket) {
            
            $tax = $pay * $tax_bracket;
            return $tax;

        } 
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

        $regular = Calcuate_Regular_Pay ($reg_hours, $wage); //$reg_hours * $wage;
        $overtime = Calculate_OverTime_Pay ( $overtime_hours, $wage); 
        $gross = $regular + $overtime;
        $payroll_tax = Calculate_Taxes ($gross, 0.25);    //$gross * 0.25;
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
*/

    include ("Include/header.html");
    include ("Include/navigation.html");
    include ("Include/paystep1.html");
    include ("Include/footer.html");

?>
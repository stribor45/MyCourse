<?php
   
   if (isset($_GET["my_submit"])) {
      $rent = htmlspecialchars($_GET["rent_mortgage"]);
      echo $rent;
      $home = $_GET["home_phone"];
      $income = $_GET["income"];
      $cell = $_GET["cell_phone"];
      $hydro = $_GET["hydro"];
      $num_cell = $_GET["num_cell"];
      $cable = $_GET["cable"];
      $total = $_GET["total"];
      $travel = $_GET["travel_expenses"];
      $balance = $_GET["balance"];
      $food = $_GET["food"];
      $projected = $_GET["projected"];       
   }
   else {
      $rent = "";
      $home = "";
      $income = "";
      $cell = "";
      $hydro = "";
      $num_cell = "";
      $cable = "";
      $total = "";
      $travel = "";
      $balance = "";
      $food = "";
      $projected = ""; 
   }

  

   include ("Include/header.html");
   include ("Include/navigation.html");
   include ("Include/monthlybills.html");
   include ("Include/footer.html");



?>

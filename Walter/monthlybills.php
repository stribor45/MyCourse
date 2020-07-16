<?php
   
   if (isset($_POST["my_submit"])) {
      $rent = trim($_POST["rent_mortgage"]);
      $home = trim($_POST["home_phone"]);
      $income = trim($_POST["income"]);
      $cell = trim($_POST["cell_phone"]);
      $hydro = trim($_POST["hydro"]);
      $num_cell = trim($_POST["num_cell"]);
      $cable = trim($_POST["cable"]);
      $total = trim($_POST["total"]);
      $travel = trim($_POST["travel_expenses"]);
      $balance = trim($_POST["balance"]);
      $food = trim($_POST["food"]);
      $projected = trim($_POST["projected"]);   

    
      
      $total = $rent + $home + ($cell * $num_cell) + $hydro + $cable + $travel + $food;
      $balance = $income - $total;
      $projected = $balance * 12;


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

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       <title >Hello World</title>
   </head>
   <body class="p-5">
     <!-- --------- -->
     <p>POST METHOD</p>
     <!-- --------- -->
       <form class="row row-cols-2" action="hello-world.php" method ="POST">
           <p class="col-2">Name: </p><input class="col-10 my-1" type="text"  name="name" />
           <p class="col-2">Age: </p><input class="col-10 my-1" type ="text" name="age" />
           <input class="col-12 my-1" type="submit" name="submit"  />
       </form>

       <?php
       if( isset($_POST['submit']))
       {
           if( $_POST["name"] || $_POST["age"] )
           {
               echo "<p class='mt-4'>Welcome {$_POST[ 'name']}!</p> 
                <p>You are   {$_POST['age']}  years old.</p>";
           }
       }
       ?>

<hr>
       <!-- --------------------- -->
       <p class="mt-5">GET METHOD</p>
       <!-- --------------------- -->
       <form class="row row-cols-2" action="hello-world.php" method= "GET">
           <p class="col-2">Name:</p> <input class="col-10 my-1" type="text"  name="name" />
           <p class="col-2">Age: </p><input class="col-10 my-1" type= "text" name="age" />
           <input class="col-12 my-1" type="submit" name="submit" />
       </form>
       <?php
       if(isset($_GET[ 'submit']))
       {
           if( $_GET["name"] || $_GET["age" ] )
           {
               echo "<p class='mt-4'>Welcome {$_GET['name']}!</p> 
                     <p>You are  {$_GET['age']}  years old.</p>";
           }
       }
       ?>
<hr>
       <!-- ------- -->
       <h1>Fuction</h1>
       <!-- ------- -->
       <?php
       function capFirstString($str)
       {
           $cap = ucfirst($str);
           echo "<h1 class='mt-5'>$cap</h1>";
       }
       capFirstString("hello world");
       ?>
<hr>
        <?php
       function addFunction($num1, $num2)
       {
           $sum = $num1 + $num2;
           return  $sum;
       }
       $return_value = addFunction(10, 20);
       echo "<h3>Returned value from the function: $return_value</h3>";
       echo $return_value;
       var_dump($return_value);
       $myString = "It's a string";
       var_dump($myString);
       ?>

<hr>
        <!-- ---------- -->
        <h1>var_dump()</h1>
        <!-- ---------- -->
       <?php
       function formatted_dump($content){
        echo '<pre>';
        var_dump($content);
        echo '</pre>';
       };

       $name = 'John';
       function fullName(){
        $surname = 'Doe';
        $fullName = $GLOBALS['name'] . ' ' . $GLOBALS['surname'];
        return $fullName;
       };

       formatted_dump($GLOBALS);
       ?>
<hr>
<!-- ------------------------------ -->
<h1>The If, elseif, Else Statement</h1>
<!-- ------------------------------ -->

<?php

$date = date('l');
//"l" will return the full name of the day of the week

// or
// $date = date('N');
//"N" returns day of the week as numbers mon=1, sun=7

if ($date == 'Friday')
echo "<p>It's Friday, weekend is around the corner... :-)</p>";
elseif ($date == 'Saturday')
echo "<p class='text-success'>Chill out, you have time ;)</p>";
elseif ($date == 'Sunday')
echo "<p class='text-danger-emphasis'>Are you prepared for tomorrow?</p>";
else 
echo "<p class='text-info'>Don't watch the clock; do what it does, keep on going</p>";
?>

<hr>
<!-- -------------------- -->
<h1>The Switch Statement</h1>
<!-- -------------------- -->

<?php
$today = date("D");

switch($today){
    case "Mon":
        echo "<p class='text-primary-emphasis'>Today is Monday</p>";
        break;
    case "Tue":
        echo "<p class='text-primary-emphasis'>Today is Tuesday</p>";
        break;
    case "Wed":
        echo "<p class='text-primary-emphasis'>Today is Wednesday</p>";
        break;
    case "Thu":
        echo "<p class='text-primary-emphasis'>Today is Thursday</p>";
        break;
    case "Fri";
        echo "<p class='text-primary-emphasis'>Today is Friday</p>";
        break;
    case "Sat":
        echo "<p class='text-success-emphasis'>Totay is Saturday</p>";
        break;
    case "Sun":
        echo "<p class='text-success-emphasis'>Today is Sunday</p>";
        break;
    default:
        echo "<p class='text-secondary'>If you seeing this message, something went wrong :)</p>";
    


};
?>

       <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
   </body>
</html>
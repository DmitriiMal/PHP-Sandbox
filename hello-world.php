<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       <title >Hello World</title>
   </head>
   <body class="d-flex flex-column justify-content-center align-items-center pt-5">
   <!-- POST METHOD -->
     <p>POST METHOD</p>
       <form action="hello-world.php" method ="POST">
           Name: <input type="text"  name="name" />
           Age: <input type ="text" name="age" />
           <input type="submit" name="submit"  />
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
       <!-- +++++++++++++++++++++++++++ -->

       <!-- GET METHOD -->
       <p class="mt-5">GET METHOD</p>
       <form action="hello-world.php" method= "GET">
           Name: <input type="text"  name="name" />
           Age: <input type= "text" name="age" />
           <input  type="submit" name="submit" />
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

       <!-- Fuction -->
       <?php
       function capFirstString($str)
       {
           $cap = ucfirst($str);
           echo "<h1 class='mt-5'>$cap</h1>";
       }
       capFirstString("hello world");
       ?>

       <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
   </body>
</html>
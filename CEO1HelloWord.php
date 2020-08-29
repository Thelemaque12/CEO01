<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
        <?php
        /*page created by Jefson Simeus
         * CSIS 2440 Day 1
         */
        $name = "Jefson Simeus";
         $age = 28;
         $male = true;
         $icecream = "Strawberry";
         $imagefile = "image/basketball.jpg";
        ?>
    </head>
    <body>
       <div>
             <?php
             // Get some better Style
             echo "<p style = 'font:tahoma; color:red;'> Hello World, This is my first PHP page!</p>";
             print("<p>My name: ".$name."Who is $age years old, and likes $icecream ice-cream</p>");
             print('<p>We are using variables $name, $age, $icecream</p>');
             print("<img src='$imagefile' height = '100'>");
              ?>
        </div>
    </body>
</html>

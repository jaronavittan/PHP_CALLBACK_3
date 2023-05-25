<html>
  <head>
    <title>PHP array_map Test</title>
  </head>
  <link rel="stylesheet" href="stylesheet.css"> 
  <body>
   <h1>The example below contains the multiplicities from the function.</h1>
   <p> 
   <?php 

     $array_map = array(10,20,39);

     function another_example($array_map) {

       $foreach_example = array();

       foreach( $array_map as $value ) {

         $foreach_example[] = $value * 2;
         
       }

        return $foreach_example; 
       
     }

    var_dump(another_example($array_map));   

   ?> 
   </p> 
   <ul>
     <li>The numbers above are all results of the Funtcion.</li>
     <li>The Function serves as a multiplier (By 2).</li>
     <li>The input is done on the back end.</li>
   </ul>

    <form action="welcome.php" method="post">
    First Value: <input type="text" name="name"><br>
    Second Value: <input type="text" name="email"><br>
    <input type="submit">
    </form>
    
  </body>
</html>

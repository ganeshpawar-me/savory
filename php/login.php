<?php

   header('Access-Control-Allow-Origin: *'); 

       include 'connect.php';


       $auth='wrong';

         $username=trim($_POST['username']);
         $password=trim($_POST['password']);



         $query="select * from mess";
         $result=mysqli_query($dbc,$query);


         while($row=mysqli_fetch_array($result))
         {


           if($username==$row['username'] && $password==$row['password'])
           {

             $auth='right';
             session_start();
             $_SESSION["username"]=$username;
          
          printf("<script>location.href='admin.html'</script>");
             break;
           }


       }



       if($auth=='wrong')
       {
         echo '<div>Enter valid password</div>';
        // printf("<script>location.href='index.html'</script>");
       }

   ?>

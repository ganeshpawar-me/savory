<?php
	
	header('Access-Control-Allow-Origin: *'); 
session_start();

       include 'connect.php';
      $messname=$_SESSION["username"];

      $date=date("Y/m/d");

      $item1=trim($_POST['item1']);
      $item2=trim($_POST['item2']);
      $item3=trim($_POST['item3']);
      $item4=trim($_POST['item4']);
      $item5=trim($_POST['item5']);
      $price=trim($_POST['price']);
      $note=trim($_POST['note']);
      $type=trim($_POST['type']);
      


      $query="update mess set item1='$item1', item2='$item2' , item3='$item3' , item4='$item4' ,item5='$item5', price='$price' , note='$note' , type='$type',date='$date' where username='$messname'";
      $result=mysqli_query($dbc,$query);


      printf("<script>alert('Menu Updated')</script>");






   ?>

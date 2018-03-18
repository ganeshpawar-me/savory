<?php


header('Access-Control-Allow-Origin: *');

 include 'connect.php';

 $query="select * from mess";
 $result=mysqli_query($dbc,$query);


 while($row=mysqli_fetch_array($result))
 {

       $messName=$row['username'];
       $item1=$row['item1'];
       $item2=$row['item2'];
       $item3=$row['item3'];
       $item4=$row['item4'];
       $item5=$row['item5'];
       $price=$row['price'];
       $note=$row['note'];

    echo "<li>
        <div class='collapsible-header'>$messName</div>
        <div class='collapsible-body'>
          <div class='container'>
            <ul class='collection'>
              <li class='collection-item'><h5>Rs. $price /-</h5></li>
              <li class='collection-item'> $item1</li>
              <li class='collection-item'> $item2</li>
              <li class='collection-item'> $item3</li>
              <li class='collection-item'> $item4</li>
                <li class='collection-item'> $item5</li>
              <li class='collection-item'><h5>Note:</h5>$note</li>
            </ul>
          </div>
        </div></li>
      ";



}

?>

<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>View Item</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="ViewMessages.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <h1 style="color:white; size:20px">StayBlizz Admin<h1> 
        <nav>
        <ul  class="nav_links">
                <li> <a href="Profile.php">Profile settings</a> </li>
                <li> <a href="ViewCustomer.php">View Users</a> </li>
                <li> <a href="AdminOrder.php">Check Placed orders</a> </li>
                <li> <a href="ContactUSAdmin.php">Check messages</a> </li>
                <li><form action = "logout.php" method = "post"><button type="submit">Logout</button></form></a></li>
            </ul>
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------->
<div class="OrderContainer">
            <h1 class='conthead'>Message from the user</h1>

            <table id="ordertable">
            <tr> 
               <th>Message</th>
             </tr>

             

             <?php

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "shop_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 

    session_start();   
    $usn = $_POST['id'] ;

    //---------------------------------------------------------------------------reading statements---------------------
    $sqlll= "select *from contact where Email = '$usn'";  
    $result = mysqli_query($con, $sqlll);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if ($count > 0 ) {

        while($row = $result -> fetch_assoc()) {

            echo "<tr><td>" . $row['Message'] . "</td> </tr>";
        }

    

    }

    else {
        echo "<tr><td>No message </td> </tr>" ;
    }


     ?>


</table>


</div>






</body>

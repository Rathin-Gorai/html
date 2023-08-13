<?php 


/*require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/

require_once 'config/db.php';
require_once 'config/functions.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Orders</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
        <h2 class="display-6 text-center text-white fw-bold ">Customer Orders</h2>
          <div class="card mt-5">
            <div class="card-header">
              <!-- <h2 class="display-6 text-center">Customer Orders</h2> -->
            </div>
            <div class="card-body, table-responsive">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> Name </td>
                  <td> Email </td>
                  <td> Mobile </td>
                  <td> Massage </td>
                  <td> Project </td>
                  <!-- <td> Edit </td>
                  <td> Delete </td> -->
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['NAME']; ?></td>
                  <td><?php echo $row['EMAIL']; ?></td>
                  <td><?php echo $row['SUBJECT']; ?></td>
                  <td><?php echo $row['MASSAGE']; ?></td>
                  <td><?php echo $row['PROJECT']; ?></td>
                  <!-- <td><a href="#" class="btn btn-primary">Edit</a></td>  
                  <td><a href="#" class="btn btn-danger">Delete</a></td>   -->
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
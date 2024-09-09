<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBER DETAILS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</head>
<body>
    <div class="container my-5">
      <h2>List of members</h2>
      <a class="btn btn-primary" href="create.php" role="button">New Member</a>
      <br>
      <table class="table">
        <thead>
          <th>ID</th>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
          <th>address</th>
          <th>created at</th>
          <th>Action</th>
          <th></th>
               
          <TBody>
            <?php 
              $servername = "localhost";
              $username= "root";
              $password = "";
              $database = "member_db";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);
// Check connection.
if ($connection->connect_error) {
die("Connection failed:". $connection->connect_error);
}
// read all cow from database table
$sql = "SELECT * FROM clients";
$result = $connection->query($sql);

while($row = $result->fetch_assoc()) {
  echo"
   
              
              <td>$row[id]</td>
              <td>$row[name]</td>
              <td>$row[email]</td>
              <td>$row[phone]</td>
              <td>$row[address]</td>
              <td>$row[created_at]</td>
              
              <td>
<a class='btn btn-primary btn-sm' href='edit.php.php?id=$row[id]'>Edit</a>
<a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
  ";
}
  
?>
          
          <tr>
           

</td>
            </td>
          </tr>
        </TBody>
        </thead>
      </table>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>


 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
    <?php
   $data = [
    ["ID"=>1,"Name"=>"Shreya Das","Email"=>"shreya@gmail.com","Phn No"=>9736423520],
    ["ID"=>2,"Name"=>"Most Soha Sabnam","Email"=>"soha@gmail.com","Phn No"=>8670324087],
    ["ID"=>3,"Name"=>"Shalini Das","Email"=>"shalini@gmail.com","Phn No"=>9867453290],
    ["ID"=>4,"Name"=>"Debjit Das Biswas","Email"=>"debjit@gmail.com","Phn No"=>7786709087],
    ["ID"=>5,"Name"=>"Mukesh Kumar","Email"=>"mukesh@gmail.com","Phn No"=>8673204570],




   ];
   ?>
    <div class="container-fluid text-dark bg-lighat text-center p-3">
        <h1>Contact With Us</h1>
    </div>
    <div class="container-fluid">

    </div>
    <div class="container-fluid m-0 p-0">
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phn No</th>
            </tr>
            <?php
                foreach($data as $x) {
                    echo "<tr>";
                    echo "<td>" . $x["ID"] . "</td>";
                    echo "<td>" . $x["Name"] . "</td>";
                    echo "<td>" . $x["Email"] . "</td>";
                    echo "<td>" . $x["Phn No"] . "</td>";
                    echo "</tr>";
                }
                ?>
        </table>
     </div>
   
</body>
</html>
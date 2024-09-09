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
<div class="container-fluid text-dark bg-info text-center p-4">
    <h1>Sales and Offers</h1>
    <br>
    <div class="row">
        <?php
        
            $images = [
                ["src"=>"propow.jpg","title"=>"Protien powder","description"=>"MRP:2999/-\n\n<b>Our price:1800/-</b>"],
                ["src"=>"endr.jpg","title"=>"Energy Drink","description"=>"MRP:899/-\n\n<b>Our price:599/-</b>"],
                ["src"=>"sup.jpg","title"=>"Iron Suppliment","description"=>"MRP:699/-\n\n<b>Our price:399/-</b>"],
                ["src"=>"enbar.jpg","title"=>"Energy Bar","description"=>"MRP:100/-\n\n<b>Our price:68/-</b>"],
             ];


            foreach($images as $x) {
                echo '<div class="col-sm-3 col-md-3 col-xl-3 col-lg-3">';
                echo '<div class="card">';
                echo '<img src=" ' .$x["src"]. '" class="card-img-top" alt=" '.$x["title"].'">';
                echo '<div class="card-body">';
                echo '<h4 class="card-title">'.$x["title"]. '</h4>';
                echo '<p class="card-text">' .$x["description"]. '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '<br></br>';
            $images = [
                ["src"=>"free.jpg","title"=>"OFFER","description"=>""],
                ["src"=>"disc.jpg","title"=>"DISCOUNT","description"=>""],
                ["src"=>"enroll.jpg","title"=>"FECILITIES","description"=>""],
                ["src"=>"yoga.jpg","title"=>"YOGA SESSION","description"=>""],];

                foreach($images as $x) {
                    echo '<div class="col-sm-3 col-md-3 col-xl-3 col-lg-3">';
                    echo '<div class="card">';
                    echo '<img src=" ' .$x["src"]. '" class="card-img-top" alt=" '.$x["title"].'">';
                    echo '<div class="card-body">';
                    echo '<h4 class="card-title">'.$x["title"]. '</h4>';
                    echo '<p class="card-text">' .$x["description"]. '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }

        ?>
    
    </div>
   </div>
    <?php
   $data = [
    ["ID"=>1,"age"=>"18-25","weight"=>"44-56.7 kg","height"=>"163 cm"],
    ["ID"=>2,"age"=>"30-40","weight"=>"around 76 kg","height"=>"_"],
    ["ID"=>3,"age"=>"45-60","weight"=>"47-81 kg","height"=>"_"],
    ["ID"=>4,"age"=>"70-85","weight"=>"60-81 kg","height"=>"_"],



   ];
   ?>
    <div class="container-fluid text-dark bg-lighat text-center p-3">
        <h1>HEALTHY PERSON</h1>
    </div>
    <div class="container-fluid">

    </div>
    <div class="container-fluid m-0 p-0">
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>age</th>
                <th>weight</th>
                <th>height</th>
            </tr>
            <?php
                foreach($data as $x) {
                    echo "<tr>";
                    echo "<td>" . $x["ID"] . "</td>";
                    echo "<td>" . $x["age"] . "</td>";
                    echo "<td>" . $x["weight"] . "</td>";
                    echo "<td>" . $x["height"] . "</td>";
                    echo "</tr>";
                }
                ?>
        </table>
     </div>
     <?php
      $data = [
        ["ID"=>1,"SHIFT"=>"Morning","schedule"=>"7:30-9:00 am"],
        ["ID"=>2,"SHIFT"=>"Evening","schedule"=>"7:00-9:00 pm"],
    
       ];
       ?>

<div class="container-fluid text-dark bg-lighat text-center p-3">
        <h1>YOUR COMFORT TIME</h1>
    </div>
    <div class="container-fluid">

    </div>
    <div class="container-fluid m-0 p-0">
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>SHIFT</th>
                <th>SCHEDULE</th>
            </tr>
            <?php
                foreach($data as $x) {
                    echo "<tr>";
                    echo "<td>" . $x["ID"] . "</td>";
                    echo "<td>" . $x["SHIFT"] . "</td>";
                    echo "<td>" . $x["schedule"] . "</td>";
                    echo "</tr>";
                }
                ?>
        </table>
     </div>
    
   
</body>
</html>
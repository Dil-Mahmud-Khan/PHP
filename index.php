<?php
   //connecting to database
   $severname="localhost"  ;
   $username="root";
   $password="";
   $database="notes";
   $insert="";

   $conn=mysqli_connect($severname,$username,$password,$database);

   if(!$conn){
       die("Sorry ! we failed to connect".mysqli_connect_error());
   }
   if($_SERVER['REQUEST_METHOD']=='POST'){
      $title=$_POST["title"];
      $description=$_POST["description"];
      $sql="INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
      //$sql="INSERT INTO 'notes' ('title','description') VALUES('$title','$description')";
      $result=mysqli_query($conn,$sql);
      
      if($result){
          $insert=true;
      }
      else{
          echo"Bad".mysqli_error($conn);
    }
  }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
             $('#myTable').DataTable();
        } );
    </script>
    

</head>
<title></title>

<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">G-Notebook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    if($insert){
        echo" <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>SUCCESS!</strong> Data Inserted Successfully
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
    <div class="container my-4">
        <h2>Add a note</h2>
        <form action="/Crud/index.php" method="POST">
        
            <div class="mb-3">
                <label for="title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="desc">Description</label>
                <textarea class="form-control" id="description" name="description"style="height: 100px"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <div class="container my-4">
     
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <?php
                $sql="SELECT * FROM `notes` ";
                $result=mysqli_query($conn,$sql);
                $sno=0;
                while($row=mysqli_fetch_assoc($result)){
                    $sno=$sno+1;
                    echo"<tr>
                    <th scope='row'>".$sno."</th>
                    <td>".$row['title']."</td>
                    <td>".$row['description']."</td>
                    <td>Actions</td>
                </tr>";
                }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>
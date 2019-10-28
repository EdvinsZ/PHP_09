<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TODO</title>
</head>

<body style="background-color:#fcfcfc;"> 
    <?php require_once 'process.php'; ?>

    <?php
     
      if (isset($_SESSION['message'])): ?>

      <div class = "alert alert-<?=$_SESSION['msg_type']?>">

         <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
         ?>
      </div>
    <?php endif ?>
    
    <br>

    <a class="float-right btn btn-primary btn-lg" href="logout.php"> LOGOUT </a>

    

    <div class="row justify-content-center"><h1 class="display-4"> <?php echo $_SESSION['username']; ?> - TODO list </h1> </div> <br>
    <div class="container ">
    <?php
         $mysqli = new mysqli('localhost', 'root', '' ,'crud') or die(mysqli_error($mysqli));
         $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
        //  pre_r($result);
        ?>
         
        <div class="row justify-content-center">
              <table class="table">
                <thead>
                   <tr>                   
                        <th>NAME</th>
                        <th>LIST</th>
                        <th colspan="2">ACTION</th>
                   </tr>
                </thead>
         <?php
            while ($row = $result->fetch_assoc()): ?>
               <tr>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['list']; ?></td>
                  <td>
                      <a href="index.php?edit=<?php echo $row['id']; ?>"
                        class = "btn btn-info">Edit</a>
                      <a href=  "process.php?delete=<?php echo $row['id']; ?>"
                        class="btn btn-danger">Delete</a>
                  </td>
               </tr>
              <?php endwhile; ?>
              </table>    
        </div>      
         <?php
         function pre_r( $array ){
             echo '<pre>' ;
             print_r($array);
             echo '</pre>';
         }
     ?>


    <div class="row justify-content-center">
     <form action="process.php" method="POST">
         <input type="hidden" name="id" value="<?php echo $id ?>">
     <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" 
              value="<?php echo $name; ?>" placeholder="Enter your name">
        </div>
        <div class="form-group">
        <label>List</label>
        <input type="text" name="list" class="form-control" 
              value="<?php echo $list; ?>" placeholder="Enter your list">
        </div>
        <div class="form-group">
        <?php
        if ($update == true):
        ?>
            <button type="submit" class="btn btn-info" name="update">Update</button>
            <?php else: ?>
           <button type="submit" class="btn btn-primary" name="save">Save</button>
           <?php endif; ?>
        
        </div>
     </form>  
     </div> 
    </div>
    </div>
    
</body>

</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
     integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <title>Number Calculation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
<?php
    
    if ($_POST) {
       $number1 = $_POST['number1'];
       $number2 = $_POST['number2'];

       $errors = [];

       if ($number1 == "") {
          $errors[] = "Enter The Number 1";
       }
       if ($number2 == "") {
          $errors[] = "Enter The Number 2";
       }
       if (!$errors) {
           $total = $number1-$number2;
       }
    }



?>


    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header text-center bg-info" style="color: white;font-weight: bold;">
                        Math of Two Numbers
                      </div>

                      <div class="card-body">

                        <div class="text-right">
                            <a href="index.php" class="btn btn-sm btn-info">+</a>
                            <a href="minus.php" class="btn btn-sm btn-danger">-</a>
                            <a href="multification.php" class="btn btn-sm btn-success">*</a>
                            <a href="division.php" class="btn btn-sm btn-warning">/</a>
                        </div>

                        <?php 
                            if(isset($errors)){
                                foreach ($errors as $error) {
                                    ?>
                             <div class="alert alert-danger" role="alert">
                                 <?= $error ?>    
                             </div>    
                             <?php   
                                }
                            }
                        ?>

                       <form action="#" method="POST">
                         <div class="form-group">
                            <label for="Total">
                                <?php 
                                  if (isset($total)) {
                                    ?>
                                    <h3>Total :<?= $total ?></h3>
                                  <?php
                                  }
                                 ?>
                            </label>
                          </div>
                          <div class="form-group">
                            <label for="number1">Number 1</label>
                            <input type="text" class="form-control" id="number1" name="number1" value="<?php echo(isset($number1))? $number1 : "" ?>">
                          </div>
                          <div class="form-group">
                            <label for="number2">Number 2</label>
                            <input type="text" class="form-control" id="number2" name="number2" value="<?php echo(isset($number2))? $number2 : "" ?>">
                          </div>
                          <button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

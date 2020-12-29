<?php
    include_once('db.php');

if(isset($_POST['generate'])) {
    $username = $_POST['username'];
    $username = htmlspecialchars(strip_tags($username));

    $email = $_POST['email'];
    $email = htmlspecialchars(strip_tags($email));

    $event = $_POST['event'];
    $event = htmlspecialchars(strip_tags($event));
    
    $sql = "SELECT * from certi where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if($count == 1 ) {
        $name = $row['name'];
        header("location: generate.php?name=$name");
    } else {
        $errorMsg = ' You are not eligible for this certification.';
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="./assets/img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href='./assets/css/style.css' />
    <title>techSRIJAN | Generate E-Certificate</title>
  </head>
  <body>
        <div class="container">
            <h1 class="text-center mt-5"> 
            <img src="./assets/img/favicon.png" class='img-fluid logo' width='60' alt="">
                <span class="border-bottom border-danger title">
                    Generate E-Certificate
                </span>
            </h1>
            <div class="row mt-5 text-dark">
                <!-- Grid column -->
                <div class="col-md-6 offset-md-3 mb-4">
                    <?php if(isset($errorMsg)) echo "<div class='alert alert-danger text-center'>$errorMsg</div>" ?>
                    <div class="card">
                        <div class="card-body">
                            <!-- Form register -->
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" name='username' required id="username" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Your email *</label>
                                    <input type="email" name='email' required id="email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="event">Event *</label>
                                    <select class="form-control" name='event' id="event">
                                    <option>Carreer Counselling</option>
                                    <option>Carreer Counselling-2</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type='submit' name='generate' class="btn btn-warning">Generate</button>
                                </div>
                            </form>
                            <!-- Form register -->
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
        </div>

        <footer class='fixed-bottom'>
            <div class='bg-dark text-white text-center py-2'>techSRIJAN&copy; 2021 | Created with &hearts; by <a href="https://github.com/cypher-adi"  target='_blank'>Aditya</a> </div>
        </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
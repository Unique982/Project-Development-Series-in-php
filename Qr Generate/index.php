<?php
if(isset($_POST['qrgenerate'])){
    $username = $_POST['username'];
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $webname = $_POST['webname'];
    $url = $_POST['url'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Qr Generate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        font-size: 18px;
    }
    body{
      height: 90vh;
     
    }
   
  </style>
  
</head>
  <body>
    <div class="container">
        <div class="row  jumbotron">
            <div class="col-md-8 mx-auto">
            <div class="header">
            <h1 style="text-align:center; font-size:30px; font-weight:bold; color:black;">Qr Generate</h1> 
            </div>
            <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                        <label for="">User Name</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">First Name:</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Last Name:</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Website Name</label>
                        <input type="text" name="webname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Url</label>
                        <input type="url" name="url" class="form-control">
                    </div>
                   <button class="btn btn-dark w-100" type="submit" name="qrgenerate">Qr Generate</button>
                </form>
                </div>
                <?php
                
                include './phpqrcode/qrlib.php';
$PNG_TMEP_DIR ='temp/';
if(!file_exists($PNG_TMEP_DIR)){
    mkdir(($PNG_TMEP_DIR));
}
    $filename = $PNG_TMEP_DIR .'QR.png';
    if(isset($_POST['qrgenerate'])){
  $codeString = $_POST['username']. "\n";
  $codeString .= $_POST['firstname']. "\n";
  $codeString .= $_POST['lastname']. "\n";
  $codeString .= $_POST['email']. "\n";
  $codeString .= $_POST['webname']. "\n";
  $codeString .= $_POST['url']. "\n";
  $filename = $PNG_TMEP_DIR.'QR';
  md5($codeString) .".png";
  Qrcode::png($codeString,$filename);
  echo "<img src='". $PNG_TMEP_DIR . basename($filename) ."'><hr>";
    }

                ?>
              </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
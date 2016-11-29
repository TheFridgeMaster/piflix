
<?php
$form = ($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $data = array('-s ' . $form["ssid"], ' -p ' . $form["wpa2"], ' -ip ' . $form["vpnaddr"], ' -u ' . $form["vpnuser"], ' -pw ' . $form["vpnpass"]);

  $pythonScript = "/var/www/scripts/wrconf.py";
  $cmd = array("python", $pythonScript, implode($data));
  $cmdText = implode(' ', $cmd);

  echo "Running command: " . $cmdText . "\n";
  $result = shell_exec($cmdText);
}
?>
<!DOCTYPE html>
<html lang="en" class="html">
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="piflix/dist/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color:rgba(0,0,0,0)">
    <style>
    .container{
      text-align: center;
      margin-top: 130px;
      margin-left: center;
      margin-right: center;
    }
    .html {
      webkit-background-size: cover;
      moz-background-size: cover;
      background-size: cover;
      background-size: cover;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.40) 0%), url(image.jpg) center no-repeat;
      background-size: cover;
      background-color:rgba(0,0,0,0) !important;
      border:none !important;
    }
    .logo {
      flex-direction: column;
      justify-content: center;
    }
    </style>
    <div class="container" style="background-color:rgba(0,0,0,0)">
      <div class="col-xs-12 col-md-4">
        <img src="piflix.png" class="img-responsive pull-right" width="400" style="margin-top:50%;" />
      </div>
    <div class="col-xs-12 col-md-4">
    <form action="" method="post">
      <div class="row" >
        <div align="center" class="form-group col-xs-12">
          <label for="ssid" style="color: white;">SSID</label>
          <input type="text" class="form-control" id="ssid" name="ssid">
        </div>
      </div>
        <br>
        <div class="row">
        <div align="center" class="form-group col-xs-12">
          <label for="wpa2" style="color: white;">Wireless Password:</label>
          <input type="password" class="form-control" id="wpa2" name="wpa2">
        </div>
      </div>
        <br>
        <div class="row">
        <div align="center" class="form-group col-xs-12">
          <label for="vpnaddr" style="color: white;">VPN IP Address:</label>
          <input type="text" class="form-control" id="vpnaddr" name="vpnaddr">
        </div>
      </div>
        <br>
        <div class="row">
        <div align="center" class="form-group col-xs-12">
          <label for="vpnuser" style="color: white;">VPN Username:</label>
          <input type="text" class="form-control" id="vpnuser" name="vpnuser">
        </div>
      </div>
        <br>
        <div class="row">
        <div align="center" class="form-group col-xs-12">
          <label for="vpnpass" style="color: white;">VPN Password:</label>
          <input type="password" class="form-control" id="vpnpass" name="vpnpass">
        </div>
      </div>
        <br>
        <div class="row">
        <div align="center" class="form-group col-xs-12">
          <button type="submit" name="submit" class="form-control" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
    <div class="col-xs-12 col-md-4">
    <!-- spare column :D-->
    </div>
  </div>
  </div>
  </body>
</html>

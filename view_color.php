<?php
include_once ROOT.'/controllers/samsungController.php';
//var_dump($resultOfall);
$json = json_encode($resultOfall);
// var_dump($json);?>

<div class="full">
    <h3>Samsung 12</h3>
    <p style=" margin-bottom:0px;width: 122px; float: left">Голубой</p>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar"
             aria-valuemin="0" aria-valuemax="100" style="width: 20%">
            20%
        </div>
    </div>
</div>
<script>
    function myFunc(Procent,PortName,color) {
        var full = document.createElement("div").classList.add('full');
        var h3 = document.createElement("h3");
        var name_port = document.createTextNode(color);
        h3.appendChild(name_port);
        var bar = document.createElement("div");
        var color = document.createElement("P");
        color.style.marginBottom = 0px;
        color.style.width = 122px;
        color.style.float = left;
        var port = document.createTextNode(PortName);
        color.appendChild(port);
        bar.setAttribute("aria-valuemin", "0");
        bar.setAttribute("aria-valuemax", "100");
        bar.style.width = Procent;
        document.getElementById("slider").appendChild(para);
    }
</script>


<script>
var json = '{$json}';
var obj = JSON.parse(json);
    for (i = 0; i <= obj.length; i++) {
         $.each(obj[i], function( index, value ) {
              if(index == 'black_toner'){
                 myFunc(value);
              }
              if(index == 'name'){
                  myFunc(value);
              }
              if(index == 'color'){
                  myFunc(value);
              }
            });
    }
</script>;




<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <title>Sick slider</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
 
    <link rel="stylesheet" href="css/bootstrap.min.css">

    
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>
<body>

<main class="content">
    <div class="wrapper">
        <div class="slider">
            <div class="full">
              <h3>Samsung 12</h3>
                    <p style=" margin-bottom:0px;width: 122px; float: left">Голубой</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            20%
                        </div>
                    </div>
                </div>
            </div>

            <div class="arrow"></div>
        </div>
</main>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate.min.js" ></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/custom.js" ></script>
</body>
</html>

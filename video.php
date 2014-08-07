<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap video player</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/video-default.css" rel="stylesheet">
        <style>
            body{padding-top: 10px}
        </style>
    </head>
    <body>
    <div class="videoUiWrapper thumbnail">
  <video width="540" height="420" id="demo1">
    <source src="videos/Manhattan.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>
        <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.video-ui.js"></script>
        <script type="text/javascript" >
            $('#demo1').videoUI({'autoplay' : true, 
            	'playMedia' : true,
            	'autohide' : false,
            });
        </script>
    </body>
</html>
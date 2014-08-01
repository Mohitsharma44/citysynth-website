<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <title>Parallax page</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

  <style type="text/css">
    html,body{
      margin:0px;
      padding:0;
      height:160%;
    }
    section{
      display: block;
      padding:0px;
      height:100%;
    }
    ul {
      margin:0px;
      padding:0px;
      height:100%;
    }
    ul li{
      list-style:none;
      overflow:hidden;
      height:50%;
    } 
    body nav {
      position:fixed;
      z-index:1;
    }


    body nav a {
      display: block;
      text-decoration:none;
      font-size: 15px;
      font-weight:bold;
      color: #000;
      background-color: rgba(255,128,0,0.35);
      text-align: center;
      margin: 3px;
      padding: 10px;
      z-index:1;
    }

    .parallax-background {
      height:100%;

    }
    .map #map-canvas{
      height:100%;
    }
  }
  .firstpage{
    height:100%;

  }

</style>

<?php
$thumb_directory =  "gallery/thumb/";    //Thumbnail folder
$orig_directory = "gallery/images/";    //Full image folder

/* Opening the thumbnail directory and looping through all the thumbs: */
$dir_handle = @opendir($orig_directory); //Open Full image directory
if ($dir_handle > 1)
    { //Check to make sure the folder opened

      $allowed_types=array('jpg','jpeg','gif','png');
      $file_parts=array();
      $ext='';
      $title='';
      $i=0;

      while ($file = @readdir($dir_handle))
      {
        /* Skipping the system files: */
        if($file=='.' || $file == '..') continue;

        $file_parts = explode('.',$file);    
//This gets the file name of the images
        $ext = strtolower(array_pop($file_parts));

        /* Using the file name (withouth the extension) as a image title: */
        $title = implode('.',$file_parts);
        $title = htmlspecialchars($title);

        /* If the file extension is allowed: */
        if(in_array($ext,$allowed_types))
        {

          /* If you would like to inpute images into a database, do your mysql query here */

          /* The code past here is the code at the start of the tutorial */
          /* Outputting each image: */

          $nw = 150;
          $nh = 100;
          $source = "gallery/images/{$file}";
          $stype = explode(".", $source);
          $stype = $stype[count($stype)-1];
          $dest = "gallery/thumb/{$file}";

          $size = getimagesize($source);
          $w = $size[0];
          $h = $size[1];

          switch($stype) {
            case 'gif':
            $simg = imagecreatefromgif($source);
            break;
            case 'jpg':
            $simg = imagecreatefromjpeg($source);
            break;
            case 'png':
            $simg = imagecreatefrompng($source);
            break;
          }

          $dimg = imagecreatetruecolor($nw, $nh);
          $wm = $w/$nw;
          $hm = $h/$nh;
          $h_height = $nh/2;
          $w_height = $nw/2;

          if($w> $h) {
            $adjusted_width = $w / $hm;
            $half_width = $adjusted_width / 2;
            $int_width = $half_width - $w_height;
            imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
          } elseif(($w <$h) || ($w == $h)) {
            $adjusted_height = $h / $wm;
            $half_height = $adjusted_height / 2;
            $int_height = $half_height - $h_height;

            imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
          } else {
            imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
          }
          imagejpeg($dimg,$dest,100);
        }
      }
    }

    /* Closing the directory */
    @closedir($dir_handle);

    $file =file_get_contents("location.txt");
    $all_coordinates = array();
    $all_coordinates = explode("\n",$file);
    $latlon_numbers = count($all_coordinates);

    ?>



    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY9j5GM-50W60pw0LtmT_ew75lTSMuoAg&sensor=true">

  </script>

  <script type="text/javascript">
    function initialize() {
     var lat= <?php echo json_encode($all_coordinates[0]);?>;
     var lon= <?php echo json_encode($all_coordinates[1]);?>;
     var latlng= new google.maps.LatLng(lat,lon);
     var markers =<?php echo json_encode($all_coordinates);?>;
     var markers_length=<?php echo json_encode($latlon_numbers);?>;

     var mapOptions = {
      zoom: 14,
      scrollwheel: false,
      center: latlng,
      mapTypeControl: true,
      mapTypeControlOptions: {

        position: google.maps.ControlPosition.TOP_CENTER
      },
      zoomControl: true,
      zoomControlOptions: {

        position: google.maps.ControlPosition.RIGHT_TOP
      },
      scaleControl: true,
      streetViewControl: true,
      streetViewControlOptions: {
        position: google.maps.ControlPosition.RIGHT_TOP
      },
      panControl: false,

      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    var marker = new google.maps.Marker({
      map:map,
      draggable:false,
      animation: google.maps.Animation.DROP,
      position: latlng
    }); 


    var infowindow = new google.maps.InfoWindow({
     content: 'YESSSSS!!!!'
   });


    google.maps.event.addListener(marker, 'click', function () {
      infowindow.open(map, marker);
    });


    var i;
    for(i=1;i<markers_length;i=i+2)
    {
      addMarker(markers[i-1],markers[i]);
    }
    



    function addMarker(lat,lon)
    {
      var ip_latlng =new google.maps.LatLng(lat,lon); 
      var marker = new google.maps.Marker({
        map:map,
        draggable:false,
        animation: google.maps.Animation.DROP,
        position: ip_latlng
      }); 

      
      var infowindow = new google.maps.InfoWindow({
       content: 'document.write('<iframe src="http://www.mywebsite.com/1.html"></iframe>');'
     });


      google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
      });

    }
  }

// Call initialize -- in prod, add this to window.onload or some other DOM ready alternative
google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body>
  <ul class="parallax">

    <li>
      <section id="two">
        <div class="parallax-background map container-fluid" id="two">
          <div id="map-canvas"></div>
        </div>
      </section>  
    </li>

  </ul>
</body>
</html>

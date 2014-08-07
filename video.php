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
        <div class="container">
            <div class="hero-unit">
                <h1>Bootstrap video player</h1>
                <p>A customizable HTML5 video player plugin for jQuery based on bootstrap UI</p>
                <p>
                    <small>Current version: 1.0<br/>
                        Tested in: jQuery 1.6+ in Firefox, Safari, Chrome, Internet Explorer 9, Opera 11.
                    </small>
                </p>
            </div>
            <div class="row">
                <div class="span7">
                    <h2>Getting started </h2>
                    <h3>files to includes</h3>
                     <div class="row">
                    <code class="pull-left span6">
                        &lt;link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"&gt;<br/>
                        &lt;link href="assets/css/video-default.css" rel="stylesheet"&gt;<br/>
                        &lt;script type="text/javascript" src="assets/js/jquery-1.8.1.min.js"&gt;&lt;/script&gt;<br/>
                        &lt;script type="text/javascript" src="assets/js/jquery.video-ui.js"&gt;&lt;/script&gt;<br/>
                    </code>
                     </div>
                    <h3>HTML markup structure</h3>
                    <div class="row">
                        <code class="pull-left span6">

                            &lt;div class="videoUiWrapper thumbnail"&gt;<br/>
                            &nbsp;&nbsp;&lt;video width="370" height="214"  id="demo1"&gt;<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;source src="pathtovideo/video.ogv" type="video/ogg"&gt; <br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;source src="pathtovideo/video.mp4" type="video/mp4"&gt;<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;Your browser does not support the video tag.<br/>
                            &nbsp;&nbsp;&lt;/video&gt;<br/>
                            &lt;/div&gt;
                        </code>
                    </div>
                    <h3>Default setup Bootstrap video player</h3>
                    <div class="row">
                        <code class="pull-left span6">
                            $('#demo1').videoUI();
                        </code>
                    </div>
                    <h3>Setup with some option</h3>
                    <div class="row">
                        <code class="pull-left span6">
                            $('#demo1').videoUI({<br/>
                            &nbsp;&nbsp;'autoHide':false,<br/>
                            &nbsp;&nbsp;'volumeMedia': 1<br/>
                            });
                        </code>
                    </div>
                </div>
                <div class="span5">
                    <h2>Default setup demo</h2>
                    <div class="videoUiWrapper thumbnail">
                        <video width="370" height="214"  id="demo1">
                            <source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720.ogv" type="video/ogg"> 
                            <source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720_512kb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.video-ui.js"></script>
        <script type="text/javascript" >
            $('#demo1').videoUI();
        </script>
    </body>
</html>
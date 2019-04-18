
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<title>document</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html"><p class="logo"> Battle<span>Bot</span></p></a>
        </div>
    </header>
    <div class="banner"></div>
    <div class="blue_header">
        <h2 class="container">Scoreboard</h2>
        
    </div>
    
    <div class="table">

        <?php include("table.php");?>
 </div>
    <div class="container feature-1 clearfix">
        <a href="buttons.html"><img src="img/arrows-main.png" alt="A picture with buttons"></a>
        <div class="manual">
            <h3>Manual movement</h3>
            <span class="orange_line"></span>
            <p>This page allows users to interact with the arduino and manually control it.
            </p>
            <p>Pressing on this image will lead you to the manual controls page.</p>
        </div>
        
        
    </div>
    <div class="grey-wrapper">
    <div class="container feature-2 clearfix">
        <a href="camera.html"><img src="img/camera-main.png" alt="A picture with a camera"></a>
        <div class="camera">
            <h3>Live camera</h3>
            <span class="orange_line"></span>
            <p>This page allows users to view a live broadcast of a camera setup inside NHL Stenden.
                Also the camera can be manually moved and setup.
            </p>
            <p>Pressing on this image will lead you to the camera live controls page.</p>
        </div>
        </div>
        <footer>
            <p>Stenden battle bot 2019</p>
        </footer>
        
    </div>
    
    
</body>
</html>
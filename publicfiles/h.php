
<!DOCTYPE html>
<html lang="en">
    <!-- divinectorweb.com -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website Design using HTML CSS</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>



<style>

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Montserrat', sans-serif;
}
header {
	height: 100vh;
	position: relative;
}
.vid-bg {
	position: absolute;
	right: 0;
	bottom: 0;
	min-width: 100%;
	min-height: 100%;
}
.nav-area {
	height: 60px;
	position: absolute;
	width: 100%;
}
.logo {
	margin: 10px 50px;
	height: 60px;
	float: left;
	color: #fff;
	font-size: 35px;
	text-transform: capitalize;
}
.menu-area {
	float: right;
	list-style: none;
	margin: 20px;
}
.menu-area li {
	display: inline-block;
	margin: 0 5px;
}
.menu-area li a {
	text-decoration: none;
	color: #fff;
	padding: 5px 10px;
	letter-spacing: 2px;
	font-weight: 700;
}
.menu-area li a:hover {
	color: deepskyblue;
}
header .welcome-text {
	position: absolute;
	width: 100%;
	text-align: center;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.welcome-text h2 {
	color: #fff;
	font-size: 80px;
	margin: 0;
	font-family: 'Bebas Neue', sans-serif;
	-webkit-text-fill-color: transparent;
	-webkit-text-stroke: 2px #fff;
}
.welcome-text p {
	color: #fff;
	font-size: 18px;
	width: 45%;
	line-height: 1.8;
	margin: auto;
}
.btn {
	background: transparent;
	border: none;
	color: #fff;
	padding: 10px 30px;
	font-size: 15px;
	text-transform: uppercase;
	border-radius: 25px;
	display: inline-block;
	margin-top: 25px;
	border: 2px solid #fff;
	transition: background .6s ease-in;
}
.btn:hover {
	background: #fff;
	color: #000;
}
/*responsive*/

@media (min-width: 767px) and (max-width: 991px) {
	.welcome-text p {
		width: 95%;
	}
}
@media (max-width: 767px) {
	.logo {
		float: none;
		text-align: center;
        margin: 5px 0;
		font-size: 23px;
		height: 45px;
		line-height: 45px;
	}
	.menu-area {
		float: none;
		text-align: center;
		margin: 0;
	}
	.menu-area li {
		margin: 0;
	}
	.menu-area li a {
		padding: 5px 2px;
		font-size: 12px;
	}
	
	.nav-area {
		height: 90px;
	}
	.welcome-text h2 {
		font-size: 30px;
		margin-bottom: 18px;
		-webkit-text-stroke: 1px #fff;
	}
	.welcome-text p {
		width: 90%;
		font-size: 14px;
		line-height: 1.5;
	}
}

</style>
<body>
    <header>
        <video src="../upload_vid/box_holo_vid2.mp4" class="vid-bg" autoplay loop muted></video> 

        <div class="nav-area">
            <div class="logo">HOLO.FUTURE</div>

            <ul class="menu-area">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="welcome-text">
            <h2>Artificial Inteligence</h2>
            <p>Witness your content like never before. The Holobox transforms ordinary images into extraordinary 3D displays, creating an immersive and enchanting experience.</p>
            <button class="btn" ><a href="../publicfiles/box_holo.php">READ</a></button>
        </div>
    </header> 
    <section>
    <header>
        <video src="../upload_vid/human_holo.mp4" class="vid-bg" autoplay loop muted></video> 

        <div class="nav-area">
            <div class="logo">HOLO.FUTURE</div>

        </div>

        <div class="welcome-text">
            <h2> LIFE IMAGE </h2>
            <p> Immersive Experiences: Dive into a realm of immersive experiences with our cutting-edge holographic technology. Witness vivid and lifelike images that defy the boundaries of conventional visual storytelling.</p>
            <button class="btn">cccc</button>
        </div>
    </header>  
    </section> 
</body>
</html>

<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <?php 

  $id = $_POST["id"];
  $user=$_SESSION['user_name'];

$query = query("INSERT INTO likes(user_id,post_id,status) VALUES( '$user','$id',now())");
confirm($query);
if($query){
    echo"empty comment ";

    $con=query("UPDATE vid SET likes =likes+1 WHERE id='$id' ");
    confirm($con);


}

?>
<style>

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	background-color: #222;
	font-family: 'Poppins', sans-serif;
	text-align: center;
}
.wrapper {
	padding: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}
.box-area {
	width: 350px;
	margin: 25px;
	padding: 40px;
	background-color: #222;
	color: #fff;
	box-shadow: inset -2px -2px 5px rgba(0,0,0,0.5),
				inset 3px 3px 5px rgba(255,255,255,.07);
	transition: all 0.6s ease-in-out;
}
.box-area .icon-area {
	width: 100%;
	margin-bottom: 40px;
}
.icon-area i {
	font-size: 70px;
	color: #fff;
	transition: all .9s ease-in-out;
	text-shadow: 0 0 10px rgba(33,156,243,1),
	0 0 10px rgba(33,156,243,1);
}
.box-area h6 {
	margin-bottom: 10px;
	color: #fff;
	font-size: 30px;
	font-family: meddon;
	text-transform: capitalize;
	transition: all .9s ease-in-out;
}
.box-area:hover {
	background-color: #161619;
	transform: scale(1.15);
}
.box-area:hover i{
	transform: rotate(360deg);
	text-shadow: 0 0 10px rgba(233,85,99,1),
	0 0 10px rgba(233,85,99,1);
}
.box-area:hover h6{
	color: #fff;
	text-shadow: 0 0 10px rgba(233,85,99,1),
	0 0 10px rgba(233,85,99,1);
}

@media (max-width: 767px){
	.box-area:hover {
		transform: scale(1);
	}
}
</style>




<html lang="en">
 <!-- divinectorweb.com -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Services Section Design using HTML and CSS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div class="wrapper">
      <div class="box-area">
        <div class="icon-area">
          <i class="lni lni-keyboard"></i>
        </div>
        <h6>Coding</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
      </div>

      <div class="box-area">
        <div class="icon-area">
          <i class="lni lni-layers"></i>
        </div>
        <h6>designing</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
      </div>
      
      <div class="box-area">
      <div class="icon-area">
    <i class="lni lni-user"></i>
</div>

        <h6>Photography</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
      </div>
    </div>
    
  </body>
 </html>



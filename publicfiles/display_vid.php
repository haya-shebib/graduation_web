<?php require_once("../resources/confiq.php")?>

<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<section>
<?php 

if (isset($_POST['view'])) {
redirect("admin");
}
?>

<div class="row">

<h1 class="page-header"> DISPLAYS USERS  FEEDBACKS </h1>
<h3 class="bg-success"><?php  display_m(); ?></h3>
<table class="table table-hover">
    <tbody>
  </div>
      <div class="col-md-6">
          <div class="alb">
              <div id="load_data"> </div>  
          </div>  
    
</div>  



</section>



<!-- to display the video with title  -->
<script type="text/javascript">
    $(document).ready(function(){
        load_data();
        // alert("done");
        function load_data(){
            $.ajax({
                url:"load_data.php",
                method:"POST",
                success:function(data){
                    $("#load_data").html(data);

                }
            });
        }
    });
 // display comment 
    $(document).on('click', ".send",function(event){
      event.preventDefault();
      function load_data(){
            $.ajax({
                url:"load_data.php",
                method:"POST",
                success:function(data){
                    $("#load_data").html(data);

                }
            });
        }

      var comment =$("#comment").val();
      var id =$(this).attr("id");
      alert("done");

      $.ajax({
        url:"test.php",
        method:"POST",
        data:{comment:comment,id:id},
        success:function(data){
          $("#comment").val("");
          load_data();
        }
      });

    }); 



    
    
// view the comment 
    $(document).on('click', ".view",function(){

      
      $("#view_comment").toggle();
        var id = $(this).attr("id");


        // function load_data(){
            $.ajax({
                url:"load_comment.php",
                method:"POST",
                data:{id:id},
                success:function(data){   
                  $(".comment_data").html(data);
                }
            });
        
        });
        
      

        // $(document).on('click', ".view_li",function(){
        //   $("#view_like").toggle();
        //     var id = $(this).attr("id");

        //     $.ajax({
        //         url:"show_lik.php",
        //         method:"POST",
        //         data:{id:id},
        //         success:function(data){
        //           $(".like_data").html(data);
        //           // alert("done");
        //         }
        //     });
        
        // });

// for like bttom 
 $(document).on('click', ".like",function(){

  function load_data(){
            $.ajax({
                url:"load_data.php",
                method:"POST",
                success:function(data){
                    $("#load_data").html(data);


                }
            });
          }
var id = $(this).attr("id");

$.ajax({

  url:"like.php",
  method:"POST",
  data:{id:id},
  success:function(data){
    // $("#comment_data").html(data);
    load_data();

  }
});
});


// for unlike  bttom
  
$(document).on('click', ".unlike",function(){
  function load_data(){
            $.ajax({
                url:"load_data.php",
                method:"POST",
                success:function(data){
                    $("#load_data").html(data);
                }
            });
          }

// $("#view_comment").toggle();
var id = $(this).attr("id");

$.ajax({
  url:"unlike.php",
  method:"POST",
  data:{id:id},
  success:function(data){
    // $("#comment_data").html(data);
    load_data();

  }
});
});

  
</script>

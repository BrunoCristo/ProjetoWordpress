<!DOCTYPE html>
<html>
<head>
	<title>Walter seu lindo</title>
	<link rel="stylesheet" href="styles.css">
  <?php
      $dir = get_template_directory_uri() . '/ni.jpg';
  ?>
  <style>
      body {
          background-image: url(<?php echo $dir?>);
          background-size: cover;
      }

      div::before {
          content: "   ";
          font: 10pt Courier;
          font-weight: bold;
          color: white;
          background-color: black;
          padding: 5px;
          display: block;
          position: relative;
          top: -10px;
          left: -10px;
          width: 560px;
      }

    div {
          background-color: rgba(255,255,255,.8);
          margin: 100px auto 100px auto;
          padding: 10px;
          width: 550px;
          min-height:300px;
    }

    /*Menu*/
    * {
        -webkit-transition-property: all;
        -webkit-transition-duration: .2s;
        -moz-transition-timing-function: cubic-bezier(100,50,21,6);
        -moz-transition-property: all;
        -moz-transition-timing-function: cubic-bezier(100,50,21,6);
    }

    body{
      
      padding:75px;
      text-align:center;
      font-family: 'Oswald', sans-serif;
    }

    h1{
      color:#c0c0c0;
      font-weight:100;
    }

    .btn{
      color: white;
      background:rgba(0, 0, 0, 0.5);
      padding:10px 20px;
      font-size:12px;
      text-decoration:none;
      letter-spacing:2px;
      text-transform:uppercase;
    }

    .btn:hover{
      border:none;
      background:rgba(0, 0, 0, 0.4);
      background: black;
      padding:20px 20px; #000;
      color: white;
    }

    .footer{
      font-size:8px;
      color:white;
      clear:both;
      display:block;
      letter-spacing:5px;
      border:1px solid #fff;
      padding:5px;
      text-decoration:none;
      width:210px;
      margin:auto;
      margin-top:400px;
    }

    footer{
      color: white;
      background-color: black;
      padding: 5px;
      display: block;
      position: relative;
      top: -10px;
      left: -10px;
      width: 560px;
      margin: 100px auto 100px auto;
      padding: 10px;
      min-height:300px;

    }
        

  </style>
  </head>
<body>


  <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

   
    <a href="#" class="btn">Um</a>
    <a href="#" class="btn">Lindo</a>
    <a href="#" class="btn">Menu</a>
    <a href="#" class="btn">Sem</a>
    <a href="#" class="btn">Utilidade</a>


   
   
  <?php
     if(have_posts()){
         while (have_posts()){
         	   the_post();
         	   ?>
            <div>
                <?php the_title(); ?>
           	    <?php the_content(); ?>
           	</div>
        <?php
      	   $comments = get_comments(array(
              'post_id' => $postid,
              'status' => 'approve' //Change this to the type of comments to be displayed
             ));
          
         }

     }    
  ?>
  <?php comment_form(); ?>


  <iframe src="https://embed.spotify.com/?uri=spotify:user:thaysestein:playlist:6RypTN5BvLBKR83A5IndKs" height="400" width="600" frameborder="0"></iframe>



</body>
<footer id="rodape">
        <p>Copyright &copy; 2018 - by Bruno Henrique Cristofolini </p>
</footer>
</html>
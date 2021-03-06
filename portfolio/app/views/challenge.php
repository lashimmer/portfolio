<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Design</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.let_it_snow.js"></script>

        <link href="./css/challenge.css" rel="stylesheet">
        <link rel="icon" 
              type="image/png" 
              href="./img/logo_square.png">

    </head>

    <body>

      <div class="parallax">
        <div class="back">
          <div class="mountains">
            <div class="layer">
              <div class="m"></div>   
              <div class="m"></div>            
            </div>
            <div class="layer">
              <div class="m"></div>   
              <div class="m"></div> 
            </div>
            <div class="layer"></div>
            
            <div class="logo-top"></div>

          </div>

        </div>

        <canvas class="snow"></canvas>

        <div class="base">
            <div class="content">

              <div class="tree"></div>  
              <div class="tree"></div>  
              <div class="tree"></div>  
              <div class="tree"></div>  

            <div class="intro">
              <h1>Design Challenge</h1>
              This is where I'm going to upload my random designs, drawings, and doodles.
            </div>
          </div>
        </div>
      </div>









    <a href="/"><div class="logo"></div></a>

    </body>

   
    <script type="text/javascript">
    $(document).ready( function() {
      $("canvas.snow").let_it_snow();
      $('.parallax').scroll(function() {
        var height = $('.parallax').scrollTop();

        if(height  > 180) {
            $('.logo').addClass("vis");
        }
        else {
            $('.logo').removeClass("vis");
        }
    });


    });
    
    </script>
   </html>
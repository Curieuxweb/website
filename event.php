<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fliptext.css">
    <link rel="stylesheet" type="text/css" href="fadein.css">
    <link rel="stylesheet" type="text/css" href="imgmosaicstyle.css">

<link rel="shortcut icon" href="images/assets/favicon.ico" />   

    <title>Curieux - Events</title>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
        //$("myModal").attr("width","500");
    });

</script>


    <style>   
        audio::-webkit-media-controls-timeline,
        video::-webkit-media-controls-timeline {
            display: none;
        }



        div.gallery {
          border: 1px solid #ccc;
        }

        div.gallery:hover {
          border: 1px solid #777;
        }

        div.gallery img {
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 15px;
          text-align: center;
        }

        /*
        *{
          box-sizing: border-box;
        }*/

        .responsive {
          padding: 0 6px;
          float: left;
          width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
          .responsive {
            width: 49.99999%;
            margin: 6px 0;
          }
        }

        @media only screen and (max-width: 500px) {
          .responsive {
            width: 100%;
          }
        }

        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        </style>


  </head>
  <body background="images/misc/backg4b.JPG">

    
<!--

                UNCOMMENT THIS SECTION TO GIVE AN ON-LOAD PROMPT FOR A NEW UPCOMING EVENT 


 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register now for our upcoming event!</h5>
      
        </button>
      </div>
      <div class="modal-body">
        <h1> Hack-n-Slash</h1>
        An Ethical Hacking workshop where you'll get to learn a whole lot of interesting stuff like Live website hacking, Hacking Windows/Linux systems, Reporting a bug and much more!<br>
        Register yourself now at the link given below<br>
        <a href="https://linktr.ee/curieux.sgtbkhalsa"> Registration link</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary closemdl" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

-->

    <!-- HEAD IMAGE -->
    <div class="headimage">
     <img  id="ppc" src="images/misc/eventspic.jpg">
    </div>
    <!-- HEAD TEXT -->
    <div id="toptext">
        <h1 class="ml14">
            <span class="letters" id="tx1">Register now</span>
        </h1>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script type="text/javascript">
          // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml14 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
          .add({
            targets: '.ml14 .line',
            scaleX: [0,1],
            opacity: [0.5,1],
            easing: "easeInOutExpo",
            duration: 900
          }).add({
            targets: '.ml14 .letter',
            opacity: [0,1],
            translateX: [40,0],
            translateZ: 0,
            scaleX: [0.3, 1],
            easing: "easeOutExpo",
            duration: 800,
            offset: '-=600',
            delay: (el, i) => 150 + 25 * i
          });

        </script>




      <b><p id="tx1" style="margin-bottom: 4%;"> For All Our Upcoming Events</p></b>
      <!--<b><p id="tx1" style="margin-bottom: 4%;"> The Annual Phoenix Fest is Live</p></b>-->
      <b><a href="https://linktr.ee/curieux.sgtbkhalsa" ><span id="tx3" style="padding: 2%; background: white; color: #03191e;"> Click Here</span></b></a>
    </div>
    
<!-- HEAD IMAGE AND TEXT ENDS -->












<!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style="padding-left: 2vw; padding-right: 2vw;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="images/assets/logopic.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Curieux</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <div ><a class="nav-link " href="https://curieuxweb-d6714.web.app/#/curieux-web/homepage" target="_blank">Tech-Blog</a>
              </div> 
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="event.php">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faculty.php">Faculty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>


<!-- NAVBAR ENDS -->


 <p style="color: black;">
  <br>"
  </p>  

<!-- PHOENIX '22 TECHFEST-->

<center>

<p style="background:white; padding: 2%;">
<img src="images/assets/phoenixlogo.png" style="width:60vw;">

<br>
</p>
</center>

<div class="container">
  <div class="row" >
      
      <div class="col-xs-12 col-sm-12 col-lg-8" style="padding: 2%; margin-top: 10PX;background:white;" >
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
        
      </div>


     <div class="col-xs-12 col-sm-12 col-lg-3">
      
     <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/CbH2SnRhbwG/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/CbH2SnRhbwG/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/CbH2SnRhbwG/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by CurieuX (@curieux.sgtbkhalsa)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
      
    </div>
  </div>



</div>

<br><br><br>




<h2>Responsive Image Gallery</h2>

<h4>Resize the browser window to see the effect.</h4>


<div class="container">
  <div class="row">
    
    <div class="col-4">
      <div class="gallery">
    <a target="_blank" href="images/phoenix22/spectrum.png">
      <img src="images/phoenix22/sharknet.png" alt="Cinque Terre" width="600" height="400">
    </a>
    </div>

    </div>
    
    <div class="col-4">
      <div class="gallery">
    <a target="_blank" href="images/phoenix22/spectrum.png">
      <img src="images/phoenix22/sharknet.png" alt="Forest" width="600" height="400">
    </a>
    </div>

    </div>

    <div class="col-4">
       <div class="gallery">
    <a target="_blank" href="images/phoenix22/spectrum.png">
      <img src="images/phoenix22/sharknet.png" alt="Forest" width="600" height="400">
    </a>
     </div>

    </div>

    <div class="col-4">
       <div class="gallery">
    <a target="_blank" href="images/phoenix22/spectrum.png">
      <img src="images/phoenix22/sharknet.png" alt="Forest" width="600" height="400">
    </a>
    </div>

    </div>

  </div>
</div>

<!--
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/phoenix22/spectrum.png">
      <img src="images/phoenix22/sharknet.png" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/phoenix22/spectrum.png">
      <img src="images/phoenix22/sharknet.png" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/phoenix22/thunt.png">
      <img src="images/phoenix22/thunt.png" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/phoenix22/meme.png">
      <img src="images/phoenix22/meme.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>
-->
<br><br>

<!-- GAMING SECTION -->

<section style="background-image: url(images/misc/backg4b.jpg);">



<!-- VALEUREUX VIDEO LOOP -->
<div class="container">
  <div class="row loopvid">
    
    <div class="col-xs-12 col-sm-12 col-lg-12">
            <video controls loop autoplay style="width: 100%; height: auto;" muted>
                <source src="images/banners/gamingloop.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video> <!--video off for mobile view-->
    </div>
  </div>
  
  <div class="row" >

    <div class="col-xs-12 col-sm-12 col-lg-7 ytembed">
      
         <iframe src="https://www.youtube.com/embed/Yw2w1NqzkUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; height: 100%;"></iframe>

    </div>

    <!-- VALEUREUX -->

    <div class="col-xs-12 col-sm-12 col-lg-5" style="padding: 3%;  background: white;">
      <br>
      <b><span style=" color: #03191e; font-size: 24px; ">VALEUREUX TOURNAMENT</span>
      </b>
      <p style="color: grey;"> <br>
      
    <b>Date : 8<sup>th</sup> - 9<sup>th</sup> May 2021</b><br>
        An online gaming tournament hosted by the society based on the game <span style="color: black; "><b>Valorant,</b></span> one of the most popular games amongst Gen Z.<br> 
       The event saw a massive participation of 13 teams from colleges of Delhi University and other prominent universities. All the matches were live streamed on our youtube channel where immensely enthusiastic players battled for the ultimate Valeureux Cup and <b><span style="color: #f4b860; font-size: 18px;">Team YODHA E-SPORTS</span></b> emerged as the undefeated winners of the event followed by <span style="color: #f4b860; font-size: 18px;">Team Bakaet</span> as the Runner up team. The winning teams were awarded cash prizes worth 2k along with appreciation certificates. Checkout the event highlights on our instagram page <span style="color: black;">@curieux.sgtbkhalsa</span> now!   


      
      <br>
      
      </p>
    </div>
  </div>

  <BR><BR>

<!-- LANISTERS -->

  <div class="row" >

    
    <div class="col-xs-12 col-sm-12 col-lg-4 order-lg-second">
      
      <img src="images/banners/lanisters2.jpeg" class="img-fluid" style="display:block;
    margin:auto; border:2px solid #c1cfda;">

    </div>


    <div class="col-xs-12 col-sm-12 col-lg-8 order-lg-first" style="padding: 3%;  background: white;">
      <br>
      <b><span style=" color: #03191e; font-size: 24px; ">LANISTERS TOURNAMENT</span>
      </b>
       <p style="color: grey;"> <br>
      
        <b>Date : 27<sup>th</sup> - 28<sup>th</sup> Feburary 2020</b><br><br>
       Lanisters is a LAN gaming event which the society hosts as a part of its <br>Annual Tech-Fest PHOENIX. The event includes a number of competitive games like <span style="color: black; "><b>FPS - COUNTER STRIKE and FIFA Cup with prizes worth Rs 6k!</b> <br> Lanisters'20 saw a participation of 50+ gaming enthusiasts from 10+ institutions across Delhi who competed to prove their prowess in gaming arena. 


      
      <br>
      
      </p>
    </div>

  </div>
 <br>
 <div class="row" >
        
    <div class="col-xs-12 col-sm-12 col-lg-4 ">
      
      <img src="images/banners/codesc.jpg" class="img-fluid" style="display:block;
    margin:auto; border:2px solid #c1cfda;">

    </div>


    <div class="col-xs-12 col-sm-12 col-lg-8 " style="padding: 2%;  background: white;">
 
      <b><span style=" color: #03191e; font-size: 24px; ">Code Escape</span>
      </b>
       <p style="color: grey;"> 
      
        <b>Date : 24<sup>th</sup> October 2021</b><br><br>
        <span style="color: black; "><b>An Ultimate One-day Coding Championship</b></span> conducted by the society for all the coding enthusiasts where all the coders stuck to their laptop screens straight for<span style="color: black; "><b>  12 hours to decode</b> some of the trickiest problems based on Programming and Database Management Systems (DBMS).</span> What made the event more exciting were hints being posted as our instagram handle stories, which gave the event a treasure hunt touch. <br>The event saw participation from 80+ coders who competed fiercely towards winning <span style="color: black; "><b>prizes worth Rs 4k!</b> Code Escape was powered by prominent education firms like GeeksforGeeks, CodenLive, InterviewBuddy, FinalRevise and DUclub, which ultimately made it a grand success.</span>

      
      
      </p>
    </div>



  </div>
















</div>

</section>
<br><br>

<!-- GAMING SECTION ENDS -->












<!-- EVENTS SECTION -->
<div class="container">
  <div class="row" >


     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/oblivion.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">OBLIVION</span><br>
          A two-day Tech based article writing event. 
      </div>
      </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/memesk.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">MEME SKIRMISH</span><br>
          Online meme making event organised in collaboration with Memeons Society SGTBKC
      </div>
      </div>
    </div>

    
     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/Kryptos.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">KRYPTOS</span><br>
          Annual Treasure Hunt event organised under the Tech Fest PHOENIX
      </div>
      </div>
    </div>



  </div>
  <br>
    <div class="row" style="display: flex; justify-content: center;">


     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/logomaniacp.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">LOGO MANIA</span><br>
          Logo making and quiz event organised under the annual Tech Fest PHOENIX'20
      </div>
      </div>
    </div>

    
     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/confundocp2.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">CONFUNDO</span><br>
          Kryptic hunt event organised under the Tech Fest PHOENIX'19
      </div>
      </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/whizquizcp.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">WHIZ QUIZ</span><br>
          Technical Quiz event organised under the Tech Fest PHOENIX'19
      </div>
      </div>
    </div>

  
  </div>

</div>

<br>
 <!-- EVENTS SECTIONS ENDS -->















<!-- SEMINARS HEADER IMAGE -->
 <section class="home" style="background-image: url(images/misc/seminarpic.jpg);">
     <div class="container">
        <div class="row">
            <div class="home-text">
                 <h4>To Events that Inspire.</h4>
                 
            </div>
        </div>
     </div>
 </section>




<!-- SEMINARS SECTION BEGINS -->
<section style="background-image: url(images/misc/backg4a.jpg);">
<br><br>
 <h1 style="margin-left: 5%;">Seminars and Workshops</h1>
<div class="container">
  
  
  <!--GFG DSA -->
<div class="row"  class="bshadow" style="  padding: 1%;">

    <div class="col-xs-12 col-sm-12 col-lg-6 " style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
     <img src="images/banners/gfgweb.png" class="img-fluid bshadow" style="display:block;
    margin:auto;">
    </div>


    <div class="col-xs-12 col-sm-12 col-lg-6 " style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">DSA Webinar by GeeksForGeeks</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 25<sup>th</sup> November 2021</b></span><br>
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
    Curieux conducted a free workshop on Data Structures and Algorithms in collaboration with one of the most eminent computer science portals for geeks by geeks, GeeksforGeeks. Ms Kirti Gera, who is a DSA course mentor at GeeksforGeeks, shared her insightful journey and some very important tips to ace an interview. <BR>It sure did turn the workshop into an erudite conference giving all the participants an eye opening experience.
      </p> 
    </div>

  </div>
  
  <!--WEBD -->
  <div class="row"  class="bshadow" style="  padding: 1%;">

     <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-second" style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
      
      <img src="images/banners/webd.jpg" class="img-fluid bshadow" style="display:block;
    margin:auto;">

    </div>

    <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-first" style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br><BR>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">Webinar on Web-Development</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 22<sup>nd</sup> June 2021</b></span><br>
       
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
    The webinar on the topic 'Modern Day Web Development' was organised by the society wherein the society President Ekamjit Singh covered some crucial aspects of the field such as wireframing, theme selection, frontend - backend designing and web hosting in detail which encouraged students to look at this field not only as a highly coveted skill but also as a bright career opportunity.
      </p>
      <br>
      
    </div>

  </div>

  <BR>


<!--APPD -->
  <div class="row"  style="  padding: 1%;">

      <div class="col-xs-12 col-sm-12 col-lg-4" style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
        
        <img src="images/banners/appd.jpg" class="img-fluid bshadow" style="display:block;
      margin:auto;">

      </div>


     <div class="col-xs-12 col-sm-12 col-lg-8" style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br><BR>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">Webinar on App-Development</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 30<sup>th</sup> May 2021</b></span><br>
       
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
   The webinar was conducted by Mr Sumit Das, Director at one of the leading tech development firms, Dynamic Futuretech. All the topics crucial to the field were discussed in detail which made it easier for students to expand their perspective about app development and explore all the major career opportunities involved with this field.
      </p>
      <br>
    </div>
  </div>

  <BR>


<!--GSOC -->
  <div class="row" >
    <div class="col-xs-12 col-sm-12 col-lg-4 order-lg-second" style="/*padding-right: 6%;padding: 3%;  padding-top: 5%; background: lightblue;*/">
      
      <img src="images/banners/precisely.jpg" class="img-fluid bshadow" style="display:block;
    margin:auto;">

    </div>

    <div class="col-xs-12 col-sm-12 col-lg-8 order-lg-first" style="padding: 3%;  background: white; border: 2px solid lightgrey; padding: 1%;">
      <br><BR>
      <b><span style=" color: #03191e; font-size: 24px; padding-left: 3%; ">GitHub and GSOC Seminar</span>
      </b>
       <br>
       <span style="color: grey; padding: 3%; padding-bottom: 0%;"><b>Date : 28<sup>th</sup> January 2020</b></span><br>
       
      <p style="color: grey; padding: 3%; padding-bottom: 0%;">
    Precisely, a platform that helps high school and college students find and apply to the latest international opportunities, competitions etc hosted a seminar on open scource development, GitHub and Google Summer of Code(GSoC).

     </p>
      <br>
      
    </div>
  </div>
</div>












<!-- WORKSHOPS -->
<br><br>
<div class="container">
<div class="row" style="display: flex; justify-content: center; ">

    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/hacknslash.jpeg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 16px; color: #03191e">Hack-N-Slash Workshop</span><br>
         <span style="font-size: 12px;">An Ethical Hacking workshop conducted by Sanchay Singh, founder of HackersVilla Cybersecurity</span>
      </div>
      </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/dnc.JPG" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">Divide and Conquer Workshop</span><br>
          Conducted by Apaar Kamaal, mentor at Coding Blocks
      </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-lg-4 poster">
      <div class="card">
      <img class="card-img-top" src="images/banners/cmd.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text" style="height: 80px; overflow: hidden; color: grey;">
          <span style="font-size: 18px; color: #03191e">Linux Command Line Workshop</span><br>
          Conducted by Curieux society senior member Ishaan Arora
      </div>
      </div>
    </div>

  </div>
</div>

<br>

<!-- WORKSHOPS END -->

</section>

<section style="background:white; padding: 5%;">
<center>

<h1> Our Event Partners </h1> <br>
<img src="images/assets/logos/hackersvilla.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/duclub.jpg" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/rosa.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/coden.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/finalrevise.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/gfg.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/interview.jpg" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/compgen.png" style="width:20vh; height:auto; margin:2%;">
<img src="images/assets/logos/cdf.png" style="width:20vh; height:auto; margin:2%;">
</center>
</section>





    <!-- FOOTER SECTION -->
    <?php include ("includes/footer.php");?>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

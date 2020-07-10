<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My HTML Page</title>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">

  <style>
    * {
      box-sizing:border-box;
      font-family: monospace;
      /*font-family:courier;*/
    }
    body {
      margin:4vh;
      margin-bottom:0;
      padding:0;
      font-size:1.5vw;
      border:2px solid red;
    }

    #top_frame,#main_frame {
      width:100%;
      height:300px;
      background: blue;
      border:2px solid black;
      border-radius: 8px;
      box-sizing:border-box;
      background: #eee;
      padding:1%;

    }

    #top_frame {
      margin-bottom:2vh;
    }

    #main_frame {
      height:auto;
      height:600px;
      overflow-y: scroll;
      margin-bottom:1vh;
    }

    footer {
      /* clear:both; */
      /* position:relative; */
      width:100%;
      text-align: center;

      background-color: #666;
      color: white;
      border-radius: 8px;
      height:5vh;
      padding:5px;
    }

    button {
      height:100%;
      /* margin:15px; */
      border:2px solid blue;
      border-radius:8px;
      background: #bbb;

      /* padding: 0.3%;
      padding-left: 1%;
      padding-right: 1%; */
    }


    .inner_frame {
      /* position:relative; */
      width: 500px;
      border: 1px dotted blue;
      height:400px;
      float:left;
      display:inline;
    }

    .lekt_button {
      white-space: nowrap;
      border: 2px solid #333;
      background: #ccc;
      width: 47%;
      padding: 1%;
      border-radius: 8px;
      margin:0.5%;
      /*height:7%; */
      float: left;
      cursor:pointer;
    }

    .lekt_mark {
      border: 1px solid blue;
      border-radius: 2px;
      background:#eee;
      width: 5%;
      float: left;
    }


    .lekt_text {

      background: url(back_yellow.png);

      background-repeat: no-repeat;
      background-repeat:repeat-y;
      background-size: 0%;
      margin-left:7%;
      padding:1px;
      padding-left:2%;
      overflow-x: hidden;
    }


  </style>



</head>

<body>
  <div id="top_frame">

  </div>

  <div id="main_frame">
    <div class="inner_frame">
      <?php
      for ($i=0;$i<23;$i++) {
        $proz=rand(0,100);
        echo '
        <div class="lekt_button">
          <div class="lekt_mark">
            &nbsp;
          </div>
          <div class="lekt_text" style="background-size:'.$proz.'%">
            L'.($i+1).': Grundreihe ASDFg ljhlhjlk
          </div>

        </div>';
      }
      ?> 
    </div>

    <div class="inner_frame" >
      <?php
      for ($i=0;$i<18;$i++) {
        $back="background:green";

        echo '
        <div class="lekt_button" style="float:right">
          <div class="lekt_mark" style="'.$back.'">
            &nbsp;
          </div>
          <div class="lekt_text">
            Ü'.($i+1).': Texte schreiben
          </div>
        </div>';
      }
      ?>
    </div>
  </div>

<footer>
    <button>More buttons</button>
    <button>More buttons</button>
    <button>More buttons</button>
</footer>



</body>

</html>

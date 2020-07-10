<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My HTML Page</title>
  <style>
    body {
      font-family:Courier New;
      font-size:3vw;
    }
    .oben,.unten {
      width:80%;
      height:250px;
      background:#ccc;
      border:2px solid red;
      margin:14px;

    }
  </style>
</head>

  <body>
    
    <div class="oben">
        asdfg asdfg asdfg
    </div>

    <div class="unten" contentEditable="true" onchange=checkup()>
        asdfg asdfg asdfg
    </div>
  </body>

</html>

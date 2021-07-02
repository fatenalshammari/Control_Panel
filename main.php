<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Control Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <style>
     .button {
          background-color: #04AA6D;
          border: none;
          color: white;
          padding: 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
        }
        .move{
          margin-left: 25%;
        }
      .button4 {border-radius: 12px;}
      .container{
          margin-top:150px;
          margin-left: 150px;
          padding-left: 380px;
         }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="" action="conn_db_and_fetch.php" method="post">


      <div class="row">
        <div class="col-md-4">
        <button class="button button4 move" name="forward" id="forward">forward</button>

      </div>
    </div>

      <div class="row">
        <div class="col-md-4">
        <button class="button button4" name="left" id="left">left</button>
        <button class="button button4" name="stop" id="stop">stop</button>
        <button class="button button4" name="right" id="right">right</button>

      </div>
    </div>

      <div class="row">
        <div class="col-md-4">
        <button class="button button4 move" name="backward" id="backward">backward</button>

      </div>
    </div>
</form>
<?php
?>
      </div>
    </div>
  </body>
</html>

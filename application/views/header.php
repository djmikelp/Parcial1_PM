  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title><?php echo "Hola ".$identificador["nombrecompleto"]; ?></title>
      <style type="text/css">
      *{box-sizing:border-box;}

      form{
      	width:300px;
      	padding:16px;
      	border-radius:10px;
      	margin:auto;
      	background-color:#ccc;
      }

      form label{
      	width:72px;
      	font-weight:bold;
      	display:inline-block;
      }

      form input[type="text"],
      form input[type="email"]{
      	width:180px;
      	padding:3px 10px;
      	border:1px solid #f6f6f6;
      	border-radius:3px;
      	background-color:#f6f6f6;
      	margin:8px 0;
      	display:inline-block;
      }

      form input[type="submit"]{
      	width:100%;
      	padding:8px 16px;
      	margin-top:32px;
      	border:1px solid #000;
      	border-radius:5px;
      	display:block;
      	color:#fff;
      	background-color:#000;
      }

      form input[type="submit"]:hover{
      	cursor:pointer;
      }

      textarea{
      	width:100%;
      	height:100px;
      	border:1px solid #f6f6f6;
      	border-radius:3px;
      	background-color:#f6f6f6;
      	margin:8px 0;
      	/*resize: vertical | horizontal | none | both*/
      	resize:none;
      	display:block;
      }
      * { text-align: center; }
        h1 { font-family: arial; text-align: center;}
        p { font-family: arial; text-align: justify; margin: 25px;}
        img {width: 300px; height: 225px ; margin: 10px; }
        <?php echo"body { background-color: ".$usuario["color"]."; }"; ?>

      </style>
    </head>
    <body>

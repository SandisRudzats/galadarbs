<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css">
  
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  
  
  <style> 
   
   #map {
    height: 400px;
    width: 400px;
    float: left;
    margin: 0px;
    
    
  }
  </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
      
      <img class="logo-img"
        src="components/logosmall.png"
        alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="batons">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="?">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=1">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=3">Chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=4">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=5">About us</a>
           
          </li>
        </ul>
      </div>
    </div>
  </nav>

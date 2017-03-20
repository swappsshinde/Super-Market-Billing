<html >
<head>
  <meta charset="UTF-8">
  <title>Supermarket billing system</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
<div class="container" >
  <div class="info">
 <h1>Customer Product Billing </h1>
 </div>
</div>


<div class="container">  
  <form class="col-md-6" id="contact" action="submit1.php" method="post" style="width:400px;">
    <fieldset>
      <input placeholder="Enter Product ID" type="text" tabindex="1" name= "pid" autofocus>
    </fieldset>
  
  
    
    <fieldset>
      
      <button name="submit" type="submit" value="sub" id="contact-submit" data-submit="...Sending">Submit Product</button>
      

      <button name="submit" type="submit" value="gen" id="contact-submit" data-submit="...Sending">Generate Invoice</button>
  
    </fieldset>
    
  </form>
  
  
  </div>
  
  <br>
  <br><br>
  <div class="container" style="margin-left:570px">
  <form action="example/live_w_locator.html" target="_blank">
   <span style=" width: 40%;float:left;padding: 10px;margin: 0 0 15px;"><b>Barcode Scanner</b></span>
  <input type="image" src="img\barcode.png" alt="Submit" width="48" height="48">
</form>

  </div>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='dist/quagga.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

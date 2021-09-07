
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  #decrement:hover{
    cursor: pointer;
  } 
  #increment:hover{
    cursor: pointer;
  } 
  </style>
</head>
<body>
<nav aria-label="...">
  <ul class="pagination increment-btn " style="width=100px;" >
    
    <li  class="page-link left text-dark" href="#" id="decrement" onclick="Decrement()">-</li>
    <li class="active page-link text-dark " ><span id="c_val">1</span></li>
    <li  class="page-link right text-dark" href="#" id="increment" onclick="Increment()">+</li>
    
  </ul>
</nav>

</body>
</html>

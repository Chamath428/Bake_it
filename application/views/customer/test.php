<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form | CodingNepal</title>
    <link rel="stylesheet" href="<?php echo BASEURL?>/public/css/customer/customer-orderRate.css">
    <script src="<?php echo BASEURL ?>/public/js/customer/orderRate.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>

 <script type="text/javascript">
    
    function changeValues() {
  documentValue=document.getElementById("input1").value;
  document.getElementById("input2").value=documentValue;
}

 </script>

  <body>
    
    <input type="text" id="input1" name="input1" value="" oninput="changeValues('input1')">
    <input type="text" id="input2" name="input2" value="">

  </body>
</html>
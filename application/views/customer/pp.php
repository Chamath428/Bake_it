<!DOCTYPE HTML>
<html>
  
<head>
    <title>
        How to make a text input
        non-editable using JQuery?
    </title>
  
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
</head>
  
<body style="text-align:center;">
  
    Type Here: <input id="input" readonly="" />
    <br><br>
      
    <button onclick="GFG_Fun()">
        Click Here
    </button>
  

</body>
  
</html>

    <script>  
        function GFG_Fun() {
            $("#input").prop("readonly", false);
        }
    </script>
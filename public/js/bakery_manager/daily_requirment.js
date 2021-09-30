function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  
  var ct1 = document.getElementById("category1-table");
  var ct2 = document.getElementById("category2-table");
  var ct3 = document.getElementById("category3-table");
  var ct4 = document.getElementById("category4-table");
  var ct5 = document.getElementById("category5-table");


  function category1(){
    
    
      ct1.style.display = "block";
      ct2.style.display = "none";
      ct3.style.display = "none";
      ct4.style.display = "none";
      ct5.style.display = "none";

   
  }

  function category2(){
    
   
      ct2.style.display = "block";
      ct1.style.display = "none";
      ct3.style.display = "none";
      ct4.style.display = "none";
      ct5.style.display = "none";

  }

  function category3(){
  
    
      ct3.style.display = "block";
      ct2.style.display = "none";
      ct1.style.display = "none";
      ct4.style.display = "none";
      ct5.style.display = "none";

  }

  function category4(){
   
    
      ct4.style.display = "block";
      ct2.style.display = "none";
      ct3.style.display = "none";
      ct1.style.display = "none";
      ct5.style.display = "none";
 
  }
  function category5(){
    
    
      ct5.style.display = "block";
      ct2.style.display = "none";
      ct3.style.display = "none";
      ct4.style.display = "none";
      ct1.style.display = "none";

  }

  
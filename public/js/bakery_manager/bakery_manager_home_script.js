
  function openNav() {
    document.getElementById("mySidenav").style.width="230px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  $('.herf_bell_icon').click(function() {
    $(this).parent().find('img.image').css("opacity", "0.5");
  });

  // $('.closebtn').click(function() {
  //   $(this).parent().find('img.image').css("opacity", "0");
  // });
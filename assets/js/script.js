if(screen.width > 768) {
  function scrolll() {
    if(window.scrollY === 0) {
      document.getElementById("header").style.height = "120px";
      document.getElementById("one").style.height = "120px";
      document.getElementById("two").style.height = "120px";
      document.getElementById("three").style.height = "120px";
      document.getElementById("four").style.height = "120px";
      document.getElementById("navbarNavDropdown").style.height = "120px";
    }
    if(window.scrollY > 0) {
      document.getElementById("header").style.height = "80px";
      document.getElementById("one").style.height = "80px";
      document.getElementById("two").style.height = "80px";
      document.getElementById("three").style.height = "80px";
      document.getElementById("four").style.height = "80px";
      document.getElementById("navbarNavDropdown").style.height = "80px";
    }
  }
  window.addEventListener("scroll", scrolll);
}


window.onload = function() {
  if(document.URL == "https://fronter.eng.br/obras.php" ) {
    //document.getElementById("sectionOne").setAttribute("style","background-image:url('assets/image/obras.webp')");
    //document.querySelector(".obras0").setAttribute("style","background-image:url('assets/image/circle-4.png')");
  } /*else if(document.URL == "https://localhost/projetos/fronterS/obras.php") {
    document.getElementById("sectionOne").setAttribute("style","background-image:url('assets/image/obras.webp')");
    document.querySelector(".obras0").setAttribute("style","background-image:url('assets/image/circle-4.png')");
  }*/
   else if(document.URL == "https://fronter.eng.br/sobre.php" ) {
    document.getElementById("sobre1").setAttribute("style","background-image:url('assets/image/circle-4.png')");
  }
   else if(document.URL == "https://fronter.eng.br/contato.php" ) {
    //document.getElementById("contato").setAttribute("style","background-image:url('https://fronter.eng.br/images/contato.jpg')");
  }

  if(screen.width < 768) {
    document.getElementById("partners").setAttribute("src","https://fronter.eng.br/images/parceiros_mobile.png");
  }

};

$(document).ready(function() {
  $(".btn_grey.one").on('click', function() {
    $(".btn_grey.one").addClass("active");
    $(".btn_grey.two").removeClass("active");
    $(".btn_grey.three").removeClass("active");
    $(".btn_grey.four").removeClass("active");
  });
  
  $(".btn_grey.two").on('click', function() {
    $(".btn_grey.two").addClass("active");
    $(".btn_grey.one").removeClass("active");
    $(".btn_grey.three").removeClass("active");
    $(".btn_grey.four").removeClass("active");
  });
  
  $(".btn_grey.three").on('click', function() {
    $(".btn_grey.three").addClass("active");
    $(".btn_grey.one").removeClass("active");
    $(".btn_grey.two").removeClass("active");
    $(".btn_grey.four").removeClass("active");
  });
  
  $(".btn_grey.four").on('click', function() {
    $(".btn_grey.four").addClass("active");
    $(".btn_grey.one").removeClass("active");
    $(".btn_grey.two").removeClass("active");
    $(".btn_grey.three").removeClass("active");
  });
});
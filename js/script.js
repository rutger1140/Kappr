/* Author:

*/






$(function() {

  console.log("Loaded");

  /* Google Maps */
  GmapLoad();

/*

$(window).scroll(function() {
    var offset = window.pageYOffset;


    $('#fill1').css({
      "top" : (-18.4+(offset/30))+"%"
    });


    $('#prijzen').css({
      "top" : -500 + (offset/2.0)
    });

    $('#producten').css({
      "top" : -1000 + (offset/2.0)
    });




    $('#fill1').css({
      "top" : -500 + (offset/2.1)
    });


    $('#fill2').css({
      "top" : -1500 + (offset/2.1)
    });

    $('#fill3').css({
      "top" : -2000 + (offset/2.1)
    });




 // INTRO
    $('#first header').css({
      "top" : (12+(offset/20))+"%"
    });

    $('#firstImg').css({
      "top" : 0 + (offset/1.5)
    });


 // ABOUT CAMPMON
    $('#second section').css({
      "top" : (-18.4+(offset/30))+"%"
    });

    $('#ohfour').css({
      "top" : -209 + (offset/2.1)
    });

    $('#ohfive').css({
      "top" : -250 + (offset/2.0)
    });

    $('#ohsix').css({
      "top" : -294 + (offset/1.9)
    });

    $('#ohseven').css({
      "top" : -342 + (offset/1.8)
    });

    $('#oheight').css({
      "top" : -392 + (offset/1.7)
    });

    $('#ohnine').css({
      "top" : -447 + (offset/1.6)
    });

    $('#ten').css({
      "top" : -507 + (offset/1.5)
    });


 // UI DESIGNER
    $('#third section').css({
      "top" : (-75+(offset/25))+"%"
    });

    $('#thirdImg').css({
      "top" : -2000 + (offset/1.5)
    });

    $('#photoshopIcon').css({
      "top" : -1160 + (offset/1.5)
    });
    $('#textmateIcon').css({
      "top" : -1190 + (offset/1.4)
    });
    $('#csseditIcon').css({
      "top" : -1220 + (offset/1.3)
    });
    $('#safariIcon').css({
      "top" : -1240 + (offset/1.2)
    });


 // WEB DESIGNER
    $('#fourth section').css({
      "top" : (-75+(offset/35))+"%"
    });

    $('#fourthImg').css({
      "top" : -1150 + (offset/2.5)
    });


  // HOW WE WORK
    $('#fifth section').css({
      "top" : (-60+(offset/55))+"%"
    });

    $('#fifthImg').css({
      "top" : -2690 + (offset/1.5)
    });















});

*/

  $('#access').localScroll(800);

  //RepositionNav();

  //$(window).resize(function(){
//    RepositionNav();
//  });

  //.parallax(xPosition, adjuster, inertia, outerHeight) options:
  //xPosition - Horizontal position of the element
  //adjuster - y position to start from
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport



  $("#fill1").parallax("50%", 400, 0.1, true);

  $('#fill2').parallax("50%", 1500, 0.4, true);

  $("#fill3").parallax("50%", 2500, 0.3, true);

  $("#fill4").parallax("50%", 4200, 0.4, true);


/*

  $(window).scroll(function() {
    var offset = window.pageYOffset;

    $('#prijzen .wrap').css({
      "top" : (-15+(offset/30))+"%"
    });

 // UI DESIGNER
    $('#producten .wrap').css({
      "top" : (-75+(offset/30))+"%"
    });

    $('#products').css({
      "top" : -2500 + (offset/1.6)
    });


 // WEB DESIGNER
    $('#locatie .wrap').css({
      "top" : (-60+(offset/30))+"%"
    });


  // HOW WE WORK
    $('#contact .wrap').css({
      "top" : (-80+(offset/50))+"%"
    });






  });
*/



});

var map;

function GmapInit() {
  var kappr = new google.maps.LatLng(52.054153,5.079889);
  var mapcenter = new google.maps.LatLng(52.054153,5.077989);
  var myOptions = {
    zoom: 16,
    center: mapcenter,
    disableDefaultUI: true,
    disableDoubleClickZoom: true,
    draggable: true,
    scrollwheel: false,
    overviewMapControl: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);


  var kapprIcon = "img/mapicon.png";

  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: kappr,
    icon:kapprIcon
  });
  $("#locatie").addClass("hasmap");
    //google.maps.event.addListener(marker, 'click', toggleBounce);

}

function GmapLoad() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=GmapInit";
  document.body.appendChild(script);
}


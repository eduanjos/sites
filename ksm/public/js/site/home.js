

// function toggleFAB(fab){
//   if(document.querySelector(fab).classList.contains('show')){
//     document.querySelector(fab).classList.remove('show');
//   }else{
//     document.querySelector(fab).classList.add('show');
//   }
// }

// document.querySelector('.btnFloat .main').addEventListener('click', function(){
//   toggleFAB('.btnFloat');
// });

// document.querySelectorAll('.btnFloat ul li button').forEach((item)=>{
//   item.addEventListener('click', function(){
//     toggleFAB('.btnFloat');
//   });
// });

/*Menu Collapsed Sidepanel*/
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
/**/


$(function(){

  $("a").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
          // Store hash
          var hash = this.hash;
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1000, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
      }
  });

  // counterUp
  // $(".Num").counterUp({delay:10,time:1000});

  /*WOW com repetição de SCROOL*/ 
  WOW.prototype.addBox = function(element) {
    this.boxes.push(element);
  };

  // Init WOW.js and get instance
  var wow = new WOW();
  wow.init();

  $('.wow').on('scrollSpy:exit', function() {
    $(this).css({
      'visibility': 'hidden',
      'animation-name': 'none'
    }).removeClass('animated');
    wow.addBox(this);
  }).scrollSpy();

/*Home Clientes*/
$('.carousel').slick({
    autoplay:true,
    arrows:false,
    dots: false,
    mobileFirst: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1
  });
/*Home Clientes*/
});


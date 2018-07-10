var o, s;
$(document).ready(function() {
  site = {
      options: {
          pointevent: ($("html").is(".touch")) ? "touchstart" : "click",
          transitions: ($("html").is(".csstransitions")) ? true : false
      },
      init: function(){
          s = site;
          o = site.options;
          
          if (!o.transitions) { $.fn.transition = $.fn.animate; }
          
          //menu highlighting handling
          $('#about').waypoint(function(direction) {
              if(direction == "down"){
                  $('#mainmenu li').removeClass("active");
                  $('.menuabout').addClass("active");
              }
          }, { offset: 100 });
          $('#products').waypoint(function(direction) {
              if(direction == "down"){
                  $('#mainmenu li').removeClass("active");
                  $('.menuproducts').addClass("active");
              }
          }, { offset: 100 });
          $('#clients').waypoint(function(direction) {
              if(direction == "down"){
                  $('#mainmenu li').removeClass("active");
                  $('.menuclients').addClass("active");
              }
          }, { offset: 100 });
          $('#contact').waypoint(function(direction) {
              if(direction == "down"){
                  $('#mainmenu li').removeClass("active");
                  $('.menucontact').addClass("active");
              }
          }, { offset: 100 });
          
          
          
          $('#about').waypoint(function(direction) {
              if(direction == "up"){
                  $('#mainmenu li').removeClass("active");
                  $('.menuabout').addClass("active");
              }
          }, { offset: function() {
              return -$(this).height();
            }
          });
          
          $('#products').waypoint(function(direction) {
              if(direction == "up"){
                  $('#mainmenu li').removeClass("active");
                  $('.menuproducts').addClass("active");
              }
          }, { offset: function() {
              return -$(this).height();
            }
          });
          
          $('#clients').waypoint(function(direction) {
              if(direction == "up"){
                  $('#mainmenu li').removeClass("active");
                  $('.menuclients').addClass("active");
              }
          }, { offset: function() {
              return -$(this).height();
            }
          });
          
          $('#contact').waypoint(function(direction) {
              if(direction == "up"){
                  $('#mainmenu li').removeClass("active");
                  $('.menucontact').addClass("active");
              }
          }, { offset: function() {
              return -$(this).height();
            }
          });
          
          $('#top').waypoint(function(direction) {
              if(direction == "up"){
                  $('#mainmenu li').removeClass("active");
              }
          }, { offset: function() {
              return -$(this).height();
            }
          });
          
          
          
          $(".menulink").each(function(index){
				var myindex = index;
				$(this).on(o.pointevent, function(e){
					e.preventDefault();
					var teammemberpos = $(".mainsection").eq(myindex).offset().top-95;
					//console.log(teammemberpos);
					$('body,html').animate({ scrollTop: teammemberpos }, "fast");
				});
			});
          
          
          /*
$("body").on(o.pointevent, '.menutop a, .menuabout a, .menuproducts a, .menuclients a, .menucontact a', function(e){
              e.preventDefault();
              //calculate destination place
              var dest=0;
              if($(this.hash).offset().top > $(document).height()-$(window).height()){
                   dest=$(document).height()-$(window).height();
              }else{
                   dest=$(this.hash).offset().top;
              }
              //go to destination
              $('html,body').animate({scrollTop:dest}, 2000,'fast');
          });
*/
          
      }
  }
  
  site.init();
});
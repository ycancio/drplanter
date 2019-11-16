$(function(){
  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 30){
      $("body").addClass("sticky-header");
    }else{
      $("body").removeClass("sticky-header");
    }//if-else
  });//win func.

  $('.menu-item.menu-item-has-children > a').click(function(e){
    e.preventDefault();
    $(this).parent().find('.sub-menu').toggle();
  });

});


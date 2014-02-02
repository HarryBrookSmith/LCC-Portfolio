

$(document).ready(function(){
    $('.slide-trigger').collapsable();
    $('#production_skills').hide();
});

/* MOBILE COLLAPSE MENU */
(function($) {
  $.fn.collapsable = function(options) {
    // iterate and reformat each matched element
    return this.each(function() {
      // cache this:
      var obj = $(this);
      var tree = obj.next('.navigation');
      obj.click(function(){
        if( obj.is(':visible') ){tree.toggle();}
      });
      $(window).resize(function(){
        if ( $(window).width() <= 570 ){tree.attr('style','');};
      });
    });
  };
})(jQuery);


$( "#headshots_btn" ).click(function(e) {
  e.preventDefault();
  $('#production_skills').hide();
  $('#headshots').show();
  $( "#production_skills_btn" ).removeClass("nav-selected");
  $( "#headshots_btn" ).addClass("nav-selected");

});

$( "#headshots_btn_m" ).click(function(e) {
  e.preventDefault();
  $('#production_skills').hide();
  $('#headshots').show();
  $( "#production_skills_btn_m" ).removeClass("nav-selected");
  $( "#headshots_btn_m" ).addClass("nav-selected");

});

$( "#production_skills_btn" ).click(function(e) {
  e.preventDefault();
  $('#headshots').hide();
  $('#production_skills').show();
  $( "#production_skills_btn" ).addClass("nav-selected");
  $( "#headshots_btn" ).removeClass("nav-selected");

});

$( "#production_skills_btn_m" ).click(function(e) {
  e.preventDefault();
  $('#headshots').hide();
  $('#production_skills').show();
  $( "#production_skills_btn_m" ).addClass("nav-selected");
  $( "#headshots_btn_m" ).removeClass("nav-selected");

});







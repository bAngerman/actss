

// CUSTOM STYLES FOR OUR ACTSS THEME // 

(function($) {

  $('#toggleNav').on('click', function(e) {
    e.preventDefault();
    $('.menu-main-menu-container').toggleClass('show');
    $('.fa-bars').toggleClass('hidden');
    $('.fa-times').toggleClass('hidden');
  });

})(jQuery); 
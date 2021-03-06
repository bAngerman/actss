

// CUSTOM STYLES FOR OUR ACTSS THEME // 

(function($) {

  $('#toggleNav').on('click', function(e) {
    e.preventDefault();
    $('.menu-main-menu-container').toggleClass('show');
    $('.fa-bars').toggleClass('hidden');
    $('.fa-times').toggleClass('hidden');
  });

  if ($('body').hasClass('page-id-241')) {

    $('#cancer_types').on('change', function(e) {
      // console.log($('#cancer_types').find('option:selected').val());
      id = $('#cancer_types').find('option:selected')[0].value;
      getCancer(id);
    });

    var id = $('#cancer_types').find('option:selected')[0].value;
    var getCancer = function(id) {
        $.ajax({
        url: ajaxObject.ajaxUrl,
        data: {
          'action': 'get_cancer_type',
          'id': id
        },
        success: function(data)  {
          if(JSON.parse(data)) {

            data = JSON.parse(data);

            var $desc = $('#desc'),
                $diag = $('#diagnosis'),
                $trea = $('#treatment');
            $desc.empty();
            $diag.empty();
            $trea.empty();

            $desc.html("<p>" + data.description + "</p>");
            $diag.html("<p>" + data.diagnosis + "</p>");
            $trea.html("<p>" + data.treatment + "</p>");
          }
        },
        error: function(err) {
          console.log(err.responseText);
        }
      })
    }
    getCancer(id);
  }
  if ( $('.archive').length ) {
    $("#archive_monthly").on('change', function(e) {
      var dd = $('#archive_monthly').val();
      if ( dd != null ) {
        location.href = dd;
      }
    });
  }

  $('.dropdown-parent>a').on('click', function(e) {
    e.preventDefault();
    $tar = e.target;
    $tar.parentElement.classList.toggle('dropdown-expanded');
    $tar.nextElementSibling.classList.toggle('is-expanded');
  });

  if ( $('.swpm-buy-now-button-submit').length ) {
   // console.log( $('.swpm-buy-now-button-submit') );
    $('.swpm-buy-now-button-submit').val('Donate');
  }
  

})(jQuery); 
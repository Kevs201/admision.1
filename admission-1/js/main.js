$(document).ready(function() {
  // Toggle classes on .fa-bars click
  $('.fa-bars').click(function() {
      $(this).toggleClass('fa-xmark'); // Toggle the icon state
      $('.navbar').toggleClass('nav-toggle'); // Toggle the navbar visibility
  });

  // Handle scroll and load events
  $(window).on('scroll load', function() {
      // Check scroll position
      if ($(window).scrollTop() > 30) {
          $('header').addClass('header-active'); // Add active class when scrolled
      } else {
          $('header').removeClass('header-active'); // Remove active class when at top
      }

      // Set offset value for the sections
      var offset = $(window).scrollTop();
      
      $('section').each(function() {
          var id = $(this).attr('id');
          var top = $(this).offset().top - 200; // Adjust for offset
          var height = $(this).outerHeight();

          // Check if section is in viewport
          if (offset >= top && offset < top + height) {
              $('.navbar ul li a').removeClass('active');
              $('.navbar').find('[href="#' + id + '"]').addClass('active');
          }
      });
  });
});

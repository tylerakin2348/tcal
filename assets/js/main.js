// This controls show-nav functionality

// $(".main-navigation").hide();

$("#show-nav").click(function() {
  if ($(".menu-menu-1-container").is(":hidden")) {
    $(".menu-menu-1-container").slideDown("slow");
  } else {
    $(".menu-menu-1-container").slideUp("fast");
  }
});


$('#show-nav').click(function() {
  $(this).toggleClass('active');

  if ($('#show-nav').hasClass('active')) {
    $(this).text("Hide Menu");

  } else {
    $(this).text("Show Menu");
  }
});

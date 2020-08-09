// header

  // hamburger menu

  $('.burger-menu').click(function() {

    // hide header elements
    $('.home-button').toggleClass('hidden');
    $('.page-name').toggleClass('hidden');

    // display nav menu
    $('.nav-menu').toggleClass('nav-menu--open');

    // transform burger menu to X
    $(this).toggleClass('burger-menu--open');

  })
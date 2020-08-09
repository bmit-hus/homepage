// header

  // hamburger menu

  $('.burger-menu').click(function() {

    // hide header elements
    $('.home-button').toggleClass('hidden-on-mobile');
    $('.page-name').toggleClass('hidden-on-mobile');

    // display nav menu
    $('.nav-menu').toggleClass('nav-menu--open');

    // transform burger menu to X
    $(this).toggleClass('burger-menu--open');

  })
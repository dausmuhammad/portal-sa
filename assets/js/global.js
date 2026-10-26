$(function(){
  /* ===== Sidebar Toggle ===== */
  function openSidebar() {
    $('#sidebar').addClass('show');
    $('#sidebarBackdrop').addClass('show');
    $('body').css('overflow','hidden');
  }
  function closeSidebar() {
    $('#sidebar').removeClass('show');
    $('#sidebarBackdrop').removeClass('show');
    $('body').css('overflow','');
  }
  $('#btnHamburger').on('click', function(){
    $('#sidebar').hasClass('show') ? closeSidebar() : openSidebar();
  });
  $('#sidebarBackdrop').on('click', closeSidebar);
  $('.sidebar .nav-link').on('click', function(){
    if ($(window).width() < 992) closeSidebar();
  });
  $(window).on('resize', function(){
    if ($(window).width() >= 992) closeSidebar();
  });
});
$(window).scroll(function() {
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 55);
});

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

var alertList = document.querySelectorAll('.alert')
alertList.forEach(function(alert) {
  new bootstrap.Alert(alert)
});

$('#navbarButton').click(function() {
  $('nav').addClass('scrolled');
});

$('.nav-button').click(function() {
  $('.nav-button').toggleClass('change');
});

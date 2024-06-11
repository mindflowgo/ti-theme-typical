$(window).resize(function() {
    if (window.matchMedia('(min-width: 768px)').matches) {
        
        $(this).on("scroll", function() {
            
            if ($(this).scrollTop() > 10) {
                $('.navbar-top').addClass('shrink');
                $('.img-logo').addClass('shrink');
            } else {
                $('.navbar-top').removeClass('shrink');
                $('.img-logo').removeClass('shrink');
            };
        });
    }
});
$(document).ready(function () {
    $('.close-cart, .overlay').on('click', function () {
        $('.header-cart').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('.header-cart').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});


$('#addressModal').appendTo("body");
$('#infoModal').appendTo("body");

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-tooltip="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl,{
    container: '.container-fluid'
 });
});
$(".categories-home, .table-responsive").mCustomScrollbar({
    axis:"x",
    theme:"rounded-dots-dark",
    autoHideScrollbar: true,
    scrollButtons:{ enable: true }
});


/*
 * Star rating class
 */

$('[data-control="star-rating"]').raty('set', { 
    starOff: 'bi bi-star',
    starOn: 'bi bi-star-fill',
    starType: 'i'
});

// Espera a que el documento esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Selecciona el elemento del div notification
    var notificationDiv = document.getElementById("notification");
  
    // Crea un observador de mutaciones
    var observer = new MutationObserver(function(mutations) {
      // Itera sobre las mutaciones detectadas
      mutations.forEach(function(mutation) {
        // Verifica si el contenido del div ha cambiado
        if (mutation.type === "childList" && mutation.target === notificationDiv && mutation.addedNodes.length > 0) {
          // Verifica si el mensaje deseado está presente en el contenido agregado
          var addedContent = mutation.addedNodes[0];
          if (addedContent.textContent.includes("Por favor ingresa una dirección para comprobar si podemos entregar tu pedido")) {
            // Abre el modal cuando se detecta el mensaje deseado
            $('#addressModal').modal('show');
          }
        }
      });
    });
  
    // Observa los cambios en el contenido del div notification
    observer.observe(notificationDiv, { childList: true });
  });
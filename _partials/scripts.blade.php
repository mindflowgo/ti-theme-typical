{!! Assets::getJsVars() !!}
@scripts
{!! $this->theme->ga_tracking_code !!}
@if (!empty($this->theme->custom_js))
    <script type="text/javascript">{!! $this->theme->custom_js !!}</script>
@endif
<script src="https://cdn.jsdelivr.net/npm/swiper@7.0.0/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".reviewsslider", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 15,
        },
      },
    });
</script>

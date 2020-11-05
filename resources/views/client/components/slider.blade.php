<style>
    .swiper-container {
        width: 100%;
        height: 350px;
    }
</style>
<div class="swiper-container mb-5">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#">
                <img class="w-100 h-100" style="object-fit: cover" src="{{asset("assets/client/img/robotic/banner1.png")}}"
                    alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img class="w-100 h-100" style="object-fit: cover" src="{{asset("assets/client/img/robotic/banner2.png")}}"
                    alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img class="w-100 h-100 img-responsive" style="object-fit: cover" src="{{asset("assets/client/img/robotic/banner3.png")}}"
                    alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img class="w-100 h-100" style="object-fit: cover" src="{{asset("assets/client/img/robotic/banner1.png")}}"
                    alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img class="w-100 h-100" style="object-fit: cover" src="{{asset("assets/client/img/robotic/banner2.png")}}"
                    alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img class="w-100 h-100" style="object-fit: cover" src="{{asset("assets/client/img/robotic/banner3.png")}}"
                    alt="">
            </a>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'
  
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
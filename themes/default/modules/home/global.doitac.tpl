<!-- BEGIN: main -->
<div class="swiper-container" id="home_doitac">
	<div class="swiper-wrapper">
		<!-- BEGIN: loop -->
			<div div class="swiper-slide ">
				<img src="{ROW.image}" class="lazy" alt="{ROW.title}"title="{ROW.title}">
			</div>
		<!-- END: loop -->  
	</div>
</div>	
		
 <script>
  var swiper = new Swiper('#home_doitac', {
      slidesPerView: 1,
      spaceBetween:20,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        1124: {
          slidesPerView: 6,
          spaceBetween: 10,
        },
      }
    });
  </script>	
  
  

		
<!-- END: main -->
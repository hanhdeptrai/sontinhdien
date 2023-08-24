<!-- BEGIN: main -->
	<div class="swiper-container" id="home_banner">
			<div class="swiper-wrapper">
				<!-- BEGIN: loop -->
				<div div class="swiper-slide">
					<a href="{ROW.link}" title="{ROW.title}">
						<img src="{ROW.image}" alt="{ROW.title}" title="{ROW.title}"/>
							
					</a>
				</div>
				<!-- END: loop -->  
				
			</div>
	 <div class="swiper-pagination"></div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

		</div>


 <script>
   var swiper = new Swiper('#home_banner', {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
	   autoplay: {
        delay: 4500,
  
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
		 pagination: {
          el: ".swiper-pagination",
        },
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	  
    });
   
  </script>
<!-- END: main -->
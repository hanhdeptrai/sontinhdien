<!-- BEGIN: main -->
<div class="tms_block_home_title"><h2>{BLOCK_TITLE}</h2></div>
<div class="tms_block_home_i"></div>
<div class="tms_block_home_text">{BLOCK_HOME_TEXT}</div>
<div class="clearfix"></div>
<div class="swiper-container" id="home_review">
	<div class="swiper-wrapper">
		<!-- BEGIN: loop -->
			<div div class="swiper-slide ">
				<div class="tms_review_text">{ROW.description}</div> 
				<div class="tms_review_img"><img src="{ROW.image}" class="mr-3" alt="">
					<div class="media-body">
						<div class="overview">
							<div class="name"><b>{ROW.title}</b></div>
							<div class="details">{ROW.title_extra}</div>
							<div class="star-rating">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>										
					</div>
				</div>
			</div>
		<!-- END: loop -->  
	</div>
</div>	
		
 <script>
  var swiper = new Swiper('#home_review', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      }
    });
  </script>	
<!-- END: main -->
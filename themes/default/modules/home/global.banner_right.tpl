<!-- BEGIN: main -->
<div class="banner_right">
<!-- BEGIN: loop -->
<div class="banner_right_list">
<a href="{ROW.link}" title="{ROW.title}"><img src="{ROW.image}" alt="{ROW.title}" title="{ROW.title}"></a>
</div>
<!-- END: loop -->  

</div>	
		
 <script>
  var swiper = new Swiper('#home_qc_top', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      }
      
    });
  </script>	
<!-- END: main -->
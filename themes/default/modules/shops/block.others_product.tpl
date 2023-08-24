<!-- BEGIN: main -->
<!-- BEGIN: loop -->
<div class="col-xs-24 col-lg-6 col-md-6 col-sm-12">
<div class="sanpham_item">
<div class="sanpham_item_img">
<a href="{link}" title="{title}"><img src="{src_img}" alt="{title}" title="{title}"></a>
</div>
<div class="sanpham_item_text">
<h3><a href="{link}" title="{title}">{title}</a></h3>
<div class="sanpham_item_footer"> 
<!-- BEGIN: price -->
			<span class="price">
                <!-- BEGIN: discounts -->
                <span class="money show">{PRICE.sale_format} {PRICE.unit}</span>
                <span class="discounts_money show">{PRICE.price_format} {PRICE.unit}</span>
                <!-- END: discounts -->

				<!-- BEGIN: no_discounts -->
				<span class="money show">{PRICE.price_format} {PRICE.unit}</span>
				<!-- END: no_discounts -->
			</span>
			<!-- END: price -->
            <!-- BEGIN: contact -->
            <span class="money show">{LANG.price_contact}</span>
            <!-- END: contact -->
<a href="tel:{NV_PHONE}" class="lienhe" title="{title}"><i class="fa fa-phone" aria-hidden="true"></i> Tư vấn ngay</a>
<a href="{link}" class="tragia" title="{title}"><i class="fa fa-arrow-right"></i> Xem chi tiết</a>
</div>
</div>		
</div>
</div>
<!-- END: loop -->

<!-- END: main -->
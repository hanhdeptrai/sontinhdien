<!-- BEGIN: main -->
<div class="row viewgrid shops-viewgrid shops-viewgrid-{MODULE_NAME}">
    <!-- BEGIN: loop -->
    <div class="col-xs-24 col-lg-{NUM} col-md-{NUM} col-sm-12">
	<div class="sanpham_item">
<div class="sanpham_item_img">
 <a href="{ROW.link_pro}" title="{ROW.title}"><img src="{ROW.homeimgthumb}" alt="{ROW.title}"></a>
</div>
<div class="sanpham_item_text">
<h3><a href="{ROW.link_pro}" title="{ROW.title}">{ROW.title}</a></h3>
<div class="sanpham_item_footer"> 
 <!-- BEGIN: price -->
                <p class="price">
                    <!-- BEGIN: discounts -->
                    <span class="money">{PRICE.sale_format} {PRICE.unit}</span> <span class="discounts_money">{PRICE.price_format} {PRICE.unit}</span>
                    <!-- END: discounts -->
                    <!-- BEGIN: no_discounts -->
                    <span class="money">{PRICE.price_format} {PRICE.unit}</span>
                    <!-- END: no_discounts -->
                </p>
                <!-- END: price -->
                <!-- BEGIN: contact -->
                <p class="price">
                    {LANG.detail_pro_price}: <span class="money">{LANG.price_contact}</span>
                </p>
                <!-- END: contact -->
<a href="tel:{NV_PHONE}" class="lienhe" title="{title}"><i class="fa fa-phone" aria-hidden="true"></i> Tư vấn ngay</a>
<a href="{link}" class="tragia" title="{title}"><i class="fa fa-arrow-right"></i> Xem chi tiết</a>
</div>
</div>		
</div>

       
    </div>
    <!-- END: loop -->
    <!-- BEGIN: page -->
    <div class="text-center w-100 gen-page">{PAGE}</div>
    <!-- END: page -->
</div>
<!-- BEGIN: tooltip_js -->
<script type="text/javascript" data-show="after">
    $(document).ready(function() {
        $("[data-rel='tooltip']").tooltip({
            placement : "bottom",
            html : true,
            title : function() {
                return '<p class="text-justify">' + $(this).data('content') + '</p><div class="clearfix"></div>';
            }
        });
    });
</script>
<!-- END: tooltip_js -->
<!-- END: main -->

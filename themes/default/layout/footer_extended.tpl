
<div id="footer">
<div class="wraper">
<div class="container">
<div class="row">
<div class="col-xs-24 col-lg-8 col-md-8 col-sm-12">
<div class="logofooter"><img src="{HOME.logofooter}" alt="{SITE_NAME}"></div>
<div class="logofootertext">{HOME.company_hometext}</div>

</div>
<div class="col-xs-24 col-lg-4 col-md-4 col-sm-12">
[MENU_FOOTER1]
</div>
<div class="col-xs-24 col-lg-4 col-md-4 col-sm-12">
[MENU_FOOTER2]

</div>
<div class="col-xs-24 col-lg-8 col-md-8 col-sm-12">
[COMPANY_INFO]

</div>

</div>
</div>
</div>
</div>


<a href="javascript:void(0);" class="scrollup" style="display: inline;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<script type='text/javascript'> 
    $(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
            $('.right-controls').fadeIn();
        } else {
            $('.scrollup').fadeOut();
             $('.right-controls').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
</script>

    {ADMINTOOLBAR}
    <!-- SiteModal Required!!! -->
    <div id="sitemodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="fa fa-spinner fa-spin"></i>
                </div>
                <button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></span></button>
            </div>
        </div>
    </div>
   

<!-- BEGIN: slide -->
<div class="MagicSlideshow album-{BLOCK_ID}" data-options="selectors: bottom; selectors-style: thumbnails; selectors-size: 40px;">
	<!-- BEGIN: loop_album -->
	<img src="{ALBUM.file}" alt="{ALBUM.name}" class="img-responsive"/>
	<!-- END: loop_album -->
</div>

<!-- BEGIN: js -->
<link href="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/magicslideshow/magicslideshow.css" type="text/css" rel="stylesheet" media="all" />
<script type="text/javascript" src="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/magicslideshow/magicslideshow.js"></script>
<!-- END: js -->
<!-- END: slide -->

<!-- BEGIN: main -->
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/spotlight.css">
<script src="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/spotlight.bundle.js"></script>
<div class="tms_block_home_title"><h2>{BLOCK_TITLE}</h2></div>
<div class="tms_block_home_i"style="margin-bottom:20px;"></div>
<div class="clearfix"></div>

<div class="row block-{BLOCK_ID}">
	<!-- BEGIN: loop_album -->
	<div class="col-xs-24 col-sm-12 col-md-8">	
	<div class="loop_album">
	<a class="spotlight" href="{ALBUM.file}"title="{ALBUM.name}" data-description="{ALBUM.name}"><img src="{ALBUM.thumb}" alt="{ALBUM.name}">
    </a>
	</div>
	</div>
	<!-- END: loop_album -->
</div>
<!-- END: main -->

<!-- BEGIN: main -->
<!-- BEGIN: view_grid -->
<h1 class="txt20 txt_bold">{ALBUM.name}</h1>
<!-- BEGIN: description -->
<hr />
<p class="album_description">{ALBUM.description}</p>
<!-- END: description -->

<div id="album-gallery">
	<div class="row">
	<!-- BEGIN: loop_img -->
	<div class="col-xs-24 col-sm-12 col-md-{PER_LINE} col-lg-{PER_LINE}">	
	<div class="loop_album">
	<a class="spotlight" href="{PHOTO.file}"title="{PHOTO.name}" data-description="{PHOTO.name}"><img src="{PHOTO.thumb}" alt="{PHOTO.name}">
    </a>
	</div>
	</div>

	<!-- END: loop_img -->
	</div>
</div>

<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/spotlight.css">
<script src="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/spotlight.bundle.js"></script>


<!-- END: view_grid -->

<!-- BEGIN: slider -->
<link href="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/magicslideshow/magicslideshow.css" type="text/css" rel="stylesheet" media="all" />
<div class="pd5">
	<h1 class="txt20 txt_bold">{ALBUM.name}</h1>
	<ul class="list-inline text-muted">
		<li><em class="fa fa-user">&nbsp;</em>{LANG.album_author_upload}: {ALBUM.author_upload}</li>
		<li><em class="fa fa-eye">&nbsp;</em>{LANG.viewed}: {ALBUM.viewed}</li>
	</ul>
	<!-- BEGIN: description -->
	<hr />
	<p class="album_description">{ALBUM.description}</p>
	<hr />
	<!-- END: description -->
	
	<div class="MagicSlideshow album-{ALBUM.id}" data-options="selectors: bottom; selectors-style: thumbnails; selectors-size: 40px;">
		<!-- BEGIN: loop_slide -->
		<img src="{PHOTO.file}" alt="{ALBUM.name}">
		<!-- END: loop_slide -->
	</div>
 </div>

<!-- END: slider -->

<!-- BEGIN: generate_page -->
<div id="generate_page" class="text-center">
	{GENERATE_PAGE}
</div>
<!-- END: generate_page -->




<!-- BEGIN: other_album -->
<div class="tms-header_cat"><h2>{LANG.other_album}</h2></div>
	

<div id="other-album" class="row">
	<!-- BEGIN: loop_album -->
	<div class="col-xs-24 col-sm-12 col-md-{PER_LINE} col-lg-{PER_LINE}">
				<div class="box">
		<img src="{OTHER.thumb}" alt="{OTHER.name}"/>
		 <div class="box-content">
                    <h3 class="title"><a href="{OTHER.link}"title="{OTHER.name}">{OTHER.name}</a></h3>
                </div>
                <ul class="icon">
                    <li><a href="{OTHER.link}"title="{OTHER.name}"><i class="fa fa-link"></i></a></li>
                </ul>
		</a>
	</div>
			</div>
			

	<!-- END: loop_album -->
	<div class="clear"></div>
</div>
<!-- END: other_album -->
<script type="text/javascript" src="{NV_BASE_SITEURL}themes/{TEMPLATE}/modules/{MODULE_FILE}/plugins/magicslideshow/magicslideshow.js"></script>
<!-- END: main -->
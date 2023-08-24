<!-- BEGIN: main -->
<ul id="{BLOCK_ID}">
	<!-- BEGIN: loop_album -->
	<li>
		<a class="images" href="{ALBUM.link}" title="{ALBUM.name}">
			<img src="{ALBUM.thumb}" alt="{ALBUM.name}" class="img-responsive"/>
		</a>
		<a href="{ALBUM.link}" title="{ALBUM.name}"><span><strong>{ALBUM.name}</strong></span></a>
		<p>{ALBUM.description}</p>
	</li>
	<!-- END: loop_album -->
</ul>
<!-- END: main -->

<!-- BEGIN: grid -->
<div class="tms-block-header">
		<div class="wraper">
		<div class="container">
		<h2>{TITILE_BLOCK}</h2>	
		<h3>{BLOCK_HOME_TEXT}</h3>
		</div>
		</div>
	</div>
	
<div class="row block-{BLOCK_ID}">
	<!-- BEGIN: loop_album -->
	<div class="col-xs-24 col-sm-12 col-md-8">		
	<div class="box">
		<img src="{ALBUM.thumb}" alt="{ALBUM.name}"/>
		 <div class="box-content">
                    <h3 class="title"><a href="{ALBUM.link}"title="{ALBUM.name}">{ALBUM.name}</a></h3>
                </div>
                <ul class="icon">
                    <li><a href="{ALBUM.link}"title="{ALBUM.name}"><i class="fa fa-link"></i></a></li>
                </ul>
		</a>
	</div>
	</div>
	<!-- END: loop_album -->
</div>
<link rel="stylesheet" href="{NV_BASE_SITEURL}themes/{TEMPLATE}/css/photos.css">
<!-- END: grid -->
<!-- BEGIN: main -->
{FILE "header_only.tpl"}
{FILE "header_extended.tpl"}
 <!-- BEGIN: breadcrumbs -->
<div id="tms_breadcrumbs" style="background-color:#f2f2f2; background-image: url({NV_BASE_SITEURL}uploads/{MODULE_BG}.jpg); background-size: cover;
    background-position: center center;background-repeat: no-repeat;"> 
<div class="wraper">
<div class="container">
<ul>
<li><a href="{BREADCRUMBS.link}" title="{BREADCRUMBS.title}">{BREADCRUMBS.title}</a></li>
</ul>                                                   
</div>
</div>
</div>
<ul class="temp-breadcrumbs hidden"style="display:none" itemscope itemtype="https://schema.org/BreadcrumbList">
                                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="{THEME_SITE_HREF}" itemprop="item" title="{LANG.Home}"><span itemprop="name">{LANG.Home}</span></a><i class="hidden" itemprop="position" content="1"></i></li>
                                            <!-- BEGIN: loop --><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="{BREADCRUMBS.link}" itemprop="item" title="{BREADCRUMBS.title}"><span class="txt" itemprop="name">{BREADCRUMBS.title}</span></a><i class="hidden" itemprop="position" content="{BREADCRUMBS.position}"></i></li><!-- END: loop -->
                                        </ul>

<!-- END: breadcrumbs -->

<div class="wraper">
<div class="container tms_top">
                 
                    [THEME_ERROR_INFO]
<div class="row">
	[HEADER]
</div>
<div class="row">
	<div class="col-md-24">
		[TOP]
		{MODULE_CONTENT}
		[BOTTOM]
	</div>
</div>
<div class="row">
	[FOOTER]
</div>
</div>
</div>

{FILE "footer_extended.tpl"}
{FILE "footer_only.tpl"}
<!-- END: main -->
<!-- BEGIN: main -->
<div id="company_info">
<ul style="padding:0; margin:0" itemscope itemtype="http://schema.org/LocalBusiness">
    <li class="hide hidden"><span itemprop="image">{SITE_LOGO}</span><span itemprop="priceRange">N/A</span></li>
    <!-- BEGIN: company_name -->
	<li id="company_name"itemprop="name"><strong>{DATA.company_name}</strong>
	<!-- BEGIN: company_sortname --> ({DATA.company_sortname})
	<!-- END: company_sortname -->
	</li>
	<!-- END: company_name -->

    <!-- BEGIN: company_regcode --><li><span><em class="fa fa-file-text"></em></span>{LANG.company_regcode}: {DATA.company_regcode}
	<!-- BEGIN: company_regplace --> - {DATA.company_regplace}<!-- END: company_regplace -->
	
	</li>
	<!-- END: company_regcode -->
	
    <!-- BEGIN: company_responsibility --><li itemprop="founder" itemscope itemtype="http://schema.org/Person"><span><em class="fa fa-flag"></em></span>{LANG.company_responsibility}: {DATA.company_responsibility}</li><!-- END: company_responsibility -->
    
	<!-- BEGIN: company_address --><li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span><em class="fa fa-map-marker"></em>  </span>{LANG.company_address}: {DATA.company_address}</a></li><!-- END: company_address -->
	
    <!-- BEGIN: company_phone --><li itemprop="telephone" itemscope itemtype="http://schema.org/Person"><span><em class="fa fa-phone"></em></span>{LANG.company_phone}: <!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><!-- BEGIN: href --><a href="tel:{PHONE.href}" itemprop="telephone"><!-- END: href -->{PHONE.number}<!-- BEGIN: href2 --></a><!-- END: href2 --><!-- END: item --></li><!-- END: company_phone -->
	<!-- BEGIN: company_hotline --><li><span><em class="fa fa-phone"></em></span>{LANG.company_hotline}: <!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><!-- BEGIN: href --><a href="tel:{HOTLINE.href}"itemprop="telephone"><!-- END: href -->{HOTLINE.number}</span><!-- BEGIN: href2 --></a><!-- END: href2 --><!-- END: item --></li><!-- END: company_hotline -->
		
    <!-- BEGIN: company_fax --><li itemprop="faxNumber"><span><em class="fa fa-fax"></em></span>{LANG.company_fax}: {DATA.company_fax}</li><!-- END: company_fax -->
    <!-- BEGIN: company_email --><li><span><em class="fa fa-envelope"></em></span>{LANG.company_email}: <!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="mailto:{EMAIL}" itemprop="email">{EMAIL}</a><!-- END: item --></li><!-- END: company_email -->
    <!-- BEGIN: company_website --><li><span><em class="fa fa-globe"></em></span>{LANG.company_website}: <!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="{WEBSITE}" target="_blank"itemprop="url">{WEBSITE}</a><!-- END: item --></li><!-- END: company_website -->
</ul>

	</div>

<!-- END: main -->
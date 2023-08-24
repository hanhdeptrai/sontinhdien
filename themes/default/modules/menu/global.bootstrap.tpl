<!-- BEGIN: submenu -->
<ul class="sub-menu">
    <!-- BEGIN: loop -->
    <li
        <!-- BEGIN: submenu -->class="dropdown-submenu"<!-- END: submenu -->> <!-- BEGIN: icon --> <img src="{SUBMENU.icon}" />&nbsp; <!-- END: icon --> <a href="{SUBMENU.link}" title="{SUBMENU.note}"{SUBMENU.target}><i class="fa fa-angle-right"></i> {SUBMENU.title_trim}</a> <!-- BEGIN: item --> {SUB} <!-- END: item -->
    </li>
    <!-- END: loop -->
</ul>
<!-- END: submenu -->

<!-- BEGIN: main -->
 <nav class="wsmenu clearfix">
    <ul class="wsmenu-list">
      <!-- BEGIN: top_menu -->
      <li aria-haspopup="true">
	  <a href="{TOP_MENU.link}"  title="{TOP_MENU.note}"{TOP_MENU.target}>{TOP_MENU.title_trim}<!-- BEGIN: has_sub --><span class="wsarrow"></span><!-- END: has_sub --></a>
        <!-- BEGIN: sub --> {SUB} <!-- END: sub -->
      </li>
    <!-- END: top_menu -->
    </ul>
  </nav>
  
  

<!-- END: main -->
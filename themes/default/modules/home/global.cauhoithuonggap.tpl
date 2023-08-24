<!-- BEGIN: main -->
<div class="tms_block_home_title"><h2>{BLOCK_TITLE}</h2></div>
<div class="tms_block_home_i"></div>
<div class="tms_block_home_text">{BLOCK_HOME_TEXT}</div>
<div class="clearfix"></div>

<div id="accordion1" class="panel-group accordion">
		<!-- BEGIN: loop -->
<div class="panel">
                    <div class="panel-title">
                        <a class="collapsed" data-parent="#accordion1" data-toggle="collapse" href="#{ROW.id}" aria-expanded="false"> <span class="open-sub"></span> {ROW.title}</a> 
                    </div>
                    <div id="{ROW.id}" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                        <div class="panel-content">
                            <p>{ROW.description}</p>
                        </div>
                    </div>
                </div>
		<!-- END: loop -->  
    </div>
		

<!-- END: main -->
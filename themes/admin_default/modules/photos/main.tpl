<!-- BEGIN: main -->
<link type="text/css" href="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<div id="content"> 
	<!-- BEGIN: success -->
		<div class="alert alert-success">
			<i class="fa fa-check-circle"></i> {SUCCESS}
		</div>
	<!-- END: success -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" style="float:left"><i class="fa fa-list"></i> {LANG.album_list}</h3> 
			 <div class="pull-right">
				<a href="{ADD_NEW}" data-toggle="tooltip" data-placement="top" title="{LANG.add_new}" class="btn btn-success"><i class="fa fa-plus"></i></a>
				<button type="button" data-toggle="tooltip" data-placement="top" title="{LANG.delete}" class="btn btn-danger" id="button-delete">
					<i class="fa fa-trash-o"></i>
				</button>
			</div>
			<div style="clear:both"></div>
		</div>
		<div class="panel-body">
			<div class="well">
				<div class="row">	
					<form action="{NV_BASE_ADMINURL}index.php" method="get">
					<input type="hidden" name ="{NV_NAME_VARIABLE}"value="{MODULE_NAME}" />
					<input type="hidden" name ="{NV_OP_VARIABLE}"value="{OP}" />
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="filter_name" value="{DATA.filter_name}" placeholder="{LANG.album_name}" id="input-album-name" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select name="filter_status" id="input-status" class="form-control">
								<option value="">{LANG.album_status}</option>
								<!-- BEGIN: filter_status -->
								<option value="{STATUS.key}" {STATUS.selected}>{STATUS.name}</option>
								<!-- END: filter_status -->
							</select>
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group ">
							<input type="text" name="filter_date_added" value="{DATA.filter_date_added}" placeholder="{LANG.album_date_added}" id="input-date-album" class="form-control">
						</div>	
					</div>
						<input type="hidden" name ="checkss" value="{TOKEN}" />
					<div class="col-md-6">	
						<div class="form-group">
							<button type="submit" id="button-filter" class="btn btn-primary pull-right" data-toggle="tooltip" title="{LANG.search}"><i class="fa fa-search"></i> {LANG.search}</button>
						</div>
				</div>
					</form>
				</div>
			</div>
		
			<form action="" method="post" enctype="multipart/form-data" id="form-album">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center" ><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
								<td class="text-left"style="width:30%"><a href="{URL_NAME}"><strong>{LANG.album_name}</strong></a> </td>
								<td class="text-center"><strong>{LANG.album_upload_author}</strong></td>
								
								<td class="text-center"><a href="{URL_WEIGHT}"><strong>{LANG.album_num_photo}</strong></a></td>
								<td class="text-center"><strong>{LANG.album_status} </strong></td>
								<td class="text-center"><strong>{LANG.album_hot} </strong></td>
								<td class="text-center"><a href="{URL_DATE}"><strong>{LANG.album_date_added}</strong></a></td>
								<td class="text-center"><strong>{LANG.action} </strong></td>
							</tr>
						</thead>
						<tbody>
							<!-- BEGIN: loop --> 
							<tr id="group_{LOOP.album_id}">
								<td class="text-left"><input type="checkbox" name="selected[]" value="{LOOP.album_id}"></td>
								<td class="text-left">
								<a href="{LOOP.link}"> <strong>{LOOP.name}</strong></a>
								<a href="{LOOP.link_out}" target="_blank"><i class="fa fa-external-link"></i></a> 
								</td>
								<td class="text-center">
								{LOOP.author_upload}
								</td>
								
								<td align="center">
									{LOOP.num_photo}
								</td>	
								<td class="text-center">
									<select class="form-control" id="id_status_{LOOP.album_id}" onchange="nv_change_album('{LOOP.album_id}','status');">
										<!-- BEGIN: status -->
										<option value="{STATUS.key}"{STATUS.selected}>{STATUS.name}</option>
										<!-- END: status -->
									</select>
								</td>	
								<td class="text-center">
									<select class="form-control" id="id_hot_{LOOP.album_id}" onchange="nv_change_hot('{LOOP.album_id}','hot');">
										<!-- BEGIN: hot -->
										<option value="{HOT.key}"{HOT.selected}>{HOT.name}</option>
										<!-- END: hot -->
									</select>
								</td>
								<td align="center">
									{LOOP.date_added}
								</td>
								<td class="text-center">
									<a href="{LOOP.edit}" data-toggle="tooltip" title="{LANG.edit}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
									&nbsp;&nbsp;
									<a href="javascript:void(0);" onclick="delete_album('{LOOP.album_id}', '{LOOP.token}')" data-toggle="tooltip" title="{LANG.delete}" class="btn btn-danger"><i class="fa fa-trash-o"></i>
								</td>
							</tr>
							<!-- END: loop -->
						</tbody>
					</table>
				</div>
			</form>
			<!-- BEGIN: generate_page -->
			<div class="row">
				<div class="col-sm-12 text-left">
					<div style="clear:both"></div>
					{GENERATE_PAGE}
				</div>
			</div>
			<!-- END: generate_page -->
		</div>
		<div id="cat-delete-area">&nbsp;</div>
	</div>
</div>

<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/language/jquery.ui.datepicker-{NV_LANG_INTERFACE}.js"></script>


<script type="text/javascript">
var url_search = '{URL_SEARCH}';
var lang_del_confirm = '{LANG.confirm}';
var lang_please_select_one = '{LANG.please_select_one}';
var del_token = '{TOKEN}';
// Calendar */
$('#input-date-album').datepicker({
	showOn : "both",
	dateFormat : "dd/mm/yy",
	changeMonth : true,
	changeYear : true,
	showOtherMonths : true,
	buttonImage : nv_base_siteurl + "assets/images/calendar.gif",
	buttonImageOnly : true
});
</script>

<!-- END: main -->
<!-- BEGIN: MAIN -->
<div class="block">	

	<table class="cells">
		<!-- BEGIN: ACC_ROW -->
		<tr>
			<td><a href="{ACC_ROW_USER_DETAILSLINK}">{ACC_ROW_USER_NAME}</a></td>
			<td>{ACC_ROW_EXPIRE|cot_date('d.m.Y', $this)}</td>
			<td><a href="{ACC_ROW_USER_ID|cot_url('admin', 'm=other&p=payacc&a=delete&id='$this)}">{PHP.L.Delete}</a></td>
		</tr>
		<!-- END: ACC_ROW -->
	</table>
</div>

<div class="block">	
	<h3>{PHP.L.payacc_addproacc}:</h3>
	{FILE "{PHP.cfg.themes_dir}/{PHP.cfg.defaulttheme}/warnings.tpl"}
	<form action="{ACC_FORM_ACTION_URL}" method="POST" class="form-horizontal">
		{PHP.L.Username}: {ACC_FORM_SELECTUSER} {ACC_FORM_PERIOD} {PHP.L.payacc_month}
		<button class="btn btn-success">{PHP.L.Add}</button>
	</form>
</div>

<!-- END: MAIN -->
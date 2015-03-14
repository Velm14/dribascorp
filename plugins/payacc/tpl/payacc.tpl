<!-- BEGIN: MAIN -->

<div class="breadcrumb">{PHP.L.payacc_buyacc_title}</div>

<div class="row">
	<div class="span9">
		{FILE "{PHP.cfg.themes_dir}/{PHP.cfg.defaulttheme}/warnings.tpl"}
		<form action="{ACC_FORM_ACTION}" method="post">
			<table class="table">
				<tr>
					<td width="220">{PHP.L.payacc_costofmonth}:</td>
					<td>{ACC_FORM_COST} {PHP.cfg.plugin.payacc.blacost} {PHP.cfg.payments.valuta}</td>
				</tr>
				<tr>
					<td>{PHP.L.payacc_error_months}:</td>
					<td>{ACC_FORM_PERIOD} {PHP.L.payacc_month}</td>
				</tr>
				<!-- IF {ACC_FORM_USER_NAME} -->
				<tr>
					<td>{PHP.L.payacc_giftfor}:</td>
					<td>{ACC_FORM_USER_NAME}</td>
				</tr>
				<!-- ENDIF -->
				<tr>
					<td></td>
					<td><button class="btn btn-success">{PHP.L.payacc_buy}</button></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<!-- END: MAIN -->
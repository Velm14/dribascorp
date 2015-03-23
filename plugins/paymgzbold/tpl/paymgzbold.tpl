<!-- BEGIN: MAIN -->

<div class="breadcrumb">{PHP.L.paymgzbold_buy_title}</div>

<div class="row">
	<div class="span9">
		{FILE "{PHP.cfg.themes_dir}/{PHP.cfg.defaulttheme}/warnings.tpl"}
		<div class="customform">
			<form action="{PAY_FORM_ACTION}" method="post">
				<table class="table">
					<tr>
						<td width="220">{PHP.L.paymgzbold_costofday}:</td>
						<td>{PAY_FORM_COST} {PHP.cfg.plugin.paymgzbold.cost} {PHP.cfg.payments.valuta}</td>
					</tr>
					<tr>
						<td>{PHP.L.paymgzbold_error_days}:</td>
						<td>{PAY_FORM_PERIOD} {PHP.L.paymgzbold_day}</td>
					</tr>
					<tr>
						<td></td>
						<td><button class="btn btn-success">{PHP.L.paymgzbold_buy}</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>

<!-- END: MAIN -->
<!-- BEGIN: MAIN -->

<div class="row">
	<div class="span12">
		<!-- IF {PHP.cot_plugins_active.paytop} -->
		{PHP|cot_get_paytop ('top')}
		<!-- ENDIF -->	
	</div>
</div>
<div class="row">
	<div class="span3">
		<div class="well well-small">{PROJECTS_CATALOG}</div>
		
		<!-- IF {PHP.cot_plugins_active.userpoints} -->
		<h4 class="mboxHD">{PHP.L.userpoints_toppro}</h4>
		{PHP|cot_get_pro (4, 5)}
		<br/>
		<!-- ENDIF -->
		
		<!-- IF {INDEX_NEWS} -->
		<br/>
		<br/>
		<div class="block">
			{INDEX_NEWS}
		</div>
		<!-- ENDIF -->
	</div>
	<div class="span6">
		{PROJECTS_SEARCH}
		
		<!-- IF {PHP.cot_plugins_active.paypro} -->
			<!-- IF !{PHP|cot_getuserpro()} AND {PHP.cfg.plugin.paypro.projectslimit} > 0 AND {PHP.cfg.plugin.paypro.projectslimit} <= {PHP.usr.id|cot_getcountprjofuser($this)} -->
			<div class="alert alert-warning">{PHP.L.paypro_warning_projectslimit_empty}</div>
			<!-- ENDIF -->
		<!-- ENDIF -->
		
		{PROJECTS}
	</div>
    <div class="span3">
        <h4 class="mboxHD">{PHP.L.userpoints_products}</h4>
        {PHP|cot_get_products (4, 5)}
        <br/>
        <a href="/index.php?e=market">{PHP.L.userpoints_watchall}</a>
    </div>
</div>
	
<!-- END: MAIN -->
<!-- BEGIN: MAIN -->
<div class="breadcrumb">{PRD_TITLE}</div>
<h1><!-- IF {PRD_COST} > 0 --><div class="pull-right cost">{PRD_COST} {PHP.cfg.payments.valuta}</div><!-- ENDIF -->{PRD_SHORTTITLE}</h1>
<!-- IF {PRD_STATE} == 2 -->
<div class="alert alert-warning">{PHP.L.market_forreview}</div>
<!-- ENDIF -->
<!-- IF {PRD_STATE} == 1 -->
<div class="alert alert-warning">{PHP.L.market_hidden}</div>
<!-- ENDIF -->
<div class="row">
	<div class="span9">
		<div class="media">
			<!-- IF {PRD_MAVATAR.1} -->
			<div class="pull-left">
				<a href="{PRD_MAVATAR.1.FILE}"><div class="thumbnail"><img src="{PRD_MAVATAR.1|cot_mav_thumb($this, 200, 200, crop)}" /></div></a>


				<!-- IF {PRD_MAVATARCOUNT} -->
				<p>&nbsp;</p>
				<div class="row">
					<!-- FOR {KEY}, {VALUE} IN {PRD_MAVATAR} -->
					<!-- IF {KEY} != 1 -->
					<a href="{VALUE.FILE}" class="span1 pull-left"><img src="{VALUE|cot_mav_thumb($this, 200, 200, crop)}" /></a>
					<!-- ENDIF -->
					<!-- ENDFOR -->
				</div>
				<!-- ENDIF -->
			</div>
			<!-- ENDIF -->
			<p class="date">[{PRD_DATE}]</p>
			<p class="location">{PRD_COUNTRY} {PRD_REGION} {PRD_CITY}</p>
			<p class="text">{PRD_TEXT}</p>
			<!-- IF {PRD_COST} > 0 AND {PRD_STATE} == 0 -->
				<p>&nbsp;</p>
				<!-- IF {PHP.cot_plugins_active.marketorders} AND {PHP|cot_auth('plug', 'marketorders', 'R')} -->
				<p><a class="btn btn-large btn-success" href="{PRD_ID|cot_url('marketorders', 'm=neworder&pid='$this)}">{PHP.L.marketorders_neworder_button}</a></p>
				<!-- ENDIF -->
			<!-- ENDIF -->
		</div>
	</div>
	<div class="span3">
		<div class="row">
			<div class="span1">{PRD_OWNER_AVATAR}</div>
			<div class="span2">
				<div class="pull-right"><span class="label label-info">{PRD_OWNER_USERPOINTS}</span></div>
				<div class="owner">
                    <!-- IF {PRD_OWNER_ISPRO} OR {PRD_OWNER_ISACC} -->
                    {PRD_OWNER_NAME}
                    <!-- ELSE -->
                    {PRD_OWNER_FULL_NAME}
                    <!-- ENDIF -->
                </div>
			</div>
		</div>
		<!-- IF {PRD_USER_IS_ADMIN} -->
		<div class="well well-small">
			{PRD_ADMIN_EDIT} &nbsp;
			<!-- IF {PRD_STATE} != 2 -->
				<a href="{PRD_HIDEPRODUCT_URL}">{PRD_HIDEPRODUCT_TITLE}</a>
			<!-- ENDIF -->
		</div>
		<!-- ENDIF -->
	</div>
</div>

<!-- END: MAIN -->
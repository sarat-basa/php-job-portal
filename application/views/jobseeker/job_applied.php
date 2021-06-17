<section class="content">
	<div class="container-fluid ">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="tabDistrictView">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<div class="panel-title">Applied Job</div>
							</div>
							<div class="panel-body">
								<input type="hidden" id="hid_session_code" name="hid_session_code" value="<?=isset($_SESSION['user_code'])?$_SESSION['user_code'] : '' ?>">
								<div class="row form-group">
									<div class="col-md-12">
										<table id="tblJobApplied" class="table table-bordered table-hover">
								    </table>
					              	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="./service/master-controller.js"></script>
<script type="text/javascript">
	masteJs.searchJobApplied();
</script>
<section class="content">
	<div class="container-fluid ">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="tabDistrictView">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<div class="panel-title">Job Search</div>
							</div>
							<div class="panel-body">
								<input type="hidden" id="hid_session_code" name="hid_session_code" value="<?=isset($_SESSION['user_code'])?$_SESSION['user_code'] : '' ?>">
								<!-- <div class="row">
									<div class="form-group col-md-2">
										<label for='th_desg' >Company Name</label>
										<input type="text" class="form-control" name="job_name" id="job_name" value="" required="" autocomplete="off">
									</div>
									<div class="form-group col-md-2">
										<label for='th_desg' >Location</label>
										<input type="text" class="form-control" name="job_name" id="job_name" value="" required="" autocomplete="off">
									</div>
									<div class="form-group col-md-2">
										<label for='th_desg' >Skils</label>
										<input type="text" class="form-control" name="job_name" id="job_name" value="" required="" autocomplete="off">
									</div>
									<div class="form-group col-md-2">
										<label for='th_desg' >Qaulification</label>
										<input type="text" class="form-control" name="job_name" id="job_name" value="" required="" autocomplete="off">
									</div>
									<div class="form-group col-md-2">
										<button type="button" id="btn_submit" class="btn btn-success" style="margin-top: 20px;" onclick="masteJs.searchJob()" ><i class="fa fa-search"></i> Search</button>
									</div>
								</div> -->
								 <div class="row form-group">
									<div class="col-md-12">
										<table id="tblJobSearch" class="table table-bordered table-hover">
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
	masteJs.searchJobPost();
</script>
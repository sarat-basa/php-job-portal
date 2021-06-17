<section class="content">
	<div class="container-fluid ">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="tabDistrictView">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<div class="panel-title">Job Post
									<div class="pull-right">
										<button type="button" class="btn btn-info btn-sm" id="myBtn" data-toggle="modal" data-target="#jobpostModal"><i class="fa 
										fa-plus"></i> Add</button>
									</div>
								</div>
							</div>
							<div class="panel-body">
								 <div class="row form-group">
									<div class="col-md-12">
										<table id="tblJobPost" class="table table-bordered table-hover">
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
 <div class="modal fade" id="jobpostModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Job Post</h4>
        </div>
        <div class="modal-body">
        	<form id="frm_job_post" name="frm_job_post">
        		<input type="hidden" id="edit_id" name="edit_id">
	        	<div class="row">
		        	<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Job Name</label>
						<input type="text" class="form-control" name="job_name" id="job_name" value="" required="" autocomplete="off">
					</div>
					<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Job Type</label>
						<select class="form-control" id="job_type" name="job_type">
							<option value="">Select</option>
							<option value="1">Permanent</option>
							<option value="2">Part Time</option>
							<option value="3">Tranee</option>
						</select>
					</div>
				</div>
				<div class="row">
		        	<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>No. Of Vacancies</label>
						<input type="text" class="form-control" name="vacancies" id="vacancies" value="" required="" autocomplete="off">
					</div>
					<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Job Location</label>
						<input type="text" class="form-control" name="location" id="location" value="" required="" autocomplete="off">
					</div>
				</div>
				<div class="row">
		        	<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Qualification</label>
						<select class="form-control" id="job_qualification" name="job_qualification">
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Salary</label>
						<input type="text" class="form-control" name="salary" id="salary" value="" required="" autocomplete="off">
					</div>
				</div>
				<div class="row">
		        	<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Minimum Experence</label>
						<input type="text" class="form-control" name="min_exp" id="min_exp" value="" required="" autocomplete="off">
					</div>
					<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Maxmimum Experence</label>
						<input type="text" class="form-control" name="max_exp" id="max_exp" value="" required="" autocomplete="off">
					</div>
				</div>
				<div class="row">
		        	<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span> Publish Date</label>
						<input type="text" class="form-control datepicker" readonly="" name="start_date" id="start_date" value="" required="" autocomplete="off">
					</div>
					<div class="form-group col-md-6">
						<label for='th_desg' ><span class="text-danger">*</span>Deadline Date</label>
						<input type="text" class="form-control datepicker" readonly="" name="end_date" id="end_date" value="" required="" autocomplete="off">
					</div>
					<div class="form-group col-md-6">
		        		<label for='th_desg' ><span class="text-danger">*</span>Skills</label>
						<select class="form-control" multiple="multiple" id="skills" name="skills[]">
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12">
						<label for='th_desg' ><span class="text-danger">*</span> Job Description</label>
						<textarea rows="3" id="description" name="description" class="form-control"></textarea>
					</div>
				</div>
				<div class="text-right">
		        	<button type="button" id="btn_submit" class="btn btn-success" onclick="masteJs.createJob()" ><i class="fa fa-save"  ></i> Save</button>
		          	<button type="button" class="btn btn-danger" data-dismiss="modal">
		          	<i class="fa fa-close"></i> Close</button>
	          	</div>
          	</form>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript" src="./service/master-controller.js"></script>
<script type="text/javascript">
	masteJs.getJobPost();
	masteJs.getQualification();
	$('.datepicker').datepicker();
	masteJs.getSkills();
</script>
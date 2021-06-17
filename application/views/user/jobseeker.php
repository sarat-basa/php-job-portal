<style>
	.box {
		    position: relative;
		    border-radius: 10px;
		    background: #ffffff;
		    border-top: 3px solid #d2d6de;
		    margin-bottom: 20px;
		    width: 100%;
		    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
		}
	.box-body {
	    border-top-left-radius: 0;
	    border-top-right-radius: 0;
	    border-bottom-right-radius: 3px;
	    border-bottom-left-radius: 3px;
	    padding: 10px;
	}
	.box.box-solid {
	    border-top: 0;
	    height: auto;
	}
	.bux{
	 margin-top: 75px;	
	}
	.mt{
		margin-top: 20px;
	}
</style>
<div class="container bux">
	<div id="data_panel" class="box box-solid">
		<div class="box-body">
			<h4 style="background-color:#E3E3E3; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;font-family: century gothic">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Seeker Registration <span class="pull-right" style="font-weight: bold;color: red;font-size: 10px;">* Marks are Mandatory fields</span>
		</h4>
		<form id="frm_jobseeker" name="frm_jobseeker">
			<div class="row mt">
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label" style=" font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> First Name</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input name="fname" id="fname" class="form-control " type="text" placeholder="First Name">
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style="font-size: 12px;"  >Middle Name</label>
						</div>
						<div class="col-sm-12">
							<input name="mname" id="mname" class="form-control " type="text" placeholder="Middle Name">
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style=" font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Last Name</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input name="lname" id="lname" class="form-control " type="text" placeholder="Last Name">
						</div>
					</div>
				</div> 
			</div>
			<div class="row mt" >
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style=" font-size: 12px;"><span style="font-weight: bold;color: red">*</span> Email Id</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input name="email_id" id="email_id" class="form-control " type="email" placeholder="Enter your email id...">
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Contact Number</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<i class="icon-mobile"></i>
							<input name="cont_no" id="cont_no" class="form-control " type="text" placeholder="Enter your Contact Number" maxlength="10">
						</div>
					</div>
				</div> 
				<div class="col-sm-4">
			    	<div class="form-group">
						<div  class="col-sm-12">
							<label for="" style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Date Of Birth </label>
						</div>
					    <div class="left-inner-addon col-sm-12">
					    	<i class="icon-calendar"></i>
					    	<input type="text" class="form-control" id="dob" name="dob"  placeholder="Enter Your Date Of Birth" readonly=""/>
					    </div>
					</div>
			    </div>
		    </div>

		    <div class="row mt">
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style=" font-size: 12px;"><span style="font-weight: bold;color: red">*</span> Gender</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<select class="form-control " id="gender" name="gender">
					    	</select>
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Category</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<select class="form-control " id="category" name="category">
					    	</select>
						</div>
					</div>
				</div> 
				<div class="col-sm-4">
			    	<div class="form-group">
						<div  class="col-sm-12">
							<label for="" style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span>Physically challenged</label>
						</div>
					    <div class="left-inner-addon col-sm-12">
					    	<select class="form-control " id="ph_chall" name="ph_chall">
					    		<option value="">Select</option>
					    		<option value="1">Yes</option>
					    		<option value="2">No</option>
					    	</select>
					    </div>
					</div>
			    </div>
		    </div>
		    <div class="row mt">
		    	<div class="col-sm-4">
			    	<div class="form-group">
						<div  class="col-sm-12">
							<label for="" style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span>Institute</label>
						</div>
					    <div class="left-inner-addon col-sm-12">
					    	<select class="form-control " id="institute" name="institute">
					    	</select>
					    </div>
					</div>
			    </div>
			    <div class="col-sm-4">
			    	<div class="form-group">
						<div  class="col-sm-12">
							<label for="" style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span>Qualification</label>
						</div>
					    <div class="left-inner-addon col-sm-12">
					    	<select class="form-control " id="qualification" name="qualification">
					    	</select>
					    </div>
					</div>
			    </div>
			    <div class="col-sm-4">
			    	<div class="form-group">
						<div  class="col-sm-12">
							<label for="" style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span>Skills</label>
						</div>
					    <div class="left-inner-addon col-sm-12">
					    	<select class="form-control" multiple="multiple"  id="skills" name="skills[]">
					    	</select>
					    </div>
					</div>
			    </div>
		    	
		    </div>
		    <div class="row">
		    	<div class="form-group mt">
			    	<div class="col-sm-4">
				    	<div class="form-group">
							<div  class="col-sm-12">
								<label for="" style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span>Year of Passing</label>
							</div>
						    <div class="left-inner-addon col-sm-12">
						    	  <?php
	                                $currently_selected = date('Y');
	                               	$earliest_year = 1970;
	                                $latest_year = date('Y');
	                                print '<select class="form-control " id="pass_yr" name="pass_yr"><option value="">Select Year</option>';
	                               	foreach ( range( $latest_year+4, $earliest_year ) as $i ) {
	                                    print '<option value="'.$i.'-'.substr(($i+1),2).'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'-'.substr(($i+1),2).'</option>';
	                                }
	                                print '</select>';
	                                ?>
						    </div>
						</div>
				    </div>
			    </div>
		    </div>
		    <div class="row">
		    	<div class="form-group mt">
					<div class=" col-sm-4 col-xs-12"></div>
					<div class=" col-sm-4 col-xs-12" style="display: inline-block;margin-top: 20px;">
						<button type="button" class="btn btn-primary btn-block btn-flat btn-sm col-sm-6 col-xs-12" id="btn_submit" name="btn_submit" onclick="masteJs.JobSeekerRegister()"><i class="fa fa-paper-plane"></i> Register</button>
					</div>
				</div>
		    </div>
		</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="./service/master-controller.js"></script>
<script type="text/javascript">
	$('#dob').datepicker();
	masteJs.getGender();
	masteJs.getCategory();
	masteJs.getInstitute();
	masteJs.getQualification();
	masteJs.getSkills();
	
</script>
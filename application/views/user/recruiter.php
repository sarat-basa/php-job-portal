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
	    height: 450px;
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
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recruiter Registration <span class="pull-right" style="font-weight: bold;color: red;font-size: 10px;">* Marks are Mandatory fields</span>
		</h4>
		<form id="frm_recruiter" name="frm_recruiter">
			<div class="row mt">
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label" style=" font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Company Name</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input name="txtCompanyName" id="txtCompanyName" class="form-control " type="text" placeholder="Company Name">
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style="font-size: 12px;"  >Office URL</label>
						</div>
						<div class="col-sm-12">
							<input name="txtUrl" id="txtUrl" class="form-control " type="text" placeholder="Office URL">
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style=" font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Location</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input name="txtLocation" id="txtLocation" class="form-control " type="text" placeholder="Location">
						</div>
					</div>
				</div> 
			</div>
			<div class="row mt" >
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style=" font-size: 12px;"><span style="font-weight: bold;color: red">*</span> Company Email-Id</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input name="txtEmailId" id="txtEmailId" class="form-control " type="email" placeholder="Enter Company email id...">
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Contact Number</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input name="txtMobileNo" id="txtMobileNo" class="form-control " type="text" placeholder="Enter your Contact Number" maxlength="10">
						</div>
					</div>
				</div> 
				<div class="col-sm-4">
			    	<div class="form-group">
						<div  class="col-sm-12">
							<label for="" style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Sector </label>
						</div>
					    <div class="left-inner-addon col-sm-12">
					    	<select class="form-control " id="cmbSector" name="cmbSector">
					    		<option value="">Select Sector</option>
					    	</select>
					    </div>
					</div>
			    </div>
		    </div>

		    <div class="row mt">
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style=" font-size: 12px;"><span style="font-weight: bold;color: red">*</span> Document Type</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<select class="form-control " id="cmbDocType" name="cmbDocType">
					    		<option value="">Select Document Type</option>
					    	</select>
						</div>
					</div>
				</div>
				<div  class="col-sm-4">
					<div class="form-group">
						<div  class="col-sm-12">
							<label class="control-label"  style="font-size: 12px;" ><span style="font-weight: bold;color: red">*</span> Document Number</label>
						</div>
						<div class="left-inner-addon col-sm-12">
							<input type="text" class="form-control" id="txtDocNo" name="txtDocNo"  placeholder="Enter Document Number"/>
						</div>
					</div>
				</div>
		    </div>
			<div class="form-group mt">
				<div class=" col-sm-4 col-xs-12"></div>
				<div class=" col-sm-4 col-xs-12" style="display: inline-block;margin-top: 20px;">
					<button type="button" class="btn btn-primary btn-block btn-flat btn-sm col-sm-6 col-xs-12" id="btn_submit" name="btn_submit" onclick="masteJs.RecruiterRegister()"><i class="fa fa-paper-plane"></i> Register</button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="./service/master-controller.js"></script>
<script type="text/javascript">
	masteJs.getDocument();
	masteJs.getSector();
</script>
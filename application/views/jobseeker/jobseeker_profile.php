<section class="content">
	<div class="container-fluid ">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="tabDistrictView">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<div class="panel-title">Profile</div>
							</div>
							<div class="panel-body">
								<div class="row form-group">
									<div class="col-md-12">
										<div class="col-md-4">
											<label>Name : <span><?=$content[0]['full_name']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Email Id : <span><?=$content[0]['email_id']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Contact Number : <span><?=$content[0]['contact_no']?></span></label>
										</div>
					              	</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<div class="col-md-4">
											<label>DOB : <span><?=$content[0]['dob']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Gender : <span><?=$content[0]['gender']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Category : <span><?=$content[0]['category']?></span></label>
										</div>
					              	</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<div class="col-md-4">
											<label>Institute : <span><?=$content[0]['inst_name']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Qualification : <span><?=$content[0]['qual_name']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Physically Challenged : <span><?=$ph_ch?></span></label>
										</div>
					              	</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<div class="col-md-4">
											<label>Year of Passing : <?=$content[0]['pass_yr']?><span></span></label>
										</div>
										<div class="col-md-4">
											<label>Skills:
												<?php
												foreach ($skills as $key => $value) {
													
													echo $value['skill_name'].',' ;
												}
												?>
											</label>
										</div>
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
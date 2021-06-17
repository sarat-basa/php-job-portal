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
											<label>Company Name : <span><?=$content[0]['name']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Office URL : <span><?=$content[0]['url']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Location : <span><?=$content[0]['location']?></span></label>
										</div>
					              	</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<div class="col-md-4">
											<label>Email-Id : <span><?=$content[0]['email_id']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Contact Number : <span><?=$content[0]['contact_no']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Sector : <span><?=$content[0]['sector']?></span></label>
										</div>
					              	</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<div class="col-md-4">
											<label>Document Type : <span><?=$content[0]['document_type']?></span></label>
										</div>
										<div class="col-md-4">
											<label>Document Number : <span><?=$content[0]['document_no']?></span></label>
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
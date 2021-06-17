
var masteJs = {
	//Get Gender List
	getGender: () => {
		$.ajax({
			url: api_path+'get_gender',
			type: 'get',
			async: false,
			success: function(json){
				var html = '';
				html += `<option value="">Select Gender</option>`;
				if(json.status === true) {
					for(i in json.data) {
						html += `<option value="${json.data[i].id}">${json.data[i].description}</option>`;
					}
				}
				$('#gender').html(html);
			}
		});
	},
	//Get Category List
	getCategory: () => {
			$.ajax({
				url: api_path+'get_category',
				type: 'get',
				async: false,
				success: function(json){
					var html = '';
					html += `<option value="">Select Category</option>`;
					if(json.status === true) {
						for(i in json.data) {
							html += `<option value="${json.data[i].id}">${json.data[i].description}</option>`;
						}
					}
					$('#category').html(html);
				}
			});
	},
	//Get Institute
	getInstitute: () => {
		$.ajax({
			url: api_path+'get_institute',
			type: 'get',
			async: false,
			success: function(json){
				var html = '';
				html += `<option value="">Select Institute</option>`;
				if(json.status === true) {
					for(i in json.data) {
						html += `<option value="${json.data[i].inst_code}">${json.data[i].inst_name}</option>`;
					}
				}
				$('#institute').html(html);
			}
		});
	},
	//Get Qualification
	getQualification: () => {
			$.ajax({
				url: api_path+'get_qualification',
				type: 'get',
				async: false,
				success: function(json){
					var html = '';
					html += `<option value="">Select Qualification</option>`;
					if(json.status === true) {
						for(i in json.data) {
							html += `<option value="${json.data[i].qual_code}">${json.data[i].qual_name}</option>`;
						}
					}
					$('#qualification').html(html);
					$('#job_qualification').html(html);
				}
			});
	},
	getSkills: () => {
			$.ajax({
				url: api_path+'get_skills',
				type: 'get',
				async: false,
				success: function(json){
					var html = '';
					if(json.status === true) {
						for(i in json.data) {
							html += `<option value="${json.data[i].skill_code}">${json.data[i].skill_name}</option>`;
						}
					}
					$('#skills').html(html);
					$('#skills').multiselect({
				       	buttonWidth: '325px', 
				       	buttonHeight: '10px', 
				       	includeSelectAllOption: true,
					    enableFiltering: true,
					    //maxHeight: 270,
					    keepOrder: true
				   });
				}
			});
	},
	JobSeekerRegister: () => {
		$("#btn_submit").prop('disabled', true);
		var getForm  = document.getElementById("frm_jobseeker");
	    var form = $('#frm_jobseeker')[0];
		var formData = new FormData(form);
	    $.ajax({
			url: api_path+'register_jobSeeker',
			type: 'POST',
			enctype: 'multipart/form-data',
			processData: false,
            contentType: false,
            cache: false,
			data: formData,
			success: function(json) {
				var html = '';
				if(json.status == true) {
					toastr.success(json.message);
					$('#frm_jobseeker')[0].reset();

					window.setTimeout(function() {
						window.location.href = "./";
					}, 2000);
				}else{
					$("#btn_submit").prop('disabled', false);
					toastr.error(json.message);
					//$('#name_error').html(json.message);
				}
			}
		});
	}, 
	login: () => {
		var getForm  = document.getElementById("login_frm");
	    var form = $('#login_frm')[0];
		var formData = new FormData(form);
	    $.ajax({
			url: api_path+'login',
			type: 'POST',
			enctype: 'multipart/form-data',
			processData: false,
            contentType: false,
            cache: false,
			data: formData,
			success: function(json) {
				var html = '';
				if(json.status == true) {
					toastr.success(json.message);
					window.setTimeout(function() {
						if(json.data === 'JOBSEEKER'){
						window.location.href = "jobseeker_profile";
						}
						else{
							window.location.href = "recruiter_profile";
						}
					}, 2000);
					
					
				}else{
					$("#btn_submit").prop('disabled', false);
					toastr.error(json.message);
				}
			}
		});
	},

	//Get Document List
	getDocument: () => {
		$.ajax({
			url: api_path+'get_document',
			type: 'get',
			async: false,
			success: function(json){
				var html = '';
				html += `<option value="">Select Document Type</option>`;
				if(json.status === true) {
					for(i in json.data) {
						html += `<option value="${json.data[i].id}">${json.data[i].description}</option>`;
					}
				}
				$('#cmbDocType').html(html);
			}
		});
	},
	//Get Sector List
	getSector: () => {
		$.ajax({
			url: api_path+'get_sector',
			type: 'get',
			async: false,
			success: function(json){
				var html = '';
				html += `<option value="">Select Sector</option>`;
				if(json.status === true) {
					for(i in json.data) {
						html += `<option value="${json.data[i].id}">${json.data[i].description}</option>`;
					}
				}
				$('#cmbSector').html(html);
			}
		});
	},
	//register recruiter
	RecruiterRegister: () => {
		$("#btn_submit").prop('disabled', true);
		var getForm  = document.getElementById("frm_recruiter");
	    var form = $('#frm_recruiter')[0];
		var formData = new FormData(form);
	    $.ajax({
			url: api_path+'register_recruiter',
			type: 'POST',
			enctype: 'multipart/form-data',
			processData: false,
            contentType: false,
            cache: false,
			data: formData,
			success: function(json) {
				var html = '';
				if(json.status == true) {
					toastr.success(json.message);
					$('#frm_recruiter')[0].reset();

					window.setTimeout(function() {
						window.location.href = "./";
					}, 2000);
				}else{
					$("#btn_submit").prop('disabled', false);
					toastr.error(json.message);
					//$('#name_error').html(json.message);
				}
			}
		});
	}, 
	getJobPost : () =>{
		//var user_code = localStorage.user_code;
		//if(user_code && user_code != '') {
			$.ajax({
				url: api_path+'get_job_post',
				type: 'get',
				async: false,
				success: function(json) {
					var html = '';
					html += `<thead>
		                <tr>
		                  	<tr>
			                  	<th> Sl.No. </th>
			                 	<th>Job Name</th>
			                 	<th>Job Type</th>
			                 	<th>Vacancy</th>
			                 	<th>Location</th>
			                 	<th>Qualification</th>
			                 	<th>Salary</th>
			                 	<th>Publish Date</th>
			                 	<th>Deadline Date</th>
			                 	<th>Status</th>
								<th>Action</th>
			                </tr>
		                </tr>
	                </thead>
	                <tbody>`;
					if(json.status === true) {
						var slno = 1;
						for(i in json.data) {
							if(json.data[i].job_type == 1)
								job_type = 'Permanent';
							else if(json.data[i].job_type == 2)
								job_type = 'Part Time';
							else 
								job_type = 'Tranee';
							if (json.data[i].job_status == 1){
								job_status = 'Open';
								disabled = ' ';
							}
							else{
								job_status = 'Closed';
								disabled = ' disabled';
							}
							html += `
							<tr>
			                	<td>${slno++}</td>
			                	<td>${json.data[i].job_name}</td>
			                	<td>${job_type}</td>
			                	<td>${json.data[i].vacanices}</td>
			                	<td>${json.data[i].location}</td>
			                	<td>${json.data[i].qual_name}</td>
			                	<td>${json.data[i].salary}</td>
			                	<td>${json.data[i].publish_date}</td>
			                	<td>${json.data[i].deadline_date}</td>
			                	<td>${job_status}</td>`;
			                	html += `<td>
			                		<button type='button' ${disabled} class='btn btn-info btn-circle tooltipTable' align='center' title='Edit' onclick="masteJs.setJobDetails(${json.data[i].job_code})">
			                			<i class='fa fa-pencil-square-o'></i> Edit
		                			</button>
								</td>
							</tr>
							`;
						}
					}
					html += `</tbody>`;
					$('#tblJobPost').html(html);
					$('#tblJobPost').DataTable();
				}
			});
		//} else{
			//location.href = web_path+'logout';
		//}
	},
	createJob: () => {
		$("#btn_submit").prop('disabled', true);
		var getForm  = document.getElementById("frm_job_post");
	    var form = $('#frm_job_post')[0];
		var formData = new FormData(form);
	    $.ajax({
			url: api_path+'job_create',
			type: 'POST',
			enctype: 'multipart/form-data',
			processData: false,
            contentType: false,
            cache: false,
			data: formData,
			success: function(json) {
				var html = '';
				if(json.status == true) {
					toastr.success(json.message);
					$('#frm_job_post')[0].reset();
					$('#jobpostModal').modal('hide');
					$("#tblJobPost").dataTable().fnDestroy();
					masteJs.getJobPost();
				}else{
					$("#btn_submit").prop('disabled', false);
					toastr.error(json.message);
					//$('#name_error').html(json.message);
				}
			}
		});
	}, 
	searchJobPost : () =>{
		var user_code = $('#hid_session_code').val();
		if(user_code && user_code != '') {
			$.ajax({
				url: api_path+'search_job_post',
				type: 'get',
				async: false,
				success: function(json) {
					var html = '';
					html += `<thead>
		                <tr>
		                  	<tr>
			                  	<th> Sl.No. </th>
			                 	<th>Company Name</th>
			                 	<th>Job Name</th>
			                 	<th>Job Type</th>
			                 	<th>Vacancy</th>
			                 	<th>Location</th>
			                 	<th>Qualification</th>
			                 	<th>Skills</th>
			                 	<th>Salary</th>
			                 	<th>Status</th>
								<th>Action</th>
			                </tr>
		                </tr>
	                </thead>
	                <tbody>`;
					if(json.status === true) {
						var slno = 1;
						for(i in json.data) {
							if(json.data[i].job_type == 1)
								job_type = 'Permanent';
							else if(json.data[i].job_type == 2)
								job_type = 'Part Time';
							else 
								job_type = 'Tranee';
							if (json.data[i].job_status == 1){
								job_status = 'Open';
								disabled = ' ';
							}
							else{
								job_status = 'Closed';
								disabled = ' disabled';
							}
							html += `
							<tr>
			                	<td>${slno++}</td>
			                	<td>${json.data[i].name}</td>
			                	<td>${json.data[i].job_name}</td>
			                	<td>${job_type}</td>
			                	<td>${json.data[i].vacanices}</td>
			                	<td>${json.data[i].location}</td>
			                	<td>${json.data[i].qual_name}</td>
			                	<td>${json.data[i].skill_name}</td>
			                	<td>${json.data[i].salary}</td>
			                	<td>${job_status}</td>`;
			                	html += `<td>
			                		<button type='button' ${disabled} class='btn btn-info btn-circle tooltipTable' align='center' title='Edit' onclick="masteJs.applyJob(${json.data[i].job_code})">
			                			<i class='fa fa-paper-plane'></i> Apply
		                			</button>
								</td>
							</tr>
							`;
						}
					}
					html += `</tbody>`;
					$('#tblJobSearch').html(html);
					$('#tblJobSearch').DataTable();
				}
			});
		 } else{
		 	masteJs.logout();
		 }
	},
	searchJobApplied : () =>{
		var user_code = $('#hid_session_code').val();
		if(user_code && user_code != '') {
			$.ajax({
				url: api_path+'job_applied',
				type: 'get',
				async: false,
				success: function(json) {
					var html = '';
					html += `<thead>
		                <tr>
		                  	<tr>
			                  	<th> Sl.No. </th>
			                 	<th>Company Name</th>
			                 	<th>Job Name</th>
			                 	<th>Job Type</th>
			                 	<th>Vacancy</th>
			                 	<th>Location</th>
			                 	<th>Qualification</th>
			                 	<th>Salary</th>
			                 	<th>Status</th>
			                </tr>
		                </tr>
	                </thead>
	                <tbody>`;
					if(json.status === true) {
						var slno = 1;
						for(i in json.data) {
							if(json.data[i].job_type == 1)
								job_type = 'Permanent';
							else if(json.data[i].job_type == 2)
								job_type = 'Part Time';
							else 
								job_type = 'Tranee';
							if (json.data[i].apply_status == 1){
								job_status = 'Applied';

							}
							else if(json.data[i].apply_status == 2){
								job_status = 'Short List';
							}
							else
								job_status = 'Not Short List';
							html += `
							<tr>
			                	<td>${slno++}</td>
			                	<td>${json.data[i].name}</td>
			                	<td>${json.data[i].job_name}</td>
			                	<td>${job_type}</td>
			                	<td>${json.data[i].vacanices}</td>
			                	<td>${json.data[i].location}</td>
			                	<td>${json.data[i].qual_name}</td>
			                	<td>${json.data[i].salary}</td>
			                	<td>${job_status}</td>
							</tr>
							`;
						}
					}
					html += `</tbody>`;
					$('#tblJobApplied').html(html);
					$('#tblJobApplied').DataTable();
				}
			});
		} else{
			//location.href = web_path+'logout';
		}
	},
	appliedJobseeker : () =>{
		//var user_code = $('#hid_session_code').val();
		//if(user_code && user_code != '') {
			$.ajax({
				url: api_path+'applied_jobseeker',
				type: 'get',
				async: false,
				success: function(json) {
					var html = '';
					html += `<thead>
		                <tr>
		                  	<tr>
			                  	<th> Sl.No. </th>
			                 	<th>Job Name</th>
			                 	<th>Jobseeker Name</th>
			                 	<th>Email Id</th>
			                 	<th>Contact No</th>
			                 	<th>Gender</th>
			                 	<th>Dob</th>
			                 	<th>Qualification</th>
			                 	<th>Pass Year</th>
			                 	<th>Status</th>
			                 	<th>Action</th>
			                </tr>
		                </tr>
	                </thead>
	                <tbody>`;
					if(json.status === true) {
						var slno = 1;
						for(i in json.data) {
							if(json.data[i].gender == 1)
								gender = 'Male';
							else if(json.data[i].job_type == 2)
								gender = 'Female';
							else 
								gender = 'other';
							if (json.data[i].apply_status == 1){
								job_status = 'Applied';
								disabled = ' ';
								
							}
							else if(json.data[i].apply_status == 2){
								job_status = 'Approve';
								disabled = ' disabled';
							}
							else{
								job_status = 'Reject';
								disabled = ' disabled';
							}
							html += `
							<tr>
			                	<td>${slno++}</td>
			                	<td>${json.data[i].job_name}</td>
			                	<td>${json.data[i].full_name}</td>
			                	<td>${json.data[i].email_id}</td>
			                	<td>${json.data[i].contact_no}</td>
			                	<td>${gender}</td>
			                	<td>${json.data[i].dob}</td>
			                	<td>${json.data[i].qual_name}</td>
			                	<td>${json.data[i].pass_yr}</td>
			                	<td>${job_status}</td>`;
			                	html += `<td>
			                		<button type='button' ${disabled} class='btn btn-success btn-circle tooltipTable' align='center' title='Edit' onclick="masteJs.approveJobseeker('${json.data[i].job_code}','${json.data[i].appl_code}','approve')">
			                			<i class='fa fa-check'></i> Approve
		                			</button>
		                			<button type='button' ${disabled} class='btn btn-danger btn-circle tooltipTable' align='center' title='Edit' onclick="masteJs.rejectJobseeker('${json.data[i].job_code}','${json.data[i].appl_code}','reject')">
			                			<i class='fa fa-close'></i> Reject
		                			</button>
								</td>
							</tr>
							`;
						}
					}
					html += `</tbody>`;
					$('#tblAppliedJobseeker').html(html);
					$('#tblAppliedJobseeker').DataTable();
				}
			});
		// } else{
		// 	//location.href = web_path+'logout';
		// }
	},
	applyJob : (job_code)=>{
		var status = confirm("Are you sure to apply !!");
		if (status == true) {
			$.ajax({
				url: api_path+'apply_job/'+job_code,
				type: 'POST',
				success: function(json) {
					var html = '';
					if(json.status == true) {
						toastr.success(json.message);
						$("#tblJobSearch").dataTable().fnDestroy();
						masteJs.searchJobPost();
					}else{
						toastr.error(json.message);
						//$('#name_error').html(json.message);
					}
				}
			});
		}
		
	},
	approveJobseeker : (job_code,appl_code,param)=>{
		var status = confirm("Are you sure to approve !!");
		if (status == true) {
			$.ajax({
				url: api_path+'approve_jobseeker/'+job_code+'/'+appl_code+'/'+param,
				type: 'POST',
				success: function(json) {
					var html = '';
					if(json.status == true) {
						toastr.success(json.message);
						$("#tblAppliedJobseeker").dataTable().fnDestroy();
						masteJs.appliedJobseeker();
					}else{
						toastr.error(json.message);
						//$('#name_error').html(json.message);
					}
				}
			});
		}
		
	},

	rejectJobseeker : (job_code,appl_code,param)=>{
		var status = confirm("Are you sure to reject !!");
		if (status == true) {
		    $.ajax({
				url: api_path+'approve_jobseeker/'+job_code+'/'+appl_code+'/'+param,
				type: 'POST',
				success: function(json) {
					var html = '';
					if(json.status == true) {
						toastr.success(json.message);
						$("#tblAppliedJobseeker").dataTable().fnDestroy();
						masteJs.appliedJobseeker();
					}else{
						toastr.error(json.message);
						//$('#name_error').html(json.message);
					}
				}
			});
		} 
		
	},
	setJobDetails: (job_code) => {
		//console.log(id);
		$.ajax({
			url: api_path+'get_job_post/'+job_code,
			type: 'get',
			async: false,
			success: function(json) {
				var html = '';
				if(json.status === true) {
					$("#btn_submit").prop('disabled', false);
					$('#job_name').val(json.data[0].job_name);
					$('#job_type').val(json.data[0].job_type);
					$('#vacancies').val(json.data[0].vacanices);
					$('#location').val(json.data[0].location);
					$('#job_qualification').val(json.data[0].qualification);
					$('#salary').val(json.data[0].salary);
					$('#min_exp').val(json.data[0].min_exp);
					$('#max_exp').val(json.data[0].max_exp);
					$('#start_date').val(json.data[0].publish_date);
					$('#end_date').val(json.data[0].deadline_date);
					$('#description').val(json.data[0].job_profile);
					$('#edit_id').val(json.data[0].job_code);
					$('#jobpostModal').modal('show');

				}else{
					alert(json.message);
				}
			}
		});
	},
	logout : ()=>{
		$.ajax({
			url: api_path+'logout',
			type: 'POST',
			success: function(json) {
				var html = '';
				if(json.status == true) {
					location.href = './';
					toastr.success(json.message);
				}else{
					toastr.error(json.message);
					//$('#name_error').html(json.message);
				}
			}
		});
	}
}

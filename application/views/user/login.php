<!--Login From-->
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-title">
                <i class="fa fa-key"></i>
                Login
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form id="login_frm" name="login_frm">
                         <div class="form-group">
                            <label class="form-control-label"><i class="fa fa-user"></i> user</label>
                            <select class="form-control mt" id="type" name="type">
                                <option value="">Select User</option>
                                <option value="JOBSEEKER">JobSeeker</option>
                                <option value="RECRUITER">Recruiter</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label"> <i class="fa fa-envelope" ></i> email id</label>
                            <input type="text" id="email_id" name="email_id" class="form-control mt" autocomplete="off" placeholder="Enter Email Id...">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label"><i class="fa fa-lock"></i> password</label>
                            <input type="password" id="password" name="password" class="form-control mt" autocomplete="off" placeholder="Enter Password...">
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-button">
                                <button type="button" class="btn btn-primary"  onclick="masteJs.login()">
                                <i class="fa fa-paper-plane"></i> LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="./service/master-controller.js"></script>
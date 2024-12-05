 <section class="content">
      <div class="col-md-9">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="https://rkmm.rayaterp.in/index.php/registration_student/submit_change_password" enctype="multipart/form-data">

              
              					<div class="box-body">
						<div class="row">
						<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group">
								  <label for="exampleInputEmail1">Old Password</label>
								  <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Enter Old Password" onBlur="getOldPassword()"  required>
								</div>							
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<div class="form-group" style="margin-top:30px">
								  <label for="exampleInputEmail1"></label>
									<span name="OldPasswordError" id="OldPasswordError" style="color:red"></span>
								</div>
							</div>
						<div class="col-md-1"></div>
						</div>
						
						<div class="row">
						<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group">
								  <label for="exampleInputEmail1">New Password</label>
								  <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required>
								</div>							
							</div>
						<div class="col-md-1"></div>
						</div>
						
						<div class="row">
						<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group">
								  <label for="exampleInputEmail1">Confirm Password</label>
								  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" onkeyup="getConfirmPassword()" required >
								</div>							
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<div class="form-group" style="margin-top:30px">
								  <label for="exampleInputEmail1"></label>
									<span name="ConfirmPasswordError" id="ConfirmPasswordError" style="color:red"></span>
								</div>
							</div>
						<div class="col-md-1"></div>
						</div>
						
					</div>
              <!-- /.box-body -->

              <div class="box-footer">
				<div class="col-sm-2"></div>
					<div class="col-sm-5">
						<button type="submit" id="submit" name="submit" class="btn btn-success">Submit</button>
					</div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	<script>

						 		<!-- PAGE CONTENT BEGINS -->

							<?php if (isset($_SESSION['success_services'])) {?>


							<div class="alert alert-success"><?php echo $_SESSION['success_services']; ?></div>
							<?php
 							} ?>
											<?php echo validation_errors('<div class="alert alert-danger col-sm-9 col-lg-offset-3">','</div>'); ?>
											<h3>Profile</h3>

								<?php echo form_open_multipart('admin/member'); ?>
								<span class="form-horizontal" role="form">
								
											
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Name {Surname First}<span style="color: red;font-size: 15px;">*</span> </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" autofocus="autofocus"  class="col-xs-10" name="name" required="required" />
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Office Post<span style="color: red;font-size: 15px;">*</span> </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" autofocus="autofocus"  class="col-xs-10" name="post" required="required" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Membership Level<span style="color: red;font-size: 15px;">*</span> </label>

										<div class="col-sm-9">
											<select id="form-field-1" autofocus="autofocus"  class="col-xs-10" name="level" required="required">
												<option value="Staff">staff</option>
												<option value="Board">Board</option>
											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Profile Picture  </label>

										<div class="col-sm-9">
											<input type="file" name="userfile">
											
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Profile </label>

										<div class="col-sm-9">
											<small class="alert-danger">Upload the staff Profile </small> <code>list </li></code>
											<textarea cols="80" rows="10" id="editor1" required="required" placeholder="" name="profile"></textarea>
											
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-save bigger-110"></i>
												Add Profile
											</button>

										</div>
									</div>
								
								</form>

								<script type="text/javascript">
									$(document).ready(function() {
										on
									});
								</script>
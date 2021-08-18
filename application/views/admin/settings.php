
						 		<!-- PAGE CONTENT BEGINS -->

							<?php if (isset($_SESSION['success_product'])) {?>


							<div class="alert alert-success"><?php echo $_SESSION['success_product']; ?></div>
							<?php
 							} ?>
											<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

								<?php echo form_open_multipart('admin/settings'); ?>
								<span class="form-horizontal" role="form">

										
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Web Name <span style="color: red;font-size: 15px;">*</span> </label>

									<div class="col-sm-8">
											<input type="text" id="form-field-1" autofocus="autofocus" placeholder="" class="col-xs-10" name="web_name" value="<?php echo $info['web_name']; ?>" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Web Email <span style="color: red;font-size: 15px;">*</span> </label>

										<div class="col-sm-8">
											<input type="text" id="form-field-1" autofocus="autofocus" placeholder="" class="col-xs-10" name="web_email"  value="<?php echo $info['web_email']; ?>"  />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Phone Number 1</label>

										<div class="col-sm-8">
											<input type="text" id="form-field-1" class="col-xs-10" name="phone1" value="<?php echo $info['phone1']; ?>"   />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Phone Number 2 </label>
										<div class="col-sm-8">
											<input type="text" id="form-field-1" class="col-xs-10" name="phone2" value="<?php echo $info['phone2']; ?>"   />
										</div>
										
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Technical Support Mail </label>

										<div class="col-sm-8">
											<input type="text" id="form-field-1" class="col-xs-10" name="tech_mail" value="<?php echo $info['tech_mail']; ?>"   />
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Address </label>

										<!-- <div class="col-sm-8">
											<label></label>
											<textarea id="editor1" name="address" class="form-control"><?php echo $info['address']; ?></textarea>
										</div> -->

										<div class="col-sm-8">
											<input type="text" id="form-field-1" class="col-xs-10" name="address" value="<?php echo $info['address']; ?>"   />
										</div>
									</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">About </label>

										<div class="col-sm-8">
											<label></label>
											<textarea id="editor1" name="about" class="form-control"><?php echo $info['about']; ?></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Mission </label>

										<div class="col-sm-8">
											<label></label>
											<textarea id="editor2" name="mission" class="form-control"><?php echo $info['mission']; ?></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Vision </label>

										<div class="col-sm-8">
											<label></label>
											<textarea id="editor3" name="vision" class="form-control"><?php echo $info['vision']; ?></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Ideology </label>

										<div class="col-sm-8">
											<label></label>
											<textarea id="editor4" name="ideology" class="form-control"><?php echo $info['ideology']; ?></textarea>
										</div>
									</div>



									<div class="form-group">
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Facebook Link</label>

										<div class="col-sm-8">

											<input type="text" id="form-field-1" class="col-xs-10" name="facebook"  />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Linkdeln</label>
										<div class="col-sm-8">
											<input type="text" id="form-field-1" class="col-xs-10" name="linkedin"  value="<?php echo $info['linkedin']; ?>"  />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Twitter </label>
										<div class="col-sm-8">
											<input type="text" id="form-field-1" class="col-xs-10" name="twitter" value="<?php echo $info['twitter']; ?>"   />
										</div>

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Pin- intrest </label>
										<div class="col-sm-8">
											<input type="text" id="form-field-1" class="col-xs-10" name="pin_instrest" value="<?php echo $info['pin_instrest']; ?>"   />
										</div>
										
									</div>
				

									<div class="space-4"></div>

									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-save bigger-110"></i>
												Save Update
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn btn-danger" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Close
											</button>
										</div>
									</div>
								
								</form>
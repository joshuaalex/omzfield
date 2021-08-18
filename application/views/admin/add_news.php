
						 		<!-- PAGE CONTENT BEGINS -->

							<?php if (isset($_SESSION['success_post'])) {?>


							<div class="alert alert-success"><?php echo $_SESSION['success_post']; ?></div>
							<?php
 							} ?>
											<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

								<?php echo form_open_multipart('admin/add_news'); ?>
								<span class="form-horizontal" role="form">

											
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Post Title <span style="color: red;font-size: 15px;">*</span> </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" autofocus="autofocus" placeholder="Enter the post Title" class="col-xs-10" name="post_title"  />
										</div>
									</div>

										

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Featured Image </label>

										<div class="col-sm-9">
											<input type="file" name="userfile">
											
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Post Body </label>

										<div class="col-sm-9">
											<textarea cols="80" rows="10" id="editor1" name="body"></textarea>
											
										</div>
									</div>



									

									<div class="space-4"></div>

									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-save bigger-110"></i>
												Publish
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn btn-danger" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Close
											</button>
										</div>
									</div>
								
								</form>



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<?php 
				$this->load->view('template/foot');
				 ?>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
										<script>
						                // Replace the <textarea id="editor1"> with a CKEditor
						                // instance, using default configuration.
						                CKEDITOR.replace( 'editor1' );
						                CKEDITOR.replace( 'editor2' );
						                CKEDITOR.replace( 'editor3' );
						                CKEDITOR.replace( 'editor4' );
						                CKEDITOR.replace( 'editor5' );
						            </script>
		<!-- basic scripts -->
										
		<!--[if !IE]> -->
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url(); ?>assets/admin_assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/admin_assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>

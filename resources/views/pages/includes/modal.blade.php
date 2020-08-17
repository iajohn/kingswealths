<div class="modal fade" id="admodal" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-newsletter" role="document">
		<div class="modal-content">
            <form method="post" action="">
            	@csrf
            	<div class="modal-header">
					<h4>Subscribe to our newsletter</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>×</span></button>
				</div>

				<div class="modal-body">
					<p>Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox.</p>
					
	                <div class="widget-column col-lg-12 col-md-12 col-sm-12">
						<div class="footer-widget newsletter-widget">
					        <div class="newsletter-form">
				                <div class="form-group">
				                    <input type="text" name="name" value="" placeholder="Enter Your Fullname" required="" />
				                </div>

				                <div class="form-group">
				                    <input type="email" name="email" value="" placeholder="Enter Your Email" required="" />
				                </div>
				                
				                <div class="form-group">
				                    <button type="submit" class="theme-btn btn-style-one">
				                        <span class="lnr lnr-envelope"></span> Subscribe 
				                    </button>
				                </div>
					        </div>
					    </div>
					</div>
				</div>                
            </form>

			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" type="button"> Cancel </button><br class="visible-xs">
				<br class="visible-xs">
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
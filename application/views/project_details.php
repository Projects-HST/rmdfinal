<section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top no-padding-bottom wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
	<div class="container">
		<div class="row no-padding">
			<!-- section title -->
			<div class="col-md-2 text-center">
				<a href="<?php echo base_url(); ?>home">
					<img src="<?php echo base_url(); ?>assets/rmd.png" class="img-responsive rmd_logo" style="    margin-left: -6px;">
					</a>
							<?php foreach($res_details as $rows_details){}
								if($rows_details->cat_id=='1') { ?>
									<div class="">
										<h3 class="" style="color:#646466;margin-top:20px;text-align:left;margin-left:-5px;">Architecture</h3>
										<ul class="portfolio-filter nav nav-tabs">
											<li class=""><a href="#" id="all">All </a></li>
											<li class=""><a href="#" id="comm">Commercial </a></li>
											<li class="">	<a href="#" id="condominiums">Condominiums</a></li>
											<li class="">	<a href="#" id="hospitality">Hospitality</a></li>
											<li class=""><a href="#" id="industrial">Industrial</a></li>
											<li class=""><a href="#" id="institution">Institutional</a></li>
											<li class=""><a href="#" id="residence">Residences</a></li>
										</ul>
									</div>
								<?php }else{?>
									<div class="">
											<h3 class="" style="color:#646466;margin-top:20px;text-align:left;">Interiors</h3>
											<ul class="portfolio-filter nav nav-tabs">
												<li class="nav"><a href="#" id="all">All </a></li>
												<li class="nav"><a href="#" id="corporate">Corporate </a></li>
												<li class="nav"><a href="#" id="cinemas">Cinemas </a></li>
												<li class="nav"><a href="#" id="hospitality">Hospitality</a></li>
												<li class="nav"><a href="#" id="residence">Residence</a></li>

											</ul>
									</div>
							<?php	} ?>





				</div>
				<div class="col-md-10">
					<div class="row">
						<?php foreach($res_details as $rows_details){} ?>
						<div class="col-md-4">
							<h3 class="area-title text-capitalize  margin-20px-bottom font-weight-300 sm-width-100 xs-width-100"
                                  style="color: #646466;font-size: 30px;margin-bottom: 45px;">
                              <?php echo $rows_details->project_name; ?></h3>
							<br>
								<b>Type :</b>
								<p>Commercial</p>
								<b>Size :</b>
								<p>  <?php echo $rows_details->size; ?></p>
								<b>Address :</b>
								<p><?php echo $rows_details->location; ?>,<?php echo $rows_details->city; ?>
</p>
								<b>Completed :</b>
								<p><?php echo $rows_details->completed; ?></p>
							</div>
							<div class="col-md-8">
								<div class="row ">
									<?php $cnt= count($res_gallery);
									if($cnt=='1'){
										foreach($res_gallery as $rows_gallery){ ?>
									 <div class="col-md-12 project_img ">
										 <div class="gallery-img gallery">
											 <a onclick="showmodal()">
												 <img class="content-image" src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows_gallery->gallery_img; ?>">
												 </a>
											 </div>
										 </div>

							 <?php } }else{
										foreach($res_gallery as $rows_gallery){ ?>
									 <div class="col-md-6 project_img ">
										 <div class="gallery-img gallery">
											 <a onclick="showmodal()">
												 <img class="content-image" src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows_gallery->gallery_img; ?>">
												 </a>
											 </div>
										 </div>

							 <?php }  } ?>





										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<a class="close" data-dismiss="modal" aria-hidden="true" style="color:#fff;font-size:12px;opacity:1;margin-top:8px;">X  </a>
								<h4 class="modal-title" id="myModalLabel">Access House</h4>
							</div>
							<?php 			foreach($res_gallery as $rows_gallery){ ?>
							<div class="col-md-12 img_popup">
								<img src="<?php echo base_url(); ?>assets/gallery/<?php echo $rows_gallery->gallery_img; ?>" class="rounded mx-auto d-block modal_img" alt="">
								</div>
							<?php } ?>

									<div class="modal-footer">
										<button type="button" class="btn btn-default close_btn" data-dismiss="modal" style="margin-right:10px;">Close</button>
									</div>
								</div>
							</div>
						</div>
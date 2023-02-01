       <!-- page content -->
       <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Data Siswa</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form<small>mata pelajaran</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />

<div class="content-wrapper">
<section class="content">
<?php foreach($pelajaran as $id_pelajaran) { ?>

									<form method="POST" action="<?php echo site_url('mapel/edit') ;?>">

										<div class="item form-group">
                                            
                                        <input type="hidden" name="id_pelajaran" required="required" class="form-control" >

											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mata Pelajaran <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="nama_pelajaran" required="required" class="form-control" value="<?php echo $id_pelajaran->nama_pelajaran ;?>">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</form>
 <?php } ?>
        </section>
		</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			

             
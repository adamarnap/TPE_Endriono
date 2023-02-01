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
									<h2>Form<small>data siswa</small></h2>

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
	</br>

<div class="content-wrapper">
	<section class="content">
	

									<form method="POST" action="<?php echo site_url('siswa/edit') ;?>">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Gambar</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="gambar" size="20" required="required">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text"  name="email" required="required" class="form-control" value="<?php echo $siswa->email ;?>">
											</div>
										</div>

										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="password" value="<?php echo $siswa->password ;?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIS</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="NIS" required="required" class="form-control" value="<?php echo $siswa->NIS ;?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Lengkap</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="nama_lengkap" required="required" class="form-control" value="<?php echo $siswa->nama_lengkap ;?>">
											</div>
										</div>

										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kelas</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control from form-control-sm" name="id_kelas">
													<option>--pilih kelas--</option>
													<?php foreach($kelas as $val){ ?>
														<option value="<?php echo $val->id_kelas; ?>">
														<?php echo $val->nama_kelas; ?>
														</option>
													<?php } ?>
												</select>
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

		</section>
		</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			

             
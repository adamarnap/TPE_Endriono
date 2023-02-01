<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Upload </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
              <?php echo $this->session->flashdata('pesan'); ?>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Upload Nilai</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('user_guru/save_nilai') ;?>" class="">
                  <div class="text-center">
					<div class="col-md-6 col-sm-6 offset-md-3">
                    <p>Upload data nilai</p>
                      <input type="text" name="upload_nilai" required="required" class="form-control">

                      <p>NIS</p>
                      <select name="NIS" class="form-control">
                          <option></option>

                          <?php foreach ($siswa as $nilai) { ?>
                          <option value="<?php echo $nilai->NIS?>"><?php echo $nilai->NIS?></option>
                          <?php } ?>

                      </select>

                    

                      <p>Nama Tugas</p>
                      <input type="text" name="keterangan" required="required" class="form-control"><br>
                      
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
					</div>
				    </div>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
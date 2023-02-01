<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Materi </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>File Materi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  
                    <p>Drag multiple files to the box below for multi upload or click to select files.</p>


                    <table class="table table-striped ">
                      <thead>
                        <tr>
                          
                          <th>id_materi</th>
                          <th>materi</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php  foreach ($ujian as $item) {?>
                        <tr>
                          
                          <td><?php echo $item->id_ujian;?></td>
                          <td><?php echo $item->upload_ujian;?></td>
                          <td><a href="<?php echo base_url('index.php/user_siswa/download_ujian/'.$item->upload_ujian); ?>" class="btn btn-warning">Download</a></td>
                         
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
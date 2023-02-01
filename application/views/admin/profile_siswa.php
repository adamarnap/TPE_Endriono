   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Profil Siswa</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
              <?php echo $this->session->flashdata('pesan'); ?>
                <div class="x_panel">
                  <div class="x_title">
                  <a href="<?php echo site_url('siswa/add');?>" class="btn btn-secondary btn-sm">
                      Tambah Data Siswa</a>
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
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No. </th>
                          <th>Gambar</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>NIS</th>
                          <th>Nama Lengkap</th>
                          <th>Kelas</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php 
                        $no = 1;
                        foreach ($siswa as $item) {?>
                        <tr>
                          <td><?=$no++?>.</td>
                          <td><img src="<?php echo base_url(). '/gambarsiswa/'. $item->gambar ?>" width="100"></img></td>
                          <td><?php echo $item->email;?></td>
                          <td><?php echo $item->password;?></td>
                          <td><?php echo $item->NIS;?></td>
                          <td><?php echo $item->nama_lengkap;?></td>
                          <td><?php echo $item->nama_kelas;?></td>
                          <td><a href="<?php echo site_url('siswa/getid/' .$item->NIS); ?>" class="btn btn-warning">Edit</a>
                          <a href="<?php echo site_url('siswa/delete/' .$item->NIS); ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

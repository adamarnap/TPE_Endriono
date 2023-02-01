<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Profile Guru</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12  ">
            <?php echo $this->session->flashdata('pesan'); ?>
                <div class="x_panel">
                  <div class="x_title">
                    <a href="<?php echo site_url('guru/add');?>" class="btn btn-secondary btn-sm">
                      Tambah Data Guru</a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-striped ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Gambar</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>NIG</th>
                          <th>Nama Lengkap</th>
                          <th>Mata Pelajaran</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                         foreach ($guru as $item) {?>
                        <tr>
                          <td><?=$no++?>.</td>
                          <td><img src="<?php echo base_url(). '/gambarguru/'. $item->gambar ?>" width="100"></img></td>
                          <td><?php echo $item->email;?></td>
                          <td><?php echo $item->password;?></td>
                          <td><?php echo $item->NIG;?></td>
                          <td><?php echo $item->nama_lengkap;?></td>
                          <td><?php echo $item->nama_pelajaran;?></td>
                          <td><a href="<?php echo site_url('guru/getid/'.$item->NIG); ?>" class="btn btn-warning">Edit</a>
                          <a href="<?php echo site_url('guru/delete/'.$item->NIG); ?>" class="btn btn-danger">Hapus</a></td>
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
        </div>
        
        <!-- /page content -->
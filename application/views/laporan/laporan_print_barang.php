<!DOCTYPE html>
<html>
  
<!-- Mirrored from coderthemes.com/ubold_2.2/light/components-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2017 14:09:04 GMT -->
<head>

    <title>LABKOM SMAN 1 PARUNG</title>
     <!-- Bootstrap Core CSS -->
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/core.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/component.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/icons.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/pages.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/responsive.css" rel="stylesheet" type="text/css"/>
  
  </head>
  <body onload="window.print();">
    <div class="row">
        <div class="col-sm-3" align="center">  
            <img src="<?php echo base_url('assets/img/logo/logo_atas.png');?>" width="768px" height="100px">
        </div>
                <div class="col-sm-12">
                    <div class="card-box">
                    <h4 class="m-t-0 header-title" style="text-align: center;"><b>LAPORAN INVENTARIS BARANG</b></h4>
                    <p class="text-muted m-b-30 font-13" style="text-align: center;">
                         LABORATORIUM KOMPUTER SMAN 1 PARUNG
                    </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kode Barang</td>
                            <td>Nama Barang</td>
                            <td>Jenis Barang</td>
                            <td>Jumlah</td>
                            
                            <td>Gambar</td>

                        </tr>
                    </thead>
                    <?php $i=1?>
                    <?php foreach($barang->result() as $data):?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><a class="show-modal" href="#"><?php echo $data->kode_barang;?></a></td>
                        <td><?php echo $data->nama_barang;?></td>
                        <td><?php echo $data->jenis_barang; ?></td>
                        <td><?php echo $data->jumlah;?></td>
                        
                        <td><?php if($data->gambar != "") { ?>
                         <img src="<?php echo base_url('assets/img/barang/'.$data->gambar);?>" width="100px" height="100px">
                          <?php }else{ ?>
                         <img src="<?php echo base_url('assets/img/barang/barang-default.jpg');?>" width="100px" height="100px">
                         <?php } ?> 
                          </td>
                    </tr>
                    <?php endforeach;?>
               </table>
                <p class="mr-2" align="right">Bogor,<?php
                echo date('d-m-Y');
                ?></p>
                <br>
               <p align='right'>Wakasek Sarpras</p>
               
                <br>
                <br>
                <br>
                <br>
                <br>
                <p align='right'>.........................</p>
                </div>
              </div>
            </div>
  </body>
</html>
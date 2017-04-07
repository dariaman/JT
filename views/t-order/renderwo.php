<?php

$id = Yii::$app->request->get('id');
$orderId = Yii::$app->request->get('orderid');

$db = (new \yii\db\Query())
        ->select('*')
        ->from('t_order_detail as td')
        ->innerJoin('t_order o','o.orderID = td.orderId')
        ->innerJoin('m_rekan_jt rj','rj.rekanId = td.rekanId')
        ->innerJoin('m_service_detail msd','msd.serviceDetailId = td.serviceDetailId')
        ->innerJoin('m_service ms','ms.serviceId = msd.serviceId')
        ->innerJoin('m_service_kategori msk','msk.serviceKategoriId = msd.serviceKategoriId')
        ->innerJoin('m_kapasitas_detail mkd','mkd.kapasitasId = td.kapasitasId')
        ->where(['td.orderId' => $orderId])
        ->andWhere(['td.orderDetailId' => $id])
        ->one();

$count = (new \yii\db\Query())
        ->select('*')
        ->from('t_order_detail as td')
        ->innerJoin('t_order o','o.orderID = td.orderId')
        ->innerJoin('m_rekan_jt rj','rj.rekanId = td.rekanId')
        ->innerJoin('m_service_detail msd','msd.serviceDetailId = td.serviceDetailId')
        ->innerJoin('m_service ms','ms.serviceId = msd.serviceId')
        ->innerJoin('m_service_kategori msk','msk.serviceKategoriId = msd.serviceKategoriId')
        ->innerJoin('m_kapasitas_detail mkd','mkd.kapasitasId = td.kapasitasId')
        ->where(['td.orderId' => $orderId])
        ->andWhere(['td.orderDetailId' => $id])
        ->count();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div style="padding-top:50px; padding-bottom:-150px;">
            <img src="../web/img/image001.jpg" height="100">
        </div>
        <div style="margin-left:300px; margin-bottom: 30px;">
            <label>Jagonya Tukang</label>
        </div>
        <div style="margin-left:500px;">
            <label>Tanggal Order : <?= date('j F Y',strtotime($db['orderDetailTglKerja'])) ?></label>
        </div>
        <h3 style="margin-left:40%; margin-top: -20px;"><strong><?= strtoupper('work order');?></strong></h3>
        <div style="margin-left:44%;">No. Order OD#<?= $db['orderId'];?></div>
    </section>
    
    <!-- Main content -->
    <section class="invoice">
        <!-- info row -->
        <div class="row invoice-info" style="margin-top:50px;">
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Nama : </strong><?= $db['rekanNamaLengkap'];?><br>
                <strong>Alamat : </strong><?= $db['rekanAlamat'];?><br>
                <strong>Telepon : </strong><?= $db['rekanNoHp'];?><br>
              </address>
            </div>
            <!-- /.col -->
        </div>
      <!-- /.row -->
      
      <!-- Table row -->
      <div class="row">
            <div style="margin-left:15px;">
                <h3>Rincian Jasa</h3>
            </div>
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th style="width:200px;">Jasa</th>
                    <th>Kuantitas</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @for($i=0;$i<$count;$i++)
                <tr>
                    <td><?= $count ?></td>
                    <td><?= $db['serviceKategoriJudul'].' Jasa '.$db['serviceDetailJudul'].' '.$db['kapasitasJudul'] ?></td>
                    <td><?= $db['orderDetailQTY'] ?></td>
                    <td><?= number_format($db['kapasitasHarga']) ?></td>
                    <td><?= number_format($db['orderDetailQTY'] * $db['kapasitasHarga']); ?></td>
                </tr>
                @endfor
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
      <div class="row" style="margin-bottom:-100px;">
        <!-- /.col -->
        <div class="col-xs-6" style="margin-left:415px;">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:150px">Subtotal</th>
                <td> : <?= number_format($db['orderDetailQTY'] * $db['kapasitasHarga']); ?></td>
              </tr>
              <tr>
                <th>Transportasi</th>
                <td> : 0</td>
              </tr>              
              <tr>
                <th>Total</th>
                <td> : <?= number_format($db['orderDetailQTY'] * $db['kapasitasHarga']); ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-xs-12 table-responsive">
        <div>
            <h3>Catatan Order</h3>
        </div>
          <table border="1">            
            <tbody>
                <tr>
                    <td style="width:680px;"><?= 'Tgl Kunj : '.date('dMy').', Teknisi : '.$db['rekanNamaLengkap'].', Note Tech : Pekerjaan '.$db['serviceKategoriJudul'].' selesai'  ?></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xs-12 table-responsive">
        <div>
            <h3>Catatan Teknisi</h3>
        </div>
          <table border="1">            
            <tbody>
                <tr>
                    <td style="width:680px; height:100px;"></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="row">
          <div style="margin-left:15px;">
                <p style="font-size: 8pt;">Dengan menandatangai WO ini, maka saya menyatakan bahwa pekerjaan sesuai dengan work order telah selesai dilaksanakan.</p>
            </div>
        <div style="margin-left:80%; margin-bottom:100px;">
            Mengetahui,
        </div>
        <div style="margin-left:80%;">
            _____________________
        </div>
        <div style="margin-left:80%;">
            Konsumen
        </div>
        <div style="margin-top:-38px;">
            _____________________
        </div>
        <div style="margin-left:45px;">
            Teknisi
        </div>
        <div style="margin-top:30px; margin-left:150px; text-align: center; font-size:8pt; width:400px;" >
            <b>PT. Solusi Sekawan Sejahtera</b> , Jl. Pejompongan Dalam No. 29, Jakarta Pusat 0215793 1331, halo@jagonyatukang.com
        </div>
      </div>
      
      <!-- /.row -->
    </section>
    <div class="clearfix"></div>
</div>

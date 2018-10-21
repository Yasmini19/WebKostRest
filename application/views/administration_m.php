<?php
  $this->load->view('header_m');
?>

<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">Administrasi</h3>
        <span class="w3-sub"></span>
        <div class="wthree-services-bottom-grids">
            <div class="col-md-3 wthree-services-left">
                <img class="img-thumbnail img-administrasi" src="<?php echo base_url()?>assets/images/user4.png" alt="">
            </div>
            <div class="col-md-6 wthree-services-right first-w3l">
                <div class="wthree-services-right-top"><br/>
                    <h4>Nama : James</h4><br/>
                    <h4>E-mail : member@gmail.com</h4><br/>
                    <h4>Tipe Pembayaran : Bulanan</h4><br/>
                    <h4>Status : Aktif</h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div><br><br><br><br>
        <div class="wthree-services-right-top">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h4>History Pembayaran</h4><br><br>
                <form class="form-inline">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="tahun" min="2010" max="2018">
                        </div>
                        <a href="#" class="btn btn-info btn-sm">Tampil</a>
                    </div>
                </form>
                <br>
                <div class="tbl-pembayaran">
                    <div class="table">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr class="tr-pembayaran">
                                  <th>No<span class="glyphicon glyphicon-sort small"></span></th>
                                  <th>Bulan<span class="glyphicon glyphicon-sort small"></th>
                                  <th>Tanggal Pembayaran<span class="glyphicon glyphicon-sort small"></span></th>
                                  <th>Status<span class="glyphicon glyphicon-sort small"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Januari</td>
                                  <td>11/01/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Februari</td>
                                  <td>11/02/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Maret</td>
                                  <td>11/03/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>April</td>
                                  <td>11/04/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Mei</td>
                                  <td>11/05/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Juni</td>
                                  <td>11/06/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>Juli</td>
                                  <td>11/07/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td>Agustus</td>
                                  <td>11/08/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>9</td>
                                  <td>September</td>
                                  <td>11/09/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>10</td>
                                  <td>Oktober</td>
                                  <td>11/10/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>11</td>
                                  <td>November</td>
                                  <td>11/11/2018</td>
                                  <td>Sudah Dibayar</td>
                              </tr>
                              <tr>
                                  <td>12</td>
                                  <td>Desember</td>
                                  <td>11/12/2018</td>
                                  <td>Belum Dibayar</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //about -->

<?php
  $this->load->view('footer_m');
?>

<script type="text/javascript">
    $(document).ready(function() {
        event.preventDefault();
        $('html,body').animate({scrollTop:$('#about').offset().top},1500);
    });
</script>

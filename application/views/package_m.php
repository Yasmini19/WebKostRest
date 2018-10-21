<?php
  $this->load->view('header_m');
?>
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">Data Paket</h3>
        <span class="w3-sub"></span>
        <div class="wthree-services-bottom-grids">
        	<div class="panel panel-primary">
				<div class="panel-body">
                    <div class="table">
                    	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        	<thead>
                                <tr>
                                    <th>No<span class="glyphicon glyphicon-sort small"></span></th>
                                    <th>Nama<span class="glyphicon glyphicon-sort small"></th>
                                    <th>Tanggal Datang<span class="glyphicon glyphicon-sort small"></span></th>
                                    <th>Tanggal Diambil<span class="glyphicon glyphicon-sort small"></span></th>
                                    <th>Status<span class="glyphicon glyphicon-sort small"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ogen</td>
                                    <td>11/01/2018</td>
                                    <td>-</td>
                                    <td>Sudah Diambil</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>hugo</td>
                                    <td>12/01/2018</td>
                                    <td>13/01/2018</td>
                                    <td>Belum Diambil</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>ghally</td>
                                    <td>11/01/2018</td>
                                    <td>-</td>
                                    <td>Sudah Diambil</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>iman</td>
                                    <td>12/01/2018</td>
                                    <td>13/01/2018</td>
                                    <td>Belum Diambil</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>agen</td>
                                    <td>11/01/2018</td>
                                    <td>-</td>
                                    <td>Sudah Diambil</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>bahri</td>
                                    <td>12/01/2018</td>
                                    <td>13/01/2018</td>
                                    <td>Belum Diambil</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>dika</td>
                                    <td>11/01/2018</td>
                                    <td>-</td>
                                    <td>Sudah Diambil</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>carli</td>
                                    <td>12/01/2018</td>
                                    <td>13/01/2018</td>
                                    <td>Belum Diambil</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>sirli</td>
                                    <td>12/01/2018</td>
                                    <td>13/01/2018</td>
                                    <td>Belum Diambil</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>ryan</td>
                                    <td>12/01/2018</td>
                                    <td>13/01/2018</td>
                                    <td>Belum Diambil</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>carli</td>
                                    <td>12/01/2018</td>
                                    <td>13/01/2018</td>
                                    <td>Sudah Diambil</td>
                                </tr>


                            </tbody>
                        </table>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

<?php
  $this->load->view('footer_m');
?>
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        event.preventDefault();
        $('html,body').animate({scrollTop:$('#about').offset().top},1500);
        $('#dataTables-example').dataTable();
    });
</script>

<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Sentitems List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('sentitems/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>UpdatedInDB</th>
		    <th>InsertIntoDB</th>
		    <th>SendingDateTime</th>
		    <th>DeliveryDateTime</th>
		    <th>Text</th>
		    <th>DestinationNumber</th>
		    <th>Coding</th>
		    <th>UDH</th>
		    <th>SMSCNumber</th>
		    <th>Class</th>
		    <th>TextDecoded</th>
		    <th>SenderID</th>
		    <th>Status</th>
		    <th>StatusError</th>
		    <th>TPMR</th>
		    <th>RelativeValidity</th>
		    <th>CreatorID</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($sentitems_data as $sentitems)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $sentitems->UpdatedInDB ?></td>
		    <td><?php echo $sentitems->InsertIntoDB ?></td>
		    <td><?php echo $sentitems->SendingDateTime ?></td>
		    <td><?php echo $sentitems->DeliveryDateTime ?></td>
		    <td><?php echo $sentitems->Text ?></td>
		    <td><?php echo $sentitems->DestinationNumber ?></td>
		    <td><?php echo $sentitems->Coding ?></td>
		    <td><?php echo $sentitems->UDH ?></td>
		    <td><?php echo $sentitems->SMSCNumber ?></td>
		    <td><?php echo $sentitems->Class ?></td>
		    <td><?php echo $sentitems->TextDecoded ?></td>
		    <td><?php echo $sentitems->SenderID ?></td>
		    <td><?php echo $sentitems->Status ?></td>
		    <td><?php echo $sentitems->StatusError ?></td>
		    <td><?php echo $sentitems->TPMR ?></td>
		    <td><?php echo $sentitems->RelativeValidity ?></td>
		    <td><?php echo $sentitems->CreatorID ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('sentitems/read/'.$sentitems->ID),'Read'); 
			echo ' | '; 
			echo anchor(site_url('sentitems/update/'.$sentitems->ID),'Update'); 
			echo ' | '; 
			echo anchor(site_url('sentitems/delete/'.$sentitems->ID),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    </body>
</html>
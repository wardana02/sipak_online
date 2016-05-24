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
                <h2 style="margin-top:0px">Outbox List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('outbox/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>UpdatedInDB</th>
		    <th>InsertIntoDB</th>
		    <th>SendingDateTime</th>
		    <th>SendBefore</th>
		    <th>SendAfter</th>
		    <th>Text</th>
		    <th>DestinationNumber</th>
		    <th>Coding</th>
		    <th>UDH</th>
		    <th>Class</th>
		    <th>TextDecoded</th>
		    <th>MultiPart</th>
		    <th>RelativeValidity</th>
		    <th>SenderID</th>
		    <th>SendingTimeOut</th>
		    <th>DeliveryReport</th>
		    <th>CreatorID</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($outbox_data as $outbox)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $outbox->UpdatedInDB ?></td>
		    <td><?php echo $outbox->InsertIntoDB ?></td>
		    <td><?php echo $outbox->SendingDateTime ?></td>
		    <td><?php echo $outbox->SendBefore ?></td>
		    <td><?php echo $outbox->SendAfter ?></td>
		    <td><?php echo $outbox->Text ?></td>
		    <td><?php echo $outbox->DestinationNumber ?></td>
		    <td><?php echo $outbox->Coding ?></td>
		    <td><?php echo $outbox->UDH ?></td>
		    <td><?php echo $outbox->Class ?></td>
		    <td><?php echo $outbox->TextDecoded ?></td>
		    <td><?php echo $outbox->MultiPart ?></td>
		    <td><?php echo $outbox->RelativeValidity ?></td>
		    <td><?php echo $outbox->SenderID ?></td>
		    <td><?php echo $outbox->SendingTimeOut ?></td>
		    <td><?php echo $outbox->DeliveryReport ?></td>
		    <td><?php echo $outbox->CreatorID ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('outbox/read/'.$outbox->ID),'Read'); 
			echo ' | '; 
			echo anchor(site_url('outbox/update/'.$outbox->ID),'Update'); 
			echo ' | '; 
			echo anchor(site_url('outbox/delete/'.$outbox->ID),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Outbox Read</h2>
        <table class="table">
	    <tr><td>UpdatedInDB</td><td><?php echo $UpdatedInDB; ?></td></tr>
	    <tr><td>InsertIntoDB</td><td><?php echo $InsertIntoDB; ?></td></tr>
	    <tr><td>SendingDateTime</td><td><?php echo $SendingDateTime; ?></td></tr>
	    <tr><td>SendBefore</td><td><?php echo $SendBefore; ?></td></tr>
	    <tr><td>SendAfter</td><td><?php echo $SendAfter; ?></td></tr>
	    <tr><td>Text</td><td><?php echo $Text; ?></td></tr>
	    <tr><td>DestinationNumber</td><td><?php echo $DestinationNumber; ?></td></tr>
	    <tr><td>Coding</td><td><?php echo $Coding; ?></td></tr>
	    <tr><td>UDH</td><td><?php echo $UDH; ?></td></tr>
	    <tr><td>Class</td><td><?php echo $Class; ?></td></tr>
	    <tr><td>TextDecoded</td><td><?php echo $TextDecoded; ?></td></tr>
	    <tr><td>MultiPart</td><td><?php echo $MultiPart; ?></td></tr>
	    <tr><td>RelativeValidity</td><td><?php echo $RelativeValidity; ?></td></tr>
	    <tr><td>SenderID</td><td><?php echo $SenderID; ?></td></tr>
	    <tr><td>SendingTimeOut</td><td><?php echo $SendingTimeOut; ?></td></tr>
	    <tr><td>DeliveryReport</td><td><?php echo $DeliveryReport; ?></td></tr>
	    <tr><td>CreatorID</td><td><?php echo $CreatorID; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('outbox') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>
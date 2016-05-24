<!doctype html>
<html>
    <head>
       
    </head>
    <body>
        <h2 style="margin-top:0px">Baca Data SMS</h2>
        <table class="table">
	   
	    <tr><td>Insert Date Time</td><td><?php echo $InsertIntoDB; ?></td></tr>
	    <tr><td>Sending Date Time</td><td><?php echo $SendingDateTime; ?></td></tr>
	    <tr><td>Destination Number</td><td><?php echo $DestinationNumber; ?></td></tr>
	    
	    <tr><td>Dlifery Date Time</td><td><?php echo $DeliveryDateTime; ?></td></tr>
	    <tr><td>Message Text</td><td><?php echo $TextDecoded; ?></td></tr>


	    <tr><td>Status Time</td><td><?php echo $Status; ?></td></tr>

	    
	   </table>
        </body>
</html>
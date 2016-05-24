<!doctype html>
<html>
    <head>
       
    </head>
    <body>
        <h2 style="margin-top:0px">Baca Data SMS</h2>
        <table class="table">
	   
	    <tr><td>Insert Into DB</td><td><?php echo $InsertIntoDB; ?></td></tr>
	    <tr><td>Sending Date Time</td><td><?php echo $SendingDateTime; ?></td></tr>
	    
	    <tr><td>Destination Number</td><td><?php echo $DestinationNumber; ?></td></tr>
	   
	    <tr><td>Text Decoded</td><td><?php echo $TextDecoded; ?></td></tr>
	   </table>
        </body>
</html>
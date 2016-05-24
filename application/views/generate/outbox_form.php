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
        <h2 style="margin-top:0px">Outbox <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="timestamp">UpdatedInDB <?php echo form_error('UpdatedInDB') ?></label>
            <input type="text" class="form-control" name="UpdatedInDB" id="UpdatedInDB" placeholder="UpdatedInDB" value="<?php echo $UpdatedInDB; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">InsertIntoDB <?php echo form_error('InsertIntoDB') ?></label>
            <input type="text" class="form-control" name="InsertIntoDB" id="InsertIntoDB" placeholder="InsertIntoDB" value="<?php echo $InsertIntoDB; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">SendingDateTime <?php echo form_error('SendingDateTime') ?></label>
            <input type="text" class="form-control" name="SendingDateTime" id="SendingDateTime" placeholder="SendingDateTime" value="<?php echo $SendingDateTime; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">SendBefore <?php echo form_error('SendBefore') ?></label>
            <input type="text" class="form-control" name="SendBefore" id="SendBefore" placeholder="SendBefore" value="<?php echo $SendBefore; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">SendAfter <?php echo form_error('SendAfter') ?></label>
            <input type="text" class="form-control" name="SendAfter" id="SendAfter" placeholder="SendAfter" value="<?php echo $SendAfter; ?>" />
        </div>
	    <div class="form-group">
            <label for="Text">Text <?php echo form_error('Text') ?></label>
            <textarea class="form-control" rows="3" name="Text" id="Text" placeholder="Text"><?php echo $Text; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">DestinationNumber <?php echo form_error('DestinationNumber') ?></label>
            <input type="text" class="form-control" name="DestinationNumber" id="DestinationNumber" placeholder="DestinationNumber" value="<?php echo $DestinationNumber; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Coding <?php echo form_error('Coding') ?></label>
            <input type="text" class="form-control" name="Coding" id="Coding" placeholder="Coding" value="<?php echo $Coding; ?>" />
        </div>
	    <div class="form-group">
            <label for="UDH">UDH <?php echo form_error('UDH') ?></label>
            <textarea class="form-control" rows="3" name="UDH" id="UDH" placeholder="UDH"><?php echo $UDH; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Class <?php echo form_error('Class') ?></label>
            <input type="text" class="form-control" name="Class" id="Class" placeholder="Class" value="<?php echo $Class; ?>" />
        </div>
	    <div class="form-group">
            <label for="TextDecoded">TextDecoded <?php echo form_error('TextDecoded') ?></label>
            <textarea class="form-control" rows="3" name="TextDecoded" id="TextDecoded" placeholder="TextDecoded"><?php echo $TextDecoded; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="enum">MultiPart <?php echo form_error('MultiPart') ?></label>
            <input type="text" class="form-control" name="MultiPart" id="MultiPart" placeholder="MultiPart" value="<?php echo $MultiPart; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">RelativeValidity <?php echo form_error('RelativeValidity') ?></label>
            <input type="text" class="form-control" name="RelativeValidity" id="RelativeValidity" placeholder="RelativeValidity" value="<?php echo $RelativeValidity; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">SenderID <?php echo form_error('SenderID') ?></label>
            <input type="text" class="form-control" name="SenderID" id="SenderID" placeholder="SenderID" value="<?php echo $SenderID; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">SendingTimeOut <?php echo form_error('SendingTimeOut') ?></label>
            <input type="text" class="form-control" name="SendingTimeOut" id="SendingTimeOut" placeholder="SendingTimeOut" value="<?php echo $SendingTimeOut; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">DeliveryReport <?php echo form_error('DeliveryReport') ?></label>
            <input type="text" class="form-control" name="DeliveryReport" id="DeliveryReport" placeholder="DeliveryReport" value="<?php echo $DeliveryReport; ?>" />
        </div>
	    <div class="form-group">
            <label for="CreatorID">CreatorID <?php echo form_error('CreatorID') ?></label>
            <textarea class="form-control" rows="3" name="CreatorID" id="CreatorID" placeholder="CreatorID"><?php echo $CreatorID; ?></textarea>
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('outbox') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>
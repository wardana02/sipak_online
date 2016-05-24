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
        <h2 style="margin-top:0px">Sentitems <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="timestamp">UpdatedInDB</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="UpdatedInDB" id="UpdatedInDB" value="<?php echo $UpdatedInDB; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $UpdatedInDB; ?>" />
                <p class="help-block"><?php echo form_error('UpdatedInDB') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="timestamp">InsertIntoDB</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="InsertIntoDB" id="InsertIntoDB" value="<?php echo $InsertIntoDB; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $InsertIntoDB; ?>" />
                <p class="help-block"><?php echo form_error('InsertIntoDB') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="timestamp">SendingDateTime</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="SendingDateTime" id="SendingDateTime" value="<?php echo $SendingDateTime; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $SendingDateTime; ?>" />
                <p class="help-block"><?php echo form_error('SendingDateTime') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="timestamp">DeliveryDateTime</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="DeliveryDateTime" id="DeliveryDateTime" value="<?php echo $DeliveryDateTime; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $DeliveryDateTime; ?>" />
                <p class="help-block"><?php echo form_error('DeliveryDateTime') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="Text">Text</label>
            <textarea class="form-control" rows="3" name="Text" id="Text" placeholder="Text"><?php echo $Text; ?></textarea>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">DestinationNumber</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="DestinationNumber" id="DestinationNumber" value="<?php echo $DestinationNumber; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $DestinationNumber; ?>" />
                <p class="help-block"><?php echo form_error('DestinationNumber') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="enum">Coding</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="Coding" id="Coding" value="<?php echo $Coding; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $Coding; ?>" />
                <p class="help-block"><?php echo form_error('Coding') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="UDH">UDH</label>
            <textarea class="form-control" rows="3" name="UDH" id="UDH" placeholder="UDH"><?php echo $UDH; ?></textarea>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">SMSCNumber</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="SMSCNumber" id="SMSCNumber" value="<?php echo $SMSCNumber; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $SMSCNumber; ?>" />
                <p class="help-block"><?php echo form_error('SMSCNumber') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="int">Class</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="Class" id="Class" value="<?php echo $Class; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $Class; ?>" />
                <p class="help-block"><?php echo form_error('Class') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="TextDecoded">TextDecoded</label>
            <textarea class="form-control" rows="3" name="TextDecoded" id="TextDecoded" placeholder="TextDecoded"><?php echo $TextDecoded; ?></textarea>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="varchar">SenderID</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="SenderID" id="SenderID" value="<?php echo $SenderID; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $SenderID; ?>" />
                <p class="help-block"><?php echo form_error('SenderID') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="enum">Status</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="Status" id="Status" value="<?php echo $Status; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $Status; ?>" />
                <p class="help-block"><?php echo form_error('Status') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="int">StatusError</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="StatusError" id="StatusError" value="<?php echo $StatusError; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $StatusError; ?>" />
                <p class="help-block"><?php echo form_error('StatusError') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="int">TPMR</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="TPMR" id="TPMR" value="<?php echo $TPMR; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $TPMR; ?>" />
                <p class="help-block"><?php echo form_error('TPMR') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="int">RelativeValidity</label>
            <div class="col-lg-10">
                <input type="text" class="form-control tooltips" name="RelativeValidity" id="RelativeValidity" value="<?php echo $RelativeValidity; ?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $RelativeValidity; ?>" />
                <p class="help-block"><?php echo form_error('RelativeValidity') ?></p>
            </div>
        </div>
	    <div class="form-group">
            <label class="col-lg-2 control-label" for="CreatorID">CreatorID</label>
            <textarea class="form-control" rows="3" name="CreatorID" id="CreatorID" placeholder="CreatorID"><?php echo $CreatorID; ?></textarea>
        </div>
	    <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sentitems') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>
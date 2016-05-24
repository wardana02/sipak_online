<?php 

$string = "<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel=\"stylesheet\" href=\"<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>\"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style=\"margin-top:0px\">".ucfirst($table_name)." <?php echo \$button ?></h2>
        <form action=\"<?php echo \$action; ?>\" method=\"post\">";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text')
    {

    $string .= "\n\t    <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"".$row["column_name"]."\">".label($row["column_name"])."</label>
            <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
        </div>";
    } elseif ($row["data_type"] == 'date')
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"".$row["data_type"]."\">".label($row["column_name"])."</label>
            <div class=\"col-lg-9\">
                <div data-date-viewmode=\"years\" data-date-format=\"dd-mm-yyyy\" data-date=\"12-02-2012\" class=\"input-append date dpYears\">
                       <input type=\"text\" readonly=\"\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" value=\"<?php echo $".$row["column_name"]."; ?>\" size=\"16\" class=\"form-control\">
                        <span class=\"input-group-btn add-on\">
                          <button class=\"btn btn-danger\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span>
                </div>
                <p class=\"help-block\"><?php echo form_error('".$row["column_name"]."') ?></p>
            </div>
        </div>";
    }elseif ($row["data_type"] == 'time')
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"".$row["data_type"]."\">".label($row["column_name"])."</label>
            <div class=\"col-lg-9\">
                <div class=\"input-group bootstrap-timepicker\">
                        <input type=\"text\" value=\"<?php echo $".$row["column_name"]."; ?>\" readonly name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" class=\"form-control timepicker-24\">
                           <span class=\"input-group-btn\">
                           <button class=\"btn btn-danger\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button>
                           </span>
               </div>
                <p class=\"help-block\"><?php echo form_error('".$row["column_name"]."') ?></p>
            </div>
        </div>";
    } 
    else
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\" for=\"".$row["data_type"]."\">".label($row["column_name"])."</label>
            <div class=\"col-lg-10\">
                <input type=\"text\" class=\"form-control tooltips\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" value=\"<?php echo $".$row["column_name"]."; ?>\" data-toggle=\"tooltip\" data-original-title=\" isi \" value=\"<?php echo $".$row["column_name"]."; ?>\" />
                <p class=\"help-block\"><?php echo form_error('".$row["column_name"]."') ?></p>
            </div>
        </div>";
    }
}
$string .= "\n\t    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><?php echo \$button ?></button> ";
$string .= "\n\t    <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Cancel</a>";
$string .= "\n\t</form>
    </body>
</html>";

$hasil_view_form = createFile($string, $target."views/" . $v_form_file);

?>
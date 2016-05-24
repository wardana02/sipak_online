<!doctype html>
<html>
    <head>
        <title>Modal - harviacode.com</title>
        <script src=<?=base_url("assets/js/jquery-1.11.2.min.js");?>></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>"/>
        <style>
    #loading {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(<?=base_url("assets/img/loading2.gif");?>) 50% 50% no-repeat #fff;
    }
    
  </style>
  <script type="text/javascript">
    $(window).load(function() { $("#loading").fadeOut("slow"); })
  </script>
    </head>
    <body>
    <div id="loading"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="simpan btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <table class="table">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <!--pada prakteknya looping dari database-->
                <tr>
                    <td>Hari</td>
                    <td>Jakarta</td>
                    <td><a href="#" class="read" data-id="USR0000000001">Show</a></td>
                </tr>
                <tr>
                    <td>Hera</td>
                    <td>Bekasi</td>
                    <td><a href="#" class="read" data-id="2d">Show</a></td>
                </tr>
            </table>
        </div>
        
        <script src=<?=base_url("assets/js/bootstrap.js");?>></script>
        <script>
        $(function(){
            $(document).on('click','.read',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo base_url("user/read") ;?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    </body>
</html>
<!--harviacode.com-->
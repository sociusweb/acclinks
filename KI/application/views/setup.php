
    <div class="container-fluid">
        <div id="setup_phone">
            <div class="row">
                <div class="col-md-8 detail active" >
                    <?php
                    foreach ($setup as $listsetup){
                    ?>
                    <div class="setup phonesetup" style="min-height: 500px;padding: 25px;" id="dec<?php echo $listsetup['id'] ?>">
                        <h3><?php echo $listsetup['Heading']?></h3>
                        <p style="text-align:justify;"><?php echo $listsetup['discription']?></p>
                    </div>
                    <?php } ?>
                </div>
              
                <div class="col-md-4">
                    <div class="setup" >
                        <h4 style="margin: 0;padding: 15px 0 0 15px"><b>Select Device</b></h4>
                        <div class="row">
                        <?php
                        foreach ($setup as $listsetup){
                        ?>
                            <div class="col-xs-6">
                            <img src="<?php echo $listsetup['image']?>" onclick="deviceselect('dec<?php echo $listsetup['id'] ?>')" class="phone" height="150px" />  
                            <p align="center"><?php echo $listsetup['Heading'] ?></p>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $('.phonesetup').hide();
        $('.phonesetup').eq(0).show();
        function deviceselect(id){
            $('.phonesetup').hide();
            $('#'+id).show();
        }
    </script>
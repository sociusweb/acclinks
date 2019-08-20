<style>
	.success{
		background:white;
		text-align: center;
		margin: 20px;
    	padding: 20px;
    	box-sizing: border-box;
    	border-radius: 15px;
	}
	.success h1{
		font-size:25px;
	}
</style>

<div class="container-fluid">
	<div class="success" style="min-height: 65vh;">
		<img src="<?php echo base_url();?>assets/frontend/img/correct.png" style="height:65px;"/>
		<h1>Recharge done successfully</h1>
		<h4>Mobile No: <?php echo $mobile; ?></h4>
		<h4>Amount : <?php $data = ($amount); 
					setlocale(LC_MONETARY, 'en_AU');
                    $data = money_format('%!i', $data);
                    echo $data;
					?> AUD</h4>
		<div class="btn-successfull">
			<a href="<?php echo base_url();?>home/recharge"><button class="btn btn-primary">Recharge Again</button></a>
		</div>
	</div>
</div>
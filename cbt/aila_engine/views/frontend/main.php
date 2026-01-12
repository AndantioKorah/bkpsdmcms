<div class="card-content  height-470">
	<h4 class="center" style="font-size: 2rem;">Selamat Datang</h4>
	<div class="row ">
		<div class="col s12 center hide-on-med-and-up center">
			<center>
				<img width="100px;" src="<?=base_url('aila_cbt/images/logo.png');?>">
			</center>
			
			<b><?=strtoupper($this->config->item('cbt_name'));?></b>
			<br/>
			<br/>
		</div>

		<p  class="center">Silahkan pilih halaman login sesuai dengan status masing-masing.</p>
		<div class="input-field col s12 center">
			<h5 class="hide-on-med-and-down center">Akses Login</h5>
			<a href="<?=site_url('main/admin_login');?>" class="btn waves-effect  primary  col s12">Admin</a>

			<a style="margin-top: 15px;" href="<?=site_url('main/teacher_login');?>" class="btn waves-effect  green  col s12"><?=$this->config->item('teacher');?></a>
			<a style="margin-top: 15px;" href="<?=site_url('main/student_login');?>" class="btn waves-effect  brown  col s12"><?=$this->config->item('student');?></a>
			<br/><br/><br/>
			<small class="white-text">Powered by : <b><a class="white-text" href="http://bkd.manadokota.go.id/" target="_blank">BKPSDM Kota Manado</a></b>/></small>
		</div>
	</div>
</div>
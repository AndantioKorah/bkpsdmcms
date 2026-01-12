<style type="text/css">
	.row{
		margin-bottom: 5px !important;
	}
</style>

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="theme-color" content="#2196F3">
	
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(''); ?>aila_cbt/css/materialize.min.css"  media="screen,projection"/>

	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>aila_cbt/css/style.css">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('aila_cbt/images/logo.png') ?>" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ujian Online <?=strip_tags($this->config->item('cbt_name')).' - '.strip_tags($this->config->item('address'));?></title>   
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">
	<meta name="keywords" content="Ujian Online  <?=$this->config->item('cbt_name').' - '.$this->config->item('address');?>,Aplikasi Ujian Online">
	<meta name="description" content="Website resmi ujian online  <?=$this->config->item('cbt_name').' - '.$this->config->item('address');?> |">

	<meta content='indonesian' name='language'/>
	<meta content='id' name='geo.country'/>
	<meta content='indonesia' name='geo.placename'/>
	<meta content='never' name='expires'/>
	<meta content='always' name='revisit'/>
	<meta content='global' name='distribution'/>
	<meta content='general' name='rating'/>
	<meta content='true' name='MSSmartTagsPreventParsing'/>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta content='index, follow' name='googlebot'/>
	<meta content='follow, all' name='Googlebot-Image'/>
	<meta content='follow, all' name='msnbot'/>
	<meta content='follow, all' name='Slurp'/>
	<meta content='follow, all' name='ZyBorg'/>
	<meta content='follow, all' name='Scooter'/>
	<meta content='all' name='spiders'/>
	<meta content='all' name='WEBCRAWLERS'/>
	<meta content='aeiwi, alexa, alltheWeb, altavista, aol netfind, anzwers, canada, directhit, euroseek, excite, overture, go, google, hotbot. infomak, kanoodle, lycos, mastersite, national directory, northern light, searchit, simplesearch, Websmostlinked, webtop, what-u-seek, aol, yahoo, webcrawler, infoseek, excite, magellan, looksmart, bing, cnet, googlebot' name='search engines'/>

	<meta property="og:image" content="" />
	<meta property="og:locale" content="id_ID"/>
	<meta property="og:title" content="Ujian Online  <?=strip_tags($this->config->item('cbt_name')).' - '.strip_tags($this->config->item('address'));?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content=" <?=strip_tags($this->config->item('cbt_name')).' - '.strip_tags($this->config->item('address'));?>"/>
	<meta property="og:description" content="Website resmi ujian online  <?=strip_tags($this->config->item('cbt_name')).' - '.strip_tags($this->config->item('address'));?>" />

</head>

<body id="home" class="scrollspy" style="background-color: #e4e5e6">

	<!-- Start Main Content -->
	<main style="" class="main-top">

		<div class="container">
			<div class="row">
				<div class="col m1 s12">
				</div>
				<div class="col m5 s12 hide-on-small-only">
					<div class="card card-left">
						<div class="card-content primary  white-text height-470">
							<div class="">
								<h5 class="center"><a class="white-text" href="<?=base_url('');?>">APLIKASI UJIAN ONLINE <br/> BERBASIS KOMPUTER</a></h5>
								<p class="center"><?=strtoupper($this->config->item('cbt_name'));?></p>
								<br/>
								<p class="center">
									<img width="150px;" src="<?=base_url('aila_cbt/images/logo.png');?>">
								</p>
								<div class="footer center" id="copyright">
									<small style="opacity: 0;">Powered by : <b><a href="//bkd.manadokota.go.id" target="_blank">BKPSDM Kota Manado</a></b><br/></small>
									<small>= Manado Maju dan Sejahtera Sulut Hebat =</small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col m5 s12">
					<div class="card card-right">
						<?php $this->load->view($content);?>
					</div>
				</div>
			</div>
		</div>
	</div>



</main>
<!-- End Main Content -->


<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="<?php echo base_url(''); ?>aila_cbt/js/materialize.min.js"></script>

<script>
	const sideNav = document.querySelectorAll('.sidenav');
	M.Sidenav.init(sideNav);  


	const scroll = document.querySelectorAll('.scrollspy');
	M.ScrollSpy.init(scroll,{
		scrollOffset : 50
	});
</script>

</body>
</html>

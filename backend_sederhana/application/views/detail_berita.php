<?php ;
	$id = $this->session->userdata('id');
    $username = $this->session->userdata('nama');
?>

<?php $this->load->view('layout/base_start');?>
<div class="container" id="detail">
<div class="container-fluid">
<div class="row">
<div class="panel panel-success">
<div class="panel-heading"><span class="glyphicon glyphicon-book"></span><a onclick="" href="<?php echo base_url('welcome'); ?>"> Daftar Buku</a> / Detail Buku</div>
	<div class="panel-body">

			<div class="col-xs-6 col-sm-3">
				<div id="hover-cap-4col">
						<div class="caption">
							<img style="max-height: 500px; display: block; margin: auto; height: 300px; width: 200px; overflow: hidden; padding: 0; max-width: 350px;" src="http://localhost/api/foto/<?php echo $b->idbuku?>/<?php echo $b->cover?>" class="img-responsive center">
						</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h4>Judul Buku : <?php echo $b->judul?></h5>
				<h4>Pembuat : <?php echo $b->penulis?></h5>
				<h4>Penerbit : <?php echo $b->penerbit?></h5>
                <h4>Tahun Rilis : <?php echo $date?></h5>
				<p>Ringkasan : <?php echo $b->sinopsis?></p>
                <?php 
                if (! empty($id)) { ?>
                <a href="<?php echo site_url('subscribe/insert') ?>/<?=$b->idbuku?>/<?=$id?>"><button type="button" class="btn btn-primary" aria-label="Left Align">
				<span class="glyphicon glyphicon-play" aria-hidden="true"></span> Baca </button></a>
				<a href="<?php echo site_url('subscribe/insert') ?>/<?=$b->idbuku?>/<?=$id?>"><button type="button" class="btn btn-success" aria-label="Left Align">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambahkan Favorit </button></a>
                <?php }else{ ?>
				<a href="<?php echo base_url('Login'); ?>"><button type="button" class="btn btn-danger" aria-label="Left Align">
                <span class="glyphicon glyphicon-play" aria-hidden="true"></span> Baca </button></a>
                <a href="<?php echo base_url('Login'); ?>"><button type="button" class="btn btn-danger" aria-label="Left Align">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambahkan Favorit </button></a>
                <?php } ?>
			</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

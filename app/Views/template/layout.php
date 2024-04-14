<html>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<?= $this->include('template/call_head') ?>
<body class="hold-transition sidebar-mini layout-fixed" style="height: auto;">
		<div>
			<?= $this->include('template/page_header') ?>
			<!-- Main content -->
			<section class="content">
			<?= $this->include('template/page_konten') ?> 
			</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
		<?= $this->include('template/call_footer') ?>
	</div>
		<?= $this->include('template/call_js') ?>
</body>
</html>
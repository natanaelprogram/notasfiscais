<?php
	require_once 'config.php';
	require_once DBAPI;
	if (!isset($_SESSION)) session_start();
	include(HEADER_TEMPLATE);
	$db = open_database();
?>
		<h1>Seja Bem-Vindo!</h1>
		<hr>

		<?php if ($db) : ?>
			<!-- parte do customer -->
			<div class="row mb-2">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2 ">
					<a href="<?php echo BASEURL; ?>customers/add.php" class="btn btn-secondary">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa-solid fa-user-plus fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Novo Cliente</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
					<a href="<?php echo BASEURL; ?>customers" class="btn btn-light">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa-solid fa-users fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Clientes</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- parte do tema -->
			<div class="row mb-2">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
					<a href="<?php echo BASEURL; ?>customers/add.php" class="btn btn-secondary">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa-solid fa-user-plus fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Novo tema</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
					<a href="<?php echo BASEURL; ?>customers" class="btn btn-light">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa-solid fa-users fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">

								<p>Tema</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- parte usuarios sem senha -->
			<div class="row mb-2">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
					<a href="<?php echo BASEURL; ?>customers/add.php" class="btn btn-secondary">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa-solid fa-user-plus fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Novo tema</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
					<a href="<?php echo BASEURL; ?>customers" class="btn btn-light">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa-solid fa-users fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">

								<p>Tema</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
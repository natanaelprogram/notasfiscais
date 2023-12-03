<?php
//esse é o index.php
	require_once 'config.php';
	require_once DBAPI;
	if (!isset($_SESSION)) session_start();
	include(HEADER_TEMPLATE);
	$db = open_database();
?>
		<br>
		<h2>Seja Bem-Vindo!</h2>
		<hr>
		</br>

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
								<i class="fa-solid fa-cart-shopping fa-5x" style="color: #ffffff;"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Nova Compra</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
					<a href="<?php echo BASEURL; ?>customers" class="btn btn-light">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa-solid fa-file fa-5x" style="color: #ffffff;"></i>
							</div>
							<div class="col-xs-12 text-center">

								<p>Notas Fiscais</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- parte do usuarios -->
			<?php if (isset($_SESSION['user'])) : //verifica se está existe usuário (?) ?>
				<?php if ($_SESSION['user'] == "admin") : //verifica se está logado como admin ?>
						<div class="row" id="actions"> <!-- Usuários -->
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
								<a href="<?php echo BASEURL; ?>usuarios/add.php" class="btn btn-secondary">
									<div class="row">
										<div class="col-xs-12 text-center">
											<i class="fa-solid fa-user-tie fa-5x"></i>
										</div>
										<div class="col-xs-12 text-center">
											<p>Novo Usuário</p>
										</div>
									</div>
								</a>
							</div>
					
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-2">
								<a href="<?php echo BASEURL; ?>usuarios" class="btn btn-light">
									<div class="row">
										<div class="col-xs-12 text-center">
											<!-- <i class="fa-solid fa-users-gear fa-5x"></i> -->
											<i class="fa-solid fa-user-lock fa-5x"></i>
										</div>
										<div class="col-xs-12 text-center">
											<p>Usuários</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php else : ?>
				<!-- div abaixo comentada seguindo a foto -->
				<!-- <div class="alert alert-danger" role="alert">
					<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
				</div> -->
				<?php if (!empty($_SESSION['message'])) :?>
					<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dimissible" role="alert">
						<p><strong>ERRO:</strong></p> Não foi possível conectar ao bando de dados!<br>
						<?php echo $_SESSION['message']; ?></p>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php clear_messages(); ?>
				<?php endif; ?>
			<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
<?php
if ($_SESSION["role"] == "admin") {
?>

	<div class="row">
		<div class="col-12 col-xl-6 col-xxl-6 col-md-6 d-flex order-1 order-xxl-1">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Tables</h5>
				</div>
				<div class="card-body">

					<table class="table">
						<tr>
							<th>numéro</th>
							<th>type de table</th>
							<th>action</th>
						</tr>
						<?php
						foreach ($tables as $table) {

						?>
							<tr>
								<td><?php echo $table['numero_table']; ?></td>
								<td><?php echo $table['type_table']; ?></td>
								<td>
									<table>
										<tr>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="suppr table" name="action">
													<input type="hidden" name="id_table" value="<?php echo $table["id_table"]; ?>">
													<button type="submit"><i data-feather="trash-2"></i></button>
												</form>
											</td>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="modif table" name="action">
													<input type="hidden" name="id_table" value="<?php echo $table["id_table"]; ?>">
													<button type="submit"><i data-feather="edit"></i></button>
												</form>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						<?php
						}
						?>
						<tr>
							<form method="POST" action="#">
								<input type="hidden" value="ajouter table" name="action">
								<td>
									<input type="text" name="num_table" size="11">
								</td>
								<td>
									<SELECT name="type" size="1">
										<option value="RON">ronde</option>
										<option value="CAR">carrée</option>
									</SELECT>
								</td>
								<td>
									<button type="submit"><i data-feather="plus-square"></i></button>
							</form>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6 col-xxl-6 col-md-6 d-flex order-2 order-xxl-2">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Produits potentiellement allergènes</h5>
				</div>
				<div class="card-body">

					ici la liste des produits allergènes
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-xl-6 col-xxl-6 col-md-6 d-flex order-1 order-xxl-1">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Boissons</h5>
				</div>
				<div class="card-body">

					ici la liste des boisson et pour chaque boisson les produits "allergène" qu'elle contient

				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6 col-xxl-6 col-md-6 d-flex order-2 order-xxl-2">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Plats</h5>
				</div>
				<div class="card-body">

					ici la liste des plats et pourchaque plat la liste des produits qu'il contient

				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-xl-6 col-xxl-6 col-md-6 d-flex order-2 order-xxl-2">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Utilisateur</h5>
				</div>
				<div class="card-body">
				<table class="table">
						<tr>
							<th>login</th>
							<th>role</th>
							<th>mdp</th>
						</tr>
						<?php
						foreach ($users as $user) {

						?>
							<tr>
								<td><?php echo $user['login']; ?></td>
								<td><?php echo $user['role']; ?></td>
								<td><?php echo $user['mdp']; ?></td>
								<td>
									<table>
										<tr>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="suppr user" name="action">
													<input type="hidden" name="id_user" value="<?php echo $user["id_user"]; ?>">
													<button type="submit"><i data-feather="trash-2"></i></button>
												</form>
											</td>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="modif user" name="action">
													<input type="hidden" name="id_user" value="<?php echo $user["id_user"]; ?>">
													<!-- <button type="submit"><i data-feather="edit"></i></button> -->

													<a  href="include/modifier.php?m=<?php echo $user['id_user']; ?>">
                                                            <i data-feather="edit"></i>
                                                        </a>

                                                    </td>
												</form>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						<?php
						}
						?>
						<tr>
							<form method="POST" action="#">
								<input type="hidden" value="ajout user" name="action">
								<td>
									<input type="text" name="login" size="11">
								</td>
								<td>
								<input type="text" name="mdp" size="11">
								</td>
								<td>
								<input type="text" name="role" size="11">
								</td>
								
								<td>
									<button type="submit"><i data-feather="plus-square"></i></button>
							</form>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

	</div>

<?php
} else {
	echo ("vous n'avez pas le droit d'être là");
}
?>













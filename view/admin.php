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
					<h5 class="card-title mb-0">Menu</h5>
				</div>
				<div class="card-body">

					<!-- ici la liste des menus et pour chaque menu la liste des plats qu'il contient -->

					<table class="table">
						<tr>
							<th>Nom du menu</th>
							<th>Description</th>
							<th>Prix unitaire</th>
							<th>Action</th>
						</tr>
						<?php
						foreach ($menus as $menu) {

						?>
							<tr>
								<td><?php echo $menu['nom_menu']; ?></td>
								<td><?php echo $menu['description']; ?></td>
								<td><?php echo $menu['PU']; ?></td>
								<td>
									<table>
										<tr>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="suppr menu" name="action">
													<input type="hidden" name="id_menu" value="<?php echo $menu["id_menu"]; ?>">
													<button type="submit" onclick="return confirm ('Êtes-vous sûr de vouloir supprimer ?')"><i data-feather="trash-2"></i></button>
												</form>
											</td>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="modif menu" name="action">
													<input type="hidden" name="id_menu" value="<?php echo $menu["id_menu"]; ?>">
													<!-- <button type="submit"><i data-feather="edit"></i></button> -->
													<td>
														<a href="include/edit_admin.php?m=<?php echo $menu['id_menu']; ?>" onclick="validation(); return false;">
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
							<form method="POST" action="#" id="ValidationDuFormulaire">
								<input type="hidden" value="ajouter menu" name="action">
								<!-- Entrer le nom du menu -->
								<td>
									<input type="text" name="nom_menu" size="11" placeholder="Cocktail croquant" id="nom_menu">
								</td>
								<!-- Entrer la description de votre menu -->
								<td>
									<input type="text" name="description" size="11" placeholder="Un cocktail léger" id="description">
								</td>
								<!-- Entrer le prix du menu -->
								<td>
									<input type="text" name="PU" size="11" placeholder="95" id="PU">
								</td>
								<!-- Bouton d'ajout -->
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
<script src="js/edit_menu_admin.js"></script>
<script src="js/validation_champs.js"></script>
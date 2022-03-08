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

					<table class="table">
						<tr>
							<th>nom du produit</th>
							<th>action</th>
						</tr>
						<?php
						foreach ($produits as $produit) { 

						?>
							<tr>
								<td><?php echo $produit['nom_produit']; ?></td>
								<td>
									<table>
										<tr>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="suppr produit" name="action">
													<input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]; ?>">
													<button type="submit"><i data-feather="trash-2"></i></button>
												</form>
											</td>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="modif produit" name="action">
													<input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]; ?>">
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
								<input type="hidden" value="ajout produit" name="action">
								<td>
									<input type="text" name="nom_produit" size="11">
								</td>
								<td>
									<button type="submit"><i data-feather="plus-square"></i></button>
							</form>
						</td>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-xl-6 col-xxl-6 col-md-6 d-flex order-1 order-xxl-1">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title mb-0">Boissons de bg</h5>
				</div>
				<div class="card-body">
				<table class="table">
						<tr>
							<th>Nom</th>
							<th>description</th>
							<th>prix</th>
							<th>action</th>
							
						</tr>
						<?php
						foreach ($boissons as $boisson) { 

						?>
							<tr>
								<td><?php echo $boisson['nom_boisson']; ?></td>
								<td><?php echo $boisson['description']; ?></td>
								<td><?php echo $boisson['PU']; ?></td>
								
								<td>
									<table>
										<tr>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="suppr boisson" name="action">
													<input type="hidden" name="id_boisson" value="<?php echo $boisson["id"]; ?>">
													<button type="submit"><i data-feather="trash-2"></i></button>
												</form>
											</td>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="modif boisson" name="action">
													<input type="hidden" name="id_boisson" value="<?php echo $boisson["id"]; ?>">
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
								<input type="hidden" value="ajout boisson" name="action">
								<td>
									<input type="text" name="nom_boisson" size="11">
								</td>
								<td>
									<input type="text" name="description" size="11">
								</td>
								<td>
									<input type="text" name="prix" size="11">
								</td>
									<button type="submit"><i data-feather="plus-square"></i></button>
							</form>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

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
					<h5 class="card-title mb-0">Plats de menu</h5>
				</div>
				<div class="card-body">

					ici la liste des menus et pour chaque menu la liste des plats qu'il contient

				</div>
			</div>
		</div>

	</div>

<?php
} else {
	echo ("vous n'avez pas le droit d'être là");
   

}
?>
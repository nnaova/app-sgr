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
				<table class="table">

					<!-- Nommage des titres des champs du tableau -->

						<tr>
							<th>nom du plat</th>
							<th>description</th>
							<th>type de plat</th>
							<th>prix à la carte</th>
							<th>produits associés</th>
							<th>action</th>	
						</tr>

						<!-- Remplissage des champs du tableau -->

						<?php
						foreach ($plats  as $plat) {
							

							

						?>
							<tr>
								<!-- Ajout des champs correspondant à la table plat de la BDD dans le tableau-->

								<td><?php echo $plat ['nom_plat']; ?></td>
								<td><?php echo $plat['description']; ?></td>
								<td><?php echo $plat['type_plat']; ?></td>
								<td><?php echo $plat['PU_carte']; ?></td>

								<td>

								<!--Creation de la liste déroulante qui contient les champs de la table produit  -->

								<form action="" method="post">
									<select name="id_produit" id="">
										
										<?php foreach ($produits as $produit){ ?>

										<option value=<?= $produit['id_produit']?>>
											<?php echo $produit['nom_produit'] ?>
										</option>

										<?php } ?>
									</select>
									
									<button type="submit"><i data-feather="plus-square"></i></button>																
								</form>

								<!--Creation du tableau qui contient les produits associés aux plats -->
								<?php while($contenu_plats = $statmt10->fetch()){?>

									<?php $contenu_produit = [$contenu_plats["id_plat"] => $plat["nom_plat"]] ?>

									<?php foreach($contenu_produit as $k => $v) ?>{
										
									<?php echo $k ?>
									
									}		
									
								<?php } ?>
								
								
								<table>	
									<tbody>		
									<?php foreach($produits as $produit){ ?>
										
									
										

										<tr>
											<td><?php echo $produit['nom_produit'] ?></td>
										</tr>
											
										

									
									<?php } ?>
									


											
								
									</tbody>
								</table>
								</td>			

                    			


								<td>
									<table>
										<tr>
											<td>
												<form method=POST action="#">
													<input type="hidden" value="suppr plat" name="action">
													<input type="hidden" name="id_plat" value="<?php echo $plat["id_plat"]; ?>">
													<button type="submit"><i data-feather="trash-2"></i></button>
												</form>
											</td>

											<td>
												<form method=POST action="#">
													<input type="hidden" value="modif plat" name="action">
													<input type="hidden" name="id_plat" value="<?php echo $plat["id_plat"]; ?>">
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
								<input type="hidden" value="ajout plat" name="action">
								<td>
									<input type="text" name="nom_plat" size="11">
								</td>

								<td>
									<input type="text" name="desc" size="11">
								</td>

								<td>
									<input type="text" name="type_plat" size="11">
								</td>

								<td>
									<input type="text" name="PU_carte" size="5" value="0.0">
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

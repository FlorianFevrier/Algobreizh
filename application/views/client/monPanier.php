
<section id="main">
    <div class="inner">
        <div class="table-wrapper">
            <h3>Mon Panier</h3>
			<table class="alt">
			    <thead>
					<tr>
						<th>Description</th>
						<th>Quantité</th>
						<th style="text-align:right;">Total</th>
					</tr>
				</thead>
				<tbody>
            <?php
            $total=0;
            foreach($Panier as $p){
                ?>
                <tr>
                    <td>
                <?php
                echo $p['description'];
                echo $p['id'];
                ?>
                    </td>
                    <td>
                <?php
                echo $p['quantite'];
                ?>
                    </td>
                    <td style="text-align:right;">
                <?php
                $prixTotalArticle=$p['quantite']*$p['prix'];
                echo $prixTotalArticle;
                ?>€
                    </td>
                    <td style="text-align:center; margin:0px; padding:0px;">
                    <a href="<?= site_url("Client/supprPanier"); ?>"><underline style="color:#C80000;">Supprimer</underline>
                    </td>
                </tr>
                <?php
                $total=$total+$prixTotalArticle;
            }
            ?>
                <tr>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td style="text-align:right;"><strong><?php echo $total; ?>€</strong></td>
                </tr>
            </tbody>
            </table>

        </div>
		<div class="12u$">
			<ul class="actions">
					<li><a href="<?= site_url("Client/panier"); ?>" class="button alt">Continuer mes achats</a></li>
					<li><a href="<?= site_url("Client/panierFinal"); ?>" class="button">Valider mon panier</a></li>
			</ul>
		</div>
        </div>
    </section>
</div>
</section>

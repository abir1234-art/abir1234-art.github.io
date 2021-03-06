
<page backtop="50mm">
	<style type="text/css">
		page{
			max-width: 100%;
		}
		table { 
			width: 100%; 
			color: #717375; 
			font-family: helvetica; 
			line-height: 5mm; 
			border-collapse: collapse; 
		}
		img{
			width: 100%;
		}
		h2 { margin: 0; padding: 0; }
		p { margin: 5px; color: #717375; }
		.border th { 
			border: 1px solid #000;  
			color: white; 
			background: #000; 
			padding: 5px; 
			font-weight: normal; 
			font-size: 14px; 
			text-align: center; 
		}
		.border td { 
			border: 1px solid #CFD1D2; 
			padding: 5px 10px; 
			text-align: center; 
		}
		.no-border { 
			border-right: 1px solid #CFD1D2; 
			border-left: none; 
			border-top: none; 
			border-bottom: none;
		}
		.p-10 { width: 10%; } .p-15 { width: 15%; } 
		.p-33 { width: 33%; } .p-45 { width: 45%; }
	</style>
    <page_header>
		<table>
			<tr>
				<td>
					<img src="C:\xampp1\htdocs\Formulaire\logo.png"/><!-- utilisez un lien absolu, c'est beaucoup moins galère et cette ressource ne devrait pas bouger. Dans le cas présent ça se justifie -->
				</td>
				<td>
					<b>Facturé à :</b><br />
					$nomDuClient<br />
					$adresseDuClient
				</td>
				<td>
					<b>Détails :</b><br />
					Date de facturation : $date<br />
					Numéro de facture : $numeroDeFacture
				</td>
			</tr>
		</table>
    </page_header> 
    <page_footer> 
        <p>
			Ma Super Boite, SASU au capital de X€<br />
			mon adresse<br />
			Immatriculé au RCS de Tours sous le numéro .......<br />
			TVA intracommunautaire : FR........
		</p>
    </page_footer>
    <table>
		<thead>
			<tr>
				<th>
					Produit/Prestation
				</th>
				<th>
					Prix unitaire
				</th>
				<th>
					Prix facturé
				</th>
				<th>
					Quantité
				</th>
				<th>
					Total HT
				</th>
			</tr>
		</thead>
		<tbody>
			<!-- ici on boucle sur les lignes de notre facture -->
			<tr>
				<td>
					$nomDeLaPrestation
				</td>
				<td>
					$prixUnitaire €
				</td>
				<td>
					$prixUnitaireFacture €
				</td>
				<td>
					$quantite
				</td>
				<td>
					$prixUnitaireFacture * $quantite €
				</td>
			</tr>
			<!-- fin de la boucle -->
			<tr>
				<td colspan="3"></td>
				<td>
					Total HT
				</td>
				<td>
					$totalHorsTaxes €
				</td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td>
					TVA (20%)
				</td>
				<td>
					$totalHorsTaxes*0.2 €
				</td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td>
					Total TTC
				</td>
				<td>
					$totalHorsTaxes*1.2 €
				</td>
			</tr>
		</tbody>
	</table>
</page>

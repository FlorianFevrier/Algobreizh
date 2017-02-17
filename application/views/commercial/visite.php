<style>
.main{
        position:absolute;
        top:60px;
        bottom:60px;
        left:0;
        right:0;
        text-align:center;
        overflow:auto;
        margin:auto;
        background-color:#F2F2F2;
}
</style>
<section id="main">
    <div class="inner">
        <h4>Liste des clients dans votre zone</h4>
        <div class="table-wrapper">
			<table>
			    <thead>
					<tr>
						<th>Nom</th>
						<th>Dernière visite</th>
						<th>Num&eacute;ro de téléphone</th>
                        <th>Adresse</th>
                        <th>E-mail</th>
					</tr>
				</thead>
				<tbody>
            <?php       
                foreach ($clients as $client){
                    ?><tr>
                        <td><?php
                    echo $client['nom'];
                    ?>  </td>
                        <td><?php
                    echo $client['derniereVisite'];
                    ?>  </td>
                    <td><?php
                    echo "0".$client['num_tel'];
                    ?>  </td>
                    <td><?php
                    echo $client['adresse'];
                    ?>  </td>
                    <td><?php
                    echo $client['mail'];
                    ?>  </td>
                    </tr>
                    <?php
                } 
            ?>
        </p>
    </div>
</section>
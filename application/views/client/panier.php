
<section id="main">
    <div class="inner">
        <h3>Liste de nos produits</h3>
        <section>
        <?php
        foreach($produit as $p){
            ?>
            <div class="flex-container" style="border-bottom: 1px solid black; padding:4px;">
                <div style="width: 25%;">
                    <?php echo("<img src='http://localhost/Algobreizh/images/produits/".$p['image']."'  style='width:40%;'/>");?> 
                </div>
                <div style="text-align: left; width: 50%;">
                    <?php echo $p['description']; ?>
                </div>
                <div style="width: 25%; text-align: right;">
                    <div>
                        <?php echo $p['prix']; ?>&nbsp;€
                    </div>
                    <div>
                        <a href="#<?php echo $p['idArticle'];?>" rel="modal:open" class="button alt" style="font-size:9px;">Ajouter au panier</a>
                    </div>
                </div>
            </div>
            <div id="<?php echo $p['idArticle'];?>" style="display: none;">
                <?php echo form_open('Client/addPanier'); ?>
                 <div style="text-align:center;">
                    <h3><?php echo $p['description']; ?></h3>
                 </div> 
                <div class="flex-container-center" style="line-height: 40px;">
                    <div style="width: 50%; text-align:right;">
                        <?php echo("<img src='http://localhost/Algobreizh/images/produits/".$p['image']."'  style='width:50%;'/>");?> 
                    </div>    
                    <div style="width:50%; text-align:left;">
                        <span><?php echo $p['prix']; ?></span><span>&nbsp;€</span>
                    </div>
                 </div>  
                 <div class="flex-container popup">
                    <input class="description invisible"  id="description" name="description"value="<?php echo $p['description']; ?>"/>
                    <input class="Id invisible"  id="Id" name="Id"value="<?php echo $p['idArticle'];?>"/>
                    <input class="Prix invisible" id="Prix" name="Prix" value="<?php echo $p['prix']; ?>"/>
                    <div style="width:100%; text-align:center;">
                        <span style="text-decoration: underline;">Quantité</span>
                        <select  class="quantite" id="quantite" name="quantite"style="width:50%; margin-left:25%; margin-right:25%;">
                            <option value="0">0</option>
                            <option value="10">10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div style="width:100%; text-align:center;">
                        <span style="text-decoration: underline;">Total</span>
                        <p class="total">0 €</p>
                    </div>
                </div>
                    <div style="width:100%; text-align:center; margin-top: 10px;">
                        <input type="submit" value="Valider" />                        
                    </div>  
                </form>               
            </div>
            
        <?php
        }
        ?>
        </section>
    </div>
</section>

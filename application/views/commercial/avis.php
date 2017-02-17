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
		<h3>Avis</h3>
		<?php echo form_open('commercial/avisPost'); ?>
			<div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
 					<div class="select-wrapper">
						<select name="client" id="client">
							<option value="">- Clients -</option>
							<option value="1">Manufacturing</option>
							<option value="1">Shipping</option>
							<option value="1">Administration</option>
							<option value="1">Human Resources</option>
						</select>
					</div> 
                </div>   
                <div class="12u$">
					<textarea name="message" id="message" placeholder="Saisisez votre message..." rows="6"></textarea>  
                </div>
				<div class="12u$">
					<ul class="actions">
							<li><input type="submit" value="Valider" /></li>
							<li><input type="reset" value="Effacer" class=" button alt"/></li>
					</ul>
				</div>
            </div>
        </form>
    </div>
</section>

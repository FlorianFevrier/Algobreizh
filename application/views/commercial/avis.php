
<section id="main">
    <div class="inner">
		<h3>Avis</h3>
		<?php echo form_open('commercial/avisPost'); ?>
			<div class="row uniform 50%">
                <div class="6u 12u$(xsmall)">
 					<div class="select-wrapper">
						<select name="client" id="client">
						<?php
							foreach($clients as $client){
								?>
								<option value="<?php echo $client['idClient'];?>"><?php echo $client['nom'];?></option>
							<?php } ?>
						</select>
					</div> 
                </div> 
                <div class="12u$">
					<textarea name="message" id="message" placeholder="Saisisez votre message..." rows="6"></textarea>  
                </div>
				<div class="6u$ 12u$(small)">
					<input type="checkbox" id="human" name="human" >
					<label for="human">Je ne suis pas un robot</label>
				</div>  
				<?php echo validation_errors(); ?>
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

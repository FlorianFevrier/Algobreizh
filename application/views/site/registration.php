<html>
<head>
	<title>Inscription</title>
</head>
<body>

<!-- This function will return any error messages sent back by the validator.
If there are no messages it returns an empty string.-->
	<?php echo validation_errors(); ?>

<!--	Creates an opening form tag with a base URL built from your config preferences.
It will optionally let you add form attributes and hidden input fields,
and will always add the accept-charset attribute based on the charset value in your config file.

The main benefit of using this tag rather than hard coding your own HTML
is that it permits your site to be more portable in the event your URLs ever change.-->
	<?php echo form_open('inscription'); ?>

<!-- set_value()
Permits you to set the value of an input form or textarea. You must supply the field name via the first parameter of the function. The second (optional) parameter allows you to set a default value for the form. The third (optional) parameter allows you to turn off HTML escaping of the value, in case you need to use this function in combination with i.e. form_input() and avoid double-escaping.-->
<section id="main">
        <div class="inner">
    		<h3 align="center">Inscription</h3>
			<div class="row uniform 50%">
				<div class="6u 12u$(xsmall)">
					<input type="text" name="codeclient" value="<?php echo set_value('codeclient'); ?>" size="50" placeholder="Code Client"/>
				</div>
				<div class="6u 12u$(xsmall)">
					<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" placeholder="E-mail"/>
				</div>
				<div class="6u 12u$(xsmall)">
					<input type="text" name="adresse" value="<?php echo set_value('adresse'); ?>" size="50" placeholder="Adresse"/>
				</div>
				<div class="6u 12u$(xsmall)">
					<input type="text" name="nom" value="<?php echo set_value('nom'); ?>" size="50" placeholder="Nom"/>
				</div>
				<div class="6u 12u$(xsmall)">
					<input type="text" name="tel" value="<?php echo set_value('tel'); ?>" size="50" placeholder="Téléphone"/>
				</div>
				<div class="12u$" align="center">
					<ul class="actions" align="center">
						<li><input type="submit" value="S'inscrire" align="center" /></li>
					</ul>
				</div>
       		</div>
			</form>
        </div>
</section>
</body>
</html>

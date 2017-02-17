<style>
    .main{
        position:absolute;
        top:60px;
        bottom:60px;
        left:0;
        right:0;
        text-align:center;
        overflow:auto;
        background-color:#F2F2F2;
    }
</style>

<section id="main">
        <div class="inner">
                <?php echo form_open('form'); ?>
                <h3 align="center">Connexion</h3>
                <?php echo validation_errors(); ?>
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)">
                        <input type="email" name="email" value="" size="50" placeholder="E-mail"/>
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <input type="password" name="password" value="" size="50" placeholder="Mot de passe" />
                    </div>
                    <div class="12u$" align="center">
                        <ul class="actions" align="center">
                            <li><input type="submit" value="Connexion" align="center"/></li>
                        </ul>
                    </div>
                </div>
                </form>
        </div>
</section>

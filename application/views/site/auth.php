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
                <?php echo validation_errors(); ?>
                <?php echo form_open('form'); ?>
                <h5>Email Address</h5>
                <input type="email" name="email" value="" size="50" />
                <h5>Password</h5>
                <input type="password" name="password" value="" size="50" />
                <input type="submit" value="Submit" />
                </form>
        </div>
</section>

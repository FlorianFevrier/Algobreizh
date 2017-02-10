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
        <p>Authentification réussi </p>

        <p>
            <?php echo $_SESSION['mail']; ?>
        </p>
        <p>
            <?php echo $_SESSION['zone']; ?>
        </p>
        <p>
            <?php echo $_SESSION['statut']; ?>
    </div>
</section>
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
        <p><?php if(isset($succes)){
            echo $succes;
        }
          ?> </p>
        <p>Bienvenue <?php echo$_SESSION['nom']; ?></p>
    </div>
</section>

<section id="main">
    <div class="inner">
        <p><?php if(isset($succes)){
            echo $succes;
        }
          ?> </p>
        <p>Bienvenue <?php echo$_SESSION['nom']; ?></p>
    </div>
</section>
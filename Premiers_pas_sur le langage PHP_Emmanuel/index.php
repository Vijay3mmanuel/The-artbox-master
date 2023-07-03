<?php include('header.php'); ?>
<?php include('data.php'); ?>

    <main>
        <div id="liste-oeuvres">
        <?php  // parcourir le tableau ($oeuvres) des oeuvres en php
                //  a chaque fois que je rencontre une ligne 
                foreach($oeuvres as $key => $value){
                    ?>
                    <article class="oeuvre">
                        <a href="oeuvre.php?id=<?php echo $key; ?>">
                            <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['title']; ?>">
                            <h2><?php echo $value['title']; ?></h2>
                            <p class="description"><?php echo $value['author']; ?></p>
                        </a>
                     </article>
                <?php 
                }
        ?>
        </div>
    </main>

 

    
   <?php include('footer.php'); ?>
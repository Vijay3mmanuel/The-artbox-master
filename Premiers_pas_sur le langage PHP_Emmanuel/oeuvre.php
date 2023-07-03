<?php include('header.php'); ?>
<?php include('data.php'); ?>

<?php  
// recuperer l'id dans url
$id = $_GET['id'];

?>

<main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $oeuvres[$id]['image'] ?>" alt=<?php echo $oeuvres[$id]['title'] ?>>
            </div>
            <div id="contenu-oeuvre">
                <h1> <?php echo $oeuvres[$id]['title'] ?> </h1>
                <p class="description"><?php echo $oeuvres[$id]['author'] ?> </p>
                <p class="description-complete">
                <?php echo $oeuvres[$id]['description'] ?>
                </p>
            </div>
        </article>
</main>

    
<?php include('footer.php'); ?>
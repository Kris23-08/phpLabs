<?php     
    require_once("header.php");
?>

<div class="container" style="margin: 5em auto;">
    <div class="row">
        <div class="col-md-8">
        <?php     
            echo "<h2>Some Header</h2><p>Some Content</p>"
        ?>
        </div>
        <div class="col-md-4">
        <?php     
            require_once("sidebar.php");
        ?> 
        </div>
    </div>
</div>

<?php     
    require_once("footer.php");
?>
<?php
include "./classes/connection.class.php";
include "./classes/posts.class.php";
include "./controller/postContr.php";
$ViewAll= new PostContr("","","","");
?>
<div class="ViewAll">
    <h1>All Your Posts</h1>
    <div class="contenedor_view">
    <?php
    $ViewAll->ViewPost();
    ?>
    </div>
</div>

<?php
include "./classes/connection.class.php";
include "./classes/posts.class.php";
include "./controller/postContr.php";
$Edit= new PostContr("","","","");
?>
<div class="admin_container">
<?php
$Edit->EditingPost();
?>
</div>

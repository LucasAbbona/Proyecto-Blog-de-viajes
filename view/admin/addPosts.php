<div class="admin_container">
    <h1>Add a new post</h1>
    <form action="../includes/addpost.inc.php" method="post" enctype="multipart/form-data">
        <div>
        <label for="">Post Title</label>
        <input type="text" name="titulo">
        </div>
        <div>
        <label for="">Post Image</label>
        <input type="file" name="imagen">
        </div>
        <div>
        <label for="">Post Description</label>
        <textarea name="descripcion" rows="5"></textarea>
        </div>
        
        
        
        <input class="publish_btn" type="submit" value="PUBLISH" name="add_post">
    </form>
</div>

<?php
    if(!isset($_SESSION['user']))
    {
        header("Location:admin.php");
    }
?>

<div class="container-fluid">
    <div id=adminDiv>
        <h2>Add Instagram Image</h2>
        <form action="" method="post">
            <label>Copy Url</label><br>
            <input class="form-control" type="text" name="url"><br>
            <button class="btn btn-primary" id="login" type="submit" name="action" value="addImage">Save Image</button>
        </form>
    </div>
    <div id=adminDiv>
        <h2>Add Instagram Post</h2>
        <form action="" method="post">
            <label>Copy Url</label><br>
            <input class="form-control" type="text" name="url"><br>
            <button class="btn btn-primary" id="login" type="submit" name="action" value="addImage">Save Image</button>
        </form>
    </div>


</div>
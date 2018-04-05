<?php
// include_once '../config.php';
$result = false;

if(!empty($_POST)){
    $sql = 'INSERT INTO blog_posts(title, content) VALUES(:title, :content)';
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Block whith Platzi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog Title</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">            
            <h2>New Posts</h2>
            <p>
                <a class="btn btn-primary" href="posts.php">Back to Posts</a>
            </p>
            <?php
                if($result){
                    echo '<div class="alert alert-success">Post Saved!</div>';
                }
            ?>
            <form action="insert-post.php" method="post">
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input class="form-control" type="text" name="title" id="inputTitle">
                </div>
                <textarea class="form-control" name="content" id="inputContent" rows="5"></textarea><br>
                <input class="btn btn-primary" type="submit" value="Save" name="">
            </form>
        </div>
        <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <footer>
                This is a footer <br>
                <a href="admin/index.php">Admin Panel</a>
            </footer>
        </div>
        
    </div>
</div>
</body>
</html>
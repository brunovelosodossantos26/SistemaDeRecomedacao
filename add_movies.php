<?php
 session_start();
    if(isset($_GET['id'])){
        $_SESSION['id'] = $_GET['id'];
    }

include('header.php');
include('db/db.php');

    $flag = 0;

if(isset($_POST['submit'])){
    $result = mysqli_query($con,"INSERT INTO user_movies(user_id, movie_name, movie_rating) values ('$_SESSION[id]','$_POST[movie_name]','$_POST[movie_rating]')");
    if($result){
        echo('ok');
    }

    header("location: add_movies.php");
}


?>

<body>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
        <a href="" class="btn btn-success">Add Products/Movies</a>
        <a href="index.php" class="btn btn-info pull-right">Back</a>
        </h2>
    </div>

    <?php if($flag){ ?>
        <div class="alert alert-success">Filme inserido com sucesso no banco de dados!</div>
       
    <?php }?>

    <div class="panel-body">
    <form action="add_movies.php" method="post">
        <div class="form-group">
            <label for="username">Filmes</label>
            <input type="text" name="movie_name" id="movie_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="username">Avaliação de Filmes</label>
            <input type="number" name="movie_rating" id="movie_rating" class="form-control" required>
        </div>

        <div class="form-group">
        <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
        </div>
    </form>
    </div>


</div>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SR-Tentativa</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<div class="container" >
<h2><div class="well text-center">
Recomendação para você: 
    </div></h2>


<?php
include('db/db.php');
include('recommend.php');

$movies = mysqli_query($con,"SELECT * from user_movies");

$matrix = array();

while ($movie = mysqli_fetch_array($movies))
{
    $users = mysqli_query($con,"select username from users where id = $movie[user_id]");
    $username = mysqli_fetch_array($users);

    $matrix[$username['username']][$movie['movie_name']] = $movie['movie_rating'];

}

$users = mysqli_query($con,"select username from users where id = $_GET[id]");
$username = mysqli_fetch_array($users);

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a href="add_user.php" class="btn btn-success">Adicionar usuário </a>
            <a href="index.php" class="btn btn-info pull-right">Voltar</a>
        </h2>
    </div>

    <div class="panel-body">
    <table class="table table-striped">
        <th>Nome do filme</th>
        <th>Nota</th>
        
            <?php 
            $recommedation = array();
            $recommedation = getRecommendation($matrix,$username['username']);
            foreach($recommedation as $movie => $rating){

            
            ?>
            <tr>
                <td><?php echo $movie; ?></td>
                <td><?php echo $rating; ?></td>
            </tr>
            <?php } ?>
    </table>
    </div>
</div>
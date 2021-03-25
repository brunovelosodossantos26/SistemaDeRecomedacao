<?php
include('header.php');
include('db/db.php');
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
        
            <?php $result=mysqli_query($con,"SELECT * FROM user_movies where user_id ='$_GET[id]'"); 

            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['movie_name']; ?></td>
                <td><?php echo $row['movie_rating']; ?></td>
            </tr>
            <?php } ?>
    </table>
    </div>
</div>
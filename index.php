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
        <th>Usuário</th>
        <th>Adicionar Filmes</th>
        <th>Mostrar Filmes</th>
        <th>Recomendação de Filmes</th>
            <?php $result=mysqli_query($con,"SELECT * FROM users"); 
            while ($row=mysqli_fetch_array($result))
            {
            ?>
            <tr><td><?php echo $row['username']; ?></td>
                <td>
                    <form action="add_movies.php">
                        <input type="submit" name="add_movies" class="btn btn-primary" value="Adicionar Filmes">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    </form>
                </td>

                <td>
                    <form action="show_movies.php">
                        <input type="submit" name="show_movies" class="btn btn-primary" value="Mostrar Filmes">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    </form>
                </td>

                <td>
                    <form action="user_recomendation.php">
                        <input type="submit" name="show_movies" class="btn btn-primary" value="Mostrar Recomendação de Filmes">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    </form>
                </td>


            </tr>
            <?php } ?>
    </table>
    </div>
</div>
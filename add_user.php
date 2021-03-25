<?php
include('header.php');
include('db/db.php');

    $flag = 0;

if(isset($_POST['submit'])){
    $result = mysqli_query($con,"INSERT INTO users (username) values ('$_POST[username]')");
    if($result){
        $flag = 1;
    }

    header("location: add_user.php");
}


?>

<body>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
        <a href="" class="btn btn-success">Adicionar Filme</a>
        <a href="index.php" class="btn btn-info pull-right">Voltar</a>
        </h2>
    </div>

    <?php if($flag){ ?>
        <div class="alert alert-success">Usuário inserido com sucesso no banco de dados!</div>
    <?php }?>

    <div class="panel-body">
    <form action="add_user.php" method="post">
        <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>

        <div class="form-group">
        <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
        </div>
    </form>
    </div>


</div>
</body>
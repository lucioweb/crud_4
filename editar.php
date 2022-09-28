<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Lúcio Flávio Lemos">

    <!-- Bootstrap 5.1.3 - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Folha de estilo própria -->
    <link href="css\navbar.css" rel="stylesheet">

    <title>Editar</title>
</head>

<body>
    <header>
        <!-- Include do navbar da página  -->
        <?php include "shareds/navbar.php";?>
    </header>

    <main class="container">
        <!-- Include do update  -->
        <?php include "includes/update.php";?>
        <div class="text-center mb-4">
            <h3>EDITAR</h3>
            <p class="text-muted">Atualize os dados do usuário</p>
        </div>

        <?php

        $sql = "SELECT * FROM `crud_2` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width: 300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Primeiro nome</label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">

                    </div>
                    <div class="col">
                        <label class="form-label">Último nome</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label>Sexo:</label> &nbsp;

                    <input type="radio" class="form-check-input" name="gender" id="masculino" value="masculino" <?php echo ($row['gender'] == 'masculino') ? "checked" : ""; ?>>
                    <label for="massculino" class="form-input-label">Masculino</label> &nbsp;


                    <input type="radio" class="form-check-input" name="gender" id="feminino" value="feminino" <?php echo ($row['gender'] == 'feminino') ? "checked" : ""; ?>>
                    <label for="feminino" class="form-input-label">Feminino</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Atualizar</button>
                    <a href="data_table.php" class="btn btn-danger">Cancela</a>
                </div>
            </form>
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
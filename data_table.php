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
    <!-- Folha de estilo do data-table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css" />
    <!-- Folha de estilo própria -->
    <link href="css\navbar.css" rel="stylesheet">

    <title>Data table</title>
</head>

<body>
    <header>
        <!-- Include do navbar da página  -->
        <?php include "shareds/navbar.php"; ?>
    </header>

    <main class="container">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

        ?>
        <a href="cadastrar.php" class="btn btn-primary mb-3"><i class="fa-solid fa-plus fs-5 me-3"></i>CADASTRAR</a>
        <table id="datatable" class="table table-sm table-hover text-center">
            <!-- <table class="table table-sm table-dark"> -->
            <thead class="table-dark">
                <tr>
                    <th scope="col">CÓD</th>
                    <th scope="col">NOME</th>
                    <th scope="col">SOBRENOME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SEXO</th>
                    <th scope="col">EDITAR|EXCLUIR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";
                $sql = "SELECT * FROM `crud_2`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td class=""><?php echo $row['id'] ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $row['id'] ?>" class="link-primary"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="excluir.php?id=<?php echo $row['id'] ?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </main>
    <!-- CDN do jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    
    <!-- CDN do javascript do data-table -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        $(`#datatable`).DataTable({});
    </script>
</body>

</html>
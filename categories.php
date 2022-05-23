<!DOCTYPE html>
<html lang="en">

<head>
    <title>Categories</title>
    <link rel="icon" href="public/img/logos/favicon.png" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "dependencies.php"; ?>
</head>

<body>
    <div class="container">
        <?php require_once "main.php" ?>

        <div class="jumbotron">
            <h1 class="display-4">Categories</h1>
            <button class="btn btn-primary"  data-toggle="modal" data-target="#addModalCategory">
                <span class="fa-solid fa-layer-group"></span> Add category
            </button>
            <hr class="my-4">

            <div id="loadTableCategoy"></div>

        </div>

        <?php 
        require_once "views/categories/addModal.php"; 
        require_once "views/categories/updateModal.php"; 
        ?>
    </div>

    <script src="public/js/categories.js"></script>
</body>

</html>
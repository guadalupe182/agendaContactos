<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
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
            <h1 class="display-4">Contacts</h1>
            <button class="btn btn-primary">
                <span class="fa-solid fa-user-plus"></span> Add contact
            </button>
            <hr class="my-4">
            <div id="loadTableContacts"></div>
        </div>

        <script src="public/js/contacts.js"></script>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Address Book</title>
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
            <h1 class="display-4">Contact List</h1>

            <!--Content-->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="public/img/profile.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                           <p>
                           Abaout me: <br>
                           I am 28 years old, I am a computer engineering student at the University of Guadalajara, I am working for a Taiwanese company 
                           as a junior test engineer, in my free time I like to program listening to some deep house or loofi hip hop I also like to sleep while 
                           I can and Chinese food^.^
                           </p> 
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <!-- Copyright -->

            <p>
                &copy; All rights reserved
                Design: <a href="https://gperosas.netlify.app" target="_blanck">Guadalupe Rosas</a>
            </p>

        </div>
    </div>

</body>

</html>
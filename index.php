<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        .rowtop{
            height:50px;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="rowtop">
        </div>
        <div class="row">
            <div class="col-md-6"> 
                <div class="panel panel-primary">
                    <div class="panel-heading"> Form Validation </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
                            <p style="color:red;"> Required Field * </p>
                            <div class="form-group">
                                <label for="name"> Name: </label>
                                <input type="name" id="name" name="name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email"> E-mail: </label>
                                <span style="color:red;"> * </span> 
                                <input type="email" name="email" id="email" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"> Phone: </label>
                                <input type="tel" name="phone" id="phone" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd"> Password: </label>
                                <span style="color:red;"> * </span> 
                                <input type="password" id="pwd" name="password" class="form-control"/>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember" name="remember"> Remember me! </label>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right"> Submit </button>      
                        </form>
                    </div>
                </div> 
            </div>
            <div class="col-md-6"> 
                <div class="panel panel-danger">
                    <div class="panel-heading"> Validation Notes </div>
                    <div class="panel-body">
                    <ul>
                    <?php 
                        if($_POST)
                        {
                            if($_POST["email"] == ""){
                                echo "<li style='color:red;'> email field cannot pass empty </li>";
                            }
                            if($_POST["password"] == ""){
                                echo "<li style='color:red;'> password field cannot pass empty </li>";
                            }
                        }
                    ?>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
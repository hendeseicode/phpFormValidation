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
            <div class="col-md-2"></div>
            <div class="col-md-8"> 
                <div class="panel panel-default">
                    <div class="panel-heading"> Form Validation </div>
                    <div class="panel-body">
                        <form method="POST" action="form.php">
                            <div class="form-group">
                                <label for="name"> Name: </label>
                                <input type="name" id="name" name="name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email"> E-mail: </label>
                                <input type="email" name="email" id="email" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"> Phone: </label>
                                <input type="phone" name="phone" id="phone" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd"> Password: </label>
                                <input type="password" id="pwd" name="password" class="form-control"/>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember" name="remember"> Remember me! </label>
                            </div>
                            <button type="submit" class="btn btn-success pull-right"> Submit </button>      
                        </form>
                    </div>
                </div> 
            </div>
            <div class="col-md-2"> 
                
            </div>
        </div>
    </div>

</body>
</html>
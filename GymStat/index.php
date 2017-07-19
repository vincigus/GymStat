<!-- index.html page for GymStat -->

<!DOCTYPE html>
<head>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Link to main.css file -->
<link rel="stylesheet" href="http://sabal.uscb.edu/~vincigus/GymStat/View/main.css">
    
    <title>GymStat</title>
</head>

<body class="background-image">

        
    <div class="container-fluid">
        <div class="jumbotron row background-image">
            <div class="row text-center"><h1>GymStat</h1></div>
            
            <div class="row">
                <form>
                    <div class="col-md-2 col-md-offset-5 form-group text-center">
                        <label for="username">Username:</label>
                        <br>
                        <input type="text" class="form-control text-center" name="username" placeholder="Enter username">
                        
                        <br>
                        
                        <label for="password">Password:</label>
                        <br>
                        <input type="password" class="form-control text-center" name="password" placeholder="Enter password">
                        
                        <div class="checkbox">
                            <label><input type="checkbox">Remember me</label>
                        </div>
                        <a href="http://sabal.uscb.edu/~vincigus/GymStat/gymstat_manager/?action=edit_patrons">
                            <button type="button" class="btn btn-default">Submit</button>
                        </a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<!-- 
        <div class="container-fluid">
        <div class="jumbotron">
            <div class="col-lg-12"><h1>GymStat</h1></div>  
    
            <div class="col-lg-12">
                <form>
                    <div class="col-lg-12 col-lg-offset-6 form-group">
                        <label for="username">Username:</label>
                        <br>
                        <input type="text" class="form-control" name="username" placeholder="Enter username">
                    </div>

                    <div class="col-lg-12 col-lg-offset-4 form-group">
                        <label for="password">Password:</label>
                        <br>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>

                    <div class="checkbox col-lg-12 col-lg-offset-4">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                </form>
                <button type="button" class="btn btn-default">Submit</button>
            </div>
            
        </div>
    </div>
-->

</html>



<?php
require_once ('../Model/database.php');
require_once('../Model/gymstat_db.php');

$patrons = get_total_patrons();
$total_patrons = count($patrons);

$max_patrons = 50;

$bar_width = ($total_patrons / $max_patrons) * 100;

?>
<head>

    <!--refresh page every 10 seconds -->
    <META HTTP-EQUIV="refresh" CONTENT="5">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

       
        <!-- Link to main.css file -->
    <link rel="stylesheet" href="http://sabal.uscb.edu/~vincigus/GymStat/View/main.css">
</head>
<body class="background-image2">
<div class="container">
        <h4>Current USCB Gym Occupancy</h4>
        <div class="progress">
            <?php 
            if($bar_width < 50)
            { ?>
            <div class="progress-bar progress-bar-success" role="progressbar" 
                 style="width:<?php echo htmlspecialchars($bar_width) ?>%"><?php echo htmlspecialchars($bar_width) ?>%</div>
            <?php }
            else if($bar_width < 75)
            { ?>
            <div class="progress-bar progress-bar-warning" role="progressbar" 
                 style="width:<?php echo htmlspecialchars($bar_width) ?>%"><?php echo htmlspecialchars($bar_width) ?>%</div>
            <?php }
            else if($bar_width < 100) 
            { ?>
            <div class="progress-bar progress-bar-danger" role="progressbar" 
                 style="width:<?php echo htmlspecialchars($bar_width) ?>%"><?php echo htmlspecialchars($bar_width) ?>%</div>
            <?php } ?>

        </div>
        <h4> There are <?php echo htmlspecialchars($total_patrons); ?> patrons out of
            <?php echo htmlspecialchars($max_patrons); ?> in the gym.</h4>
        
    </div>
    
</body>
</html>
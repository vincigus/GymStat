<?php include ('../View/header.php');

/* 
 * 
 */

get_total_patrons();

?>
<div class="container">
    <h2 class="text-center">Current Gym Occupancy:</h2>
    <h3 class="text-center"><?php echo htmlspecialchars($total_patrons); ?></h3>
        <div class="progress text-center">
            
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
            else 
            { ?>
            <div class="progress-bar progress-bar-danger" role="progressbar" 
                 style="width:<?php echo htmlspecialchars($bar_width) ?>%"><?php echo htmlspecialchars($bar_width) ?>%</div>
            <?php } ?>
        </div>

        <div class="row text-center">

            <div class="col-md-3 col-md-offset-3">
                <a href="http://sabal.uscb.edu/~vincigus/GymStat/gymstat_manager/?action=add_patron">
                <button type="button" class="btn btn-success" >Add Patron</button>
                </a>
            </div>

            <div class="col-md-3 ">
                <a href="http://sabal.uscb.edu/~vincigus/GymStat/gymstat_manager/?action=delete_patron">
                <button type="button" class="btn btn-danger"> Remove Patron</button>
                </a>
            </div>

        </div>
    </div>
    
</body>
</html>
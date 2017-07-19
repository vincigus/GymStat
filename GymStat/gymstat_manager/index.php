<?php
/* 
 * Index file for the gymstat_manager folder. Will contain switch
 * to direct where the user needs to go.
 */

require_once ('../Model/database.php');
require_once('../Model/gymstat_db.php');

$patrons = get_total_patrons();
$action = filter_input(INPUT_POST, 'action');
$total_patrons = count($patrons);

$max_patrons = 50;

$bar_width = ($total_patrons / $max_patrons) * 100;


if($action == NULL)
{
    $action = filter_input(INPUT_GET, 'action');
    
    if($action == NULL)
    {
        $action = 'edit_patrons';
    }
}

switch($action)
{
    
    case 'add_patron':
        add_patron();
        $action = 'edit_patrons';
        $patrons = get_total_patrons();
        include('../gymstat_manager/edit_patrons.php');
        break;

    case 'delete_patron':
        delete_patron();
        $action = 'edit_patrons';
        $patrons = get_total_patrons();
        include('../gymstat_manager/edit_patrons.php');
        break;

    case 'check_in':
        include('../gymstat_manager/check_in.html');
        break;

    case 'edit_patrons':
        include('../gymstat_manager/edit_patrons.php');
        break;
}

?>
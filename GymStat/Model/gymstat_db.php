<?php
    /*
     * Library that will be used to perform all the modifications
     * to the GymStat database.
     */

     function get_total_patrons()
     {
         global $db;
         
         $query = 'SELECT * FROM patrons';
         
         $statement = $db->prepare($query);
         $statement->execute();
         $groups = $statement->fetchAll();
         $statement->closeCursor();
         return $groups;
     }

     function add_patron()
     {
         global $db;
         $query = 'INSERT INTO patrons
                   (check_in)
                   VALUES
                   (CURRENT_TIME())';
         
         $statement = $db->prepare($query);
         $statement->execute();
         $statement->closeCursor();
         
         $patron_id = $db->lastInsertId();
         return $patron_id;
     }

     function delete_patron()
     {
        global $db;
        $query = 'DELETE FROM patrons
                  ORDER BY patron_id DESC LIMIT 1';

        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();
     }
?>
<?php
//si aucun widgets, inutile d'afficher un aside vide
    if(!is_active_sidebar('sidebar')){
        return;
    }
?>
<aside class ="main-aside">
    <?php dynamic_sidebar('sidebar');?>

</aside>
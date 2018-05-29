<?php
//update_delete.php
if ($_GET['back'] == 'Yes') {
    //action for Yes
} else if ($_GET['back'] == 'No') {
    //action for No
    header('Location: template.html');
    exit;
} else {
    header('Location: template.html');
    exit;
}

?>
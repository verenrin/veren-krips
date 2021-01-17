<?php 

    // Allowing POST method only
    if (!isset($_GET)) {
        die('<h1 class="try-hack">Restricted access!</h1>');
    }

    session_start();
    define('BASE', 'BASE');
    
    require_once '../utility/config.php';
    require_once '../utility/db.php';
    require_once '../utility/utility.php';

    /**
     * DB class
     */

     require_once '../model/data-nilai.php';


     $DataNilaiDB = new DB_DataNilai();

        // phpinfo();

     //////////////// END OF DB Class ////////////////

    $isContextValid = true;
    if (isset($_GET['context'])) {
        switch($_GET['context']) {
            case 'data':
                require_once './data/data-nilai.php';
                break;

            default:
                $isContextValid = false;
                break;
        }
    } else {
        $isContextValid = false;
    }

    if (!$isContextValid) {
        echo json_encode(createGeneralResponseModel(false, "Invalid Context"));
    }


?>
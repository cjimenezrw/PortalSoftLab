<?php
Class Arbu_Controller Extends Arbu_Model {

    // CONST //
    
    // PUBLIC VARIABLES //

    // PROTECTED VARIABLES //
    
    // PRIVATE VARIABLES //
        private $data = [];

    public function __construct() {
        parent::init();
    }

    public function __destruct() { }

    public function arri_inde() {
        $this->load_class("arri_inde", "controller");
        $arri_inde = new Arri_inde_Controller();
        $axn = (isset($_POST['axn']) ? $_POST['axn'] : (isset($_GET['axn']) ? $_GET['axn'] : NULL));
        switch ($axn) {
            case 'readXLSX':
                header('Content-Type: application/json');
                echo json_encode($arri_inde->readXLSX(),true,512);
                break;
            default:
                /*
                require_once(CORE_PATH . 'src' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'header.php');
                require_once(CORE_PATH . 'src' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'stage' . DIRECTORY_SEPARATOR . 'breadCrumbs.php');
                require_once(SYS_PATH . $this->sysModule . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'arri_inde.php');
                require_once(CORE_PATH . 'src' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'footer.php');
                require_once(CORE_PATH . 'src' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'stage' . DIRECTORY_SEPARATOR . 'analyticstracking.php');
                */
                
                $this->load_view('arri_inde',$arri_inde->get_buques_arribos(),NULL,FALSE);
                break;
        }
        return;
    }

}

<?php
Class Arri_inde_Controller Extends Arbu_Model {

    // CONST //
        const HABILITADO = 0;
        const DESHABILITADO = 1;
        const OCULTO = 2;

    // PUBLIC VARIABLES //

    // PROTECTED VARIABLES //

    // PRIVATE VARIABLES //
        private $data = [];
        private $idTran = 'arri_inde';

    public function __construct() {
        parent::init();
    }

    public function __destruct() { }

    public function readXLSX(){

        $fileid = '1QYZFPBQlBCNP_Hkf7gOgNMr6aKxs70qr';
        $format = 'csv';
        $format = 'xlsx';
        $url = 'https://docs.google.com/spreadsheets/d/'.$fileid.'/export?format='.$format.'&id='.$fileid;


        if(file_put_contents(TMP_HARDPATH.'arribos.xlsx',file_get_contents($url))) {
    
            require_once CORE_PATH . 'assets/vendor/autoload.php';
            $objReader = PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
            $objPHPExcel = $objReader->load(TMP_HARDPATH.'arribos.xlsx');
            $objPHPExcel->getActiveSheet()->unmergeCells('A1:D1');
            $objPHPExcel->getActiveSheet()->removeRow(1,1);

            $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, "Xlsx");
            $writer->save(TMP_HARDPATH.'arribos2.xlsx');


            $readData = parent::importData([
                'fileName' => TMP_HARDPATH.'arribos2.xlsx',
                'asArray' => TRUE
            ]);
            //exit('<pre>'.print_r($readData,1).'</pre>');
            
            $buques = [];
            for($i=0; $i < count($readData['Arribos y Zarpes']['Estatus']); $i++){
                $key = trim($readData['Arribos y Zarpes']['Buque '][$i]).'_'.trim($readData['Arribos y Zarpes']['Bandera '][$i]);
                if(!isset($buques[$key])){
                    $buques[$key] = $key;
                }

                $this->arbu['axn'] = 'guardar_buque';
                $this->arbu['skBuque'] = NULL;
                $this->arbu['sNombre'] = $readData['Arribos y Zarpes']['Buque '][$i];
                $this->arbu['sTipoTrafico'] = $readData['Arribos y Zarpes']['T. Tráfico '][$i];
                $this->arbu['skEstatus'] = 'AC';
                $this->arbu['sLineaNaviera'] = $readData['Arribos y Zarpes']['Línea Naviera '][$i];
                $this->arbu['sBandera'] = $readData['Arribos y Zarpes']['Bandera '][$i];
    
                $stpCUD_buques = $this->stpCUD_buques();
                //exit('<pre>'.print_r($stpCUD_buques,1).'</pre>');

                if(!empty($stpCUD_buques['skBuque'])){
                    $this->arbu['axn'] = 'guardar_arribo';
                    $this->arbu['skBuque'] = $stpCUD_buques['skBuque'];
                    $this->arbu['skEstatus'] = 'AC';
                    $this->arbu['sCodigo'] = $readData['Arribos y Zarpes']['Código'][$i];
                    $this->arbu['sCodigoPuerto'] = $readData['Arribos y Zarpes']['C. Puerto'][$i];
                    $this->arbu['sCodigoAtraque'] = $readData['Arribos y Zarpes']['C. Atraque'][$i];
                    $this->arbu['sViaje'] = $readData['Arribos y Zarpes']['Viaje '][$i];
                    $this->arbu['sIndicativoLlama'] = $readData['Arribos y Zarpes']['I. Llamada '][$i];
                    $this->arbu['sLineaNaviera'] = $readData['Arribos y Zarpes']['Línea Naviera '][$i];
                    $this->arbu['dFechaInicioOperaciones'] = (!empty(trim($readData['Arribos y Zarpes']['F. Inicio Op. '][$i])) ? date('Ymd H:i:s', strtotime(str_replace('/', '-', $readData['Arribos y Zarpes']['F. Inicio Op. '][$i]))) : NULL);
                    $this->arbu['dFechaTerminoOperaciones'] = (!empty(trim($readData['Arribos y Zarpes']['F. Término Op. '][$i])) ? date('Ymd H:i:s', strtotime(str_replace('/', '-', $readData['Arribos y Zarpes']['F. Término Op. '][$i]))) : NULL);

                    $stpCUD_arribos = $this->stpCUD_arribos();
                    //exit('<pre>'.print_r($stpCUD_arribos,1).'</pre>');
                }
            }
            //echo count($buques)."<br>";
            //exit('<pre>'.print_r($buques,1).'</pre>');
            exit('<pre>'.print_r('Muajajaja, Habemus Buques y Arribos!',1).'</pre>');
        }

    }

}
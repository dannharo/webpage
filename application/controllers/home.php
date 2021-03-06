<?php
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->data['title'] = 'Inicio';
        $this->data['current'] = 'inicio';
        $this->data['datosTorneo'] =  $this->home_model->getTorneoActual(ID_TORNEO);
        $this->data['categorias'] = $this->home_model->getCategoriasTorneo($this->data['datosTorneo'][0]['ID_TORNEO']);
    }
    public function index(){
        $this->data['vista'] = null;//$this->load->view('predial/busqueda','',TRUE);
        $this->load->view('templates/layout',$this->data);
    }
}
?>
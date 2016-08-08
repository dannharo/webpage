<?php
class Equipo extends CI_Controller{
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->model('equipo_model');
        $this->data['title'] = 'Equipos';
        $this->data['current'] = 'equipo';
        $this->data['datosTorneo'] =  $this->home_model->getTorneoActual(ID_TORNEO);
        $this->data['categorias'] = $this->home_model->getCategoriasTorneo($this->data['datosTorneo'][0]['ID_TORNEO']);
    }
    public function index(){
        $this->data['datos'] = $this->equipo_model->getPosiciones(1);
        $this->data['vista'] = $this->load->view('equipo/index',$this->data,TRUE);
        $this->load->view('templates/layout',$this->data);
    }
}
?>
<?php
class Jugadores extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->library('grocery_CRUD');
        $this->data['title'] = 'Jugadores - Admon';
        $this->data['current'] = 'jugadores';
        $this->data['datosTorneo'] =  $this->home_model->getTorneoActual(ID_TORNEO);
        $this->data['categorias'] = $this->home_model->getCategoriasTorneo($this->data['datosTorneo'][0]['ID_TORNEO']);
    }
    public function index(){
        $this->data['vista'] = $this->load->view('admin/jugadores/jugadores_main','',TRUE);
        $this->load->view('admin/layout',$this->data);
    }
}
?>
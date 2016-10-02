<?php
class Categorias extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->library('grocery_CRUD');
        $this->data['title'] = 'Categorias - Admon';
        $this->data['current'] = 'admon-tor';
        $this->data['datosTorneo'] =  $this->home_model->getTorneoActual(ID_TORNEO);
        $this->data['categorias'] = $this->home_model->getCategoriasTorneo($this->data['datosTorneo'][0]['ID_TORNEO']);
    }
    public function index(){
        $crud = new Grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('t_categoria');
        $crud->set_relation('id_torneo','t_torneo','nombre',array('id_liga'=>ID_TORNEO));
        $crud->set_relation('campeon','t_equipo','nombre',array('id_categoria'=>'t_categoria.id_categoria'));
        $crud->where('id_liga',ID_TORNEO);
        $output = $crud->render();
        $this->data['vista'] = $this->load->view('admin/categorias/categorias_main',$output,TRUE);
        $this->load->view('admin/layout',$this->data);
    }
}
?>
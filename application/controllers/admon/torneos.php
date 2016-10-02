<?php
class Torneos extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->library('grocery_CRUD');
        $this->data['title'] = 'Toreneos - Admon';
        $this->data['current'] = 'admon-tor';
        $this->data['datosTorneo'] =  $this->home_model->getTorneoActual(ID_TORNEO);
        $this->data['categorias'] = $this->home_model->getCategoriasTorneo($this->data['datosTorneo'][0]['ID_TORNEO']);
    }
    public function index(){
        $crud = new Grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('t_torneo');
        $crud->columns('nombre','fecha_inicio','fecha_termino','status');
        $crud->add_fields('id_liga','nombre','fecha_inicio','fecha_termino','status');
        $crud->edit_fields('nombre','fecha_inicio','fecha_termino','status');
        $crud->display_as('status','Estatus del torneo');
        $crud->set_relation('status','cat_status_torneo','nombre');
        $crud->required_fields('nombre','activo');
        $crud->field_type('id_liga','hidden',ID_TORNEO);
        $crud->where('id_liga',$this->data['datosTorneo'][0]['ID_TORNEO']);
        $crud->unset_delete();
        $output = $crud->render();
        $this->data['vista'] = $this->load->view('admin/torneo/torneo_main',$output,TRUE);
        $this->load->view('admin/layout',$this->data);
    }
}
?>
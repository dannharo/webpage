<?php
class Home_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getTorneoActual($idLiga){
        $sql = "select 
                  t_l.id_liga AS ID_LIGA
                  ,t_l.nombre AS NOMBRE_LIGA
                  ,t_t.id_torneo AS ID_TORNEO
                  ,t_t.nombre AS NOMBRE_TORNEO
                  ,t_t.fecha_inicio AS FECHA_INICIO
                from T_LIGA t_l
                INNER JOIN T_TORNEO	t_t ON t_t.id_liga = t_l.id_liga AND t_t.status = 1
                Where t_l.id_liga = $idLiga";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function getCategoriasTorneo($idTorneo){
        $sql = "SELECT 
            t_c.id_categoria AS ID_CATEGORIA
            ,t_c.nombre AS NOMBRE_CATEGORIA
            ,t_c.descripcion AS DESCRIPCION_CATEGORIA
        FROM t_categoria t_c 
        WHERE t_c.id_torneo = $idTorneo";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>
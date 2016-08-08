<?php
class Equipo_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getPosiciones($idEquipo = 0, $idCategoria = 0, $idTorneo = 0){
        $sql = "SELECT
	        e.id_categoria
	        ,e.id_equipo 
	        ,e.nombre NOMBRE_EQUIPO
	        , count(1) AS JUEGO_JUGADO
            ,SUM(r.ganador) AS JUEGO_GANADO
            ,SUM(IF(r.ganador = 0,1,0)) AS JUEGO_PERDIDO
            ,SUM(r.puntos_anotados) AS PNTS_ANOTADOS 
            ,SUM(r.puntos_recibidos) AS PNTS_RECIBIDOS
            ,(SUM(r.puntos_anotados) - SUM(r.puntos_recibidos)) AS DIFERENCIA
            ,SUM(IF(r.ganador = 1, 3,2)) AS PUNTOS
          FROM 
              rel_equipo_partido r
            LEFT JOIN t_equipo e ON e.id_equipo = r.id_equipo
            GROUP BY r.id_equipo
        ORDER BY PUNTOS DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function register($array,$table){

        $data = array(
            'matricola' => $array['matricola'],
            'nome' => $array['nome'] ,
            'cognome' => $array['cognome'] ,
            'email' => $array['email'],
            'crediti' => $array['crediti']
        );

        $this->db->insert($table, $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function get_all_users($table){
        $this->db->select('nome,cognome');
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function raffle_winner($table){
        $this->db->select('*')->order_by('rand()')->limit(3);
        $query = $this->db->get($table);
        return $query->result_array();

    }

    public function count($table){
        return $this->db->count_all($table);
    }
}
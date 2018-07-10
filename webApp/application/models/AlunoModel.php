<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class AlunoModel extends CI_Model{
    public function getAlunos(){
        $query= $this->db->get('aluno');
        return $query->result();
    }
}
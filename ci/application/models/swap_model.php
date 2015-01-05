<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Swap_model extends CI_Model {

    function swap_data($submit){
        $arrayA = array('number' => $submit['numberA'], 'floor' => $submit['floorA']);
        $this->db->where($arrayA);
        $A = $this->db->get('shelf');

        $arrayB = array('number' => $submit['numberB'], 'floor' => $submit['floorB']);
        $this->db->where($arrayB);
        $B = $this->db->get('shelf');

        if ($A->num_rows()==1 and $B->num_rows()==1){
            $queryA = $A->row();
            $queryB = $B->row();

            $dataA = array(
                'number' => $queryA->number,
                'system' => $queryB->system,
                'min' => $queryB->min,
                'max' => $queryB->max,
                'floor' => $queryA->floor,
                'zone' => $queryA->zone
            );
            $this->db->where($arrayA);
            $this->db->update('shelf', $dataA);
            $dataB = array(
                'number' => $queryB->number,
                'system' => $queryA->system,
                'min' => $queryA->min,
                'max' => $queryA->max,
                'floor' => $queryB->floor,
                'zone' => $queryB->zone
            );
            $this->db->where($arrayB);
            $this->db->update('shelf', $dataB);
            return TRUE;
        }
        return FALSE;
    }
}
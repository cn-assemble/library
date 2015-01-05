<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Update_model extends CI_Model {

    public function update($number,$min,$max,$zone,$system,$oldnumber){
    	 $query = "UPDATE shelf
          SET number='$number'".",min='$min',max='$max',zone = '$zone',system='$system'
          WHERE number = '$oldnumber'";
    	 $a = $this->db->query($query);
    }

    public function add($number,$min,$max,$zone,$system,$floor){
    	 $query = "INSERT INTO shelf values ('$number','$system','$min','$max','$floor','$zone')";
    	 $a = $this->db->query($query);
    }

    public function delete($number,$zone,$floor){
    	 $query = "DELETE FROM shelf WHERE number = '$number' AND zone = '$zone' AND floor = '$floor' ";
    	 $a = $this->db->query($query);
    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_all() {

        $query = $this->db->query('SELECT *	FROM shelf');

        foreach ($query->result() as $row)
        {
            $data['shelf'][] = array(
                'number'  => $row->number,
                'floor' => $row->floor,
                'zone' => $row->zone
            );
        }

       return $data;
    }

    function get_all_admin() {

        $query = $this->db->query('SELECT * FROM shelf');

        foreach ($query->result() as $row)
        {
            $data['shelf'][] = array(
                'number'  => $row->number,
                'min'  => $row->min,
                'max'  => $row->max,
                'system'  => $row->system,
                'floor' => $row->floor,
                'zone' => $row->zone
            );
        }

       return $data;
    }

    function get_shelf($lang,$callno)
    {
        if($lang == "ENG")
        {
            if(!stripos($callno,"."))
            {
                $callno = str_replace(" ","",$callno);
                $query = $this->db->query("SELECT number, floor, zone 
                    FROM shelf WHERE MIN <= '$callno' AND MAX >= '$callno' AND system = 'new'");

                foreach ($query->result() as $row)
                {
                    $data['blink'] = array(
                        'number' => $row->number,
                        'floor' => $row->floor,
                        'zone' => $row->zone
                    );
                }

                return $data;
            }
            else
            {
                $callno = str_replace(" ","",$callno);
                $query = $this->db->query("SELECT number, floor, zone 
                    FROM shelf WHERE MIN <= '$callno' AND MAX >= '$callno' AND floor='2' AND system = 'old' ");

                foreach ($query->result() as $row)
                {
                    $data['blink'] = array(
                        'number' => $row->number,
                        'floor' => $row->floor,
                        'zone' => $row->zone
                    );
                }

                return $data;
            }
        }
        else
        {
            if(!stripos($callno,"."))
            {
                $callno = str_replace(" ","",$callno);
                $query = $this->db->query("SELECT number, floor, zone 
                    FROM shelf WHERE MIN <= '$callno' AND MAX >= '$callno' AND system = 'new' ");

                foreach ($query->result() as $row)
                {
                    $data['blink'] = array(
                        'number' => $row->number,
                        'floor' => $row->floor,
                        'zone' => $row->zone
                    );
                }

                return $data;
            }
            else
            {
                $callno = str_replace(" ","",$callno);
                $query = $this->db->query("SELECT number, floor, zone 
                    FROM shelf WHERE MIN <= '$callno' AND MAX >= '$callno' AND floor='3' AND system = 'old'");

                foreach ($query->result() as $row)
                {
                    $data['blink'] = array(
                        'number' => $row->number,
                        'floor' => $row->floor,
                        'zone' => $row->zone
                    );
                }

                return $data;
            }
        }
    }
}

/**
 * Created by PhpStorm.
 * User: chocho-sama
 * Date: 12/2/14
 * Time: 1:29 PM
 */ 
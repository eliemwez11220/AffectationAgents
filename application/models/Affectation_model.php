<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Affectation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get affectation by Affectation_id
     */
    function get_affectation($Affectation_id)
    {
        return $this->db->get_where('tb_am_affectations',array('Affectation_id'=>$Affectation_id))->row_array();
    }
    
    /*
     * Get all affectations count
     */
    function get_all_affectations_count()
    {
        $this->db->from('tb_am_affectations');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all affectations
     */
    function get_all_affectations($params = array())
    {
        $this->db->order_by('Affectation_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_am_affectations')->result_array();
    }
        
    /*
     * function to add new affectation
     */
    function add_affectation($params)
    {
        $this->db->insert('tb_am_affectations',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update affectation
     */
    function update_affectation($Affectation_id,$params)
    {
        $this->db->where('Affectation_id',$Affectation_id);
        return $this->db->update('tb_am_affectations',$params);
    }
    
    /*
     * function to delete affectation
     */
    function delete_affectation($Affectation_id)
    {
        return $this->db->delete('tb_am_affectations',array('Affectation_id'=>$Affectation_id));
    }
}
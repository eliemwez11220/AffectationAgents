<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fiche_evaluation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get fiche_evaluation by Id_evaluation
     */
    function get_fiche_evaluation($Id_evaluation)
    {
        return $this->db->get_where('fiche_evaluation',array('Id_evaluation'=>$Id_evaluation))->row_array();
    }
    
    /*
     * Get all fiche_evaluation count
     */
    function get_all_fiche_evaluation_count()
    {
        $this->db->from('fiche_evaluation');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all fiche_evaluation
     */
    function get_all_fiche_evaluation($params = array())
    {
        $this->db->order_by('Id_evaluation', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('fiche_evaluation')->result_array();
    }
        
    /*
     * function to add new fiche_evaluation
     */
    function add_fiche_evaluation($params)
    {
        $this->db->insert('fiche_evaluation',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fiche_evaluation
     */
    function update_fiche_evaluation($Id_evaluation,$params)
    {
        $this->db->where('Id_evaluation',$Id_evaluation);
        return $this->db->update('fiche_evaluation',$params);
    }
    
    /*
     * function to delete fiche_evaluation
     */
    function delete_fiche_evaluation($Id_evaluation)
    {
        return $this->db->delete('fiche_evaluation',array('Id_evaluation'=>$Id_evaluation));
    }
}

<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fiche_affectation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fiche_affectation_model');
    } 

    /*
     * Listing of fiche_affectation
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('fiche_affectation/index?');
        $config['total_rows'] = $this->Fiche_affectation_model->get_all_fiche_affectation_count();
        $this->pagination->initialize($config);

        $data['fiche_affectation'] = $this->Fiche_affectation_model->get_all_fiche_affectation($params);
        
        $data['_view'] = 'fiche_affectation/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fiche_affectation
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Matricule' => $this->input->post('Matricule'),
				'DateFiche_service' => $this->input->post('DateFiche_service'),
				'Objectif' => $this->input->post('Objectif'),
				'Id_gouverneur' => $this->input->post('Id_gouverneur'),
            );
            
            $fiche_affectation_id = $this->Fiche_affectation_model->add_fiche_affectation($params);
            redirect('fiche_affectation/index');
        }
        else
        {
			$this->load->model('Agent_model');
			$data['all_agents'] = $this->Agent_model->get_all_agents();
            
            $data['_view'] = 'fiche_affectation/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fiche_affectation
     */
    function edit($Id)
    {   
        // check if the fiche_affectation exists before trying to edit it
        $data['fiche_affectation'] = $this->Fiche_affectation_model->get_fiche_affectation($Id);
        
        if(isset($data['fiche_affectation']['Id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Matricule' => $this->input->post('Matricule'),
					'DateFiche_service' => $this->input->post('DateFiche_service'),
					'Objectif' => $this->input->post('Objectif'),
					'Id_gouverneur' => $this->input->post('Id_gouverneur'),
                );

                $this->Fiche_affectation_model->update_fiche_affectation($Id,$params);            
                redirect('fiche_affectation/index');
            }
            else
            {
				$this->load->model('Agent_model');
				$data['all_agents'] = $this->Agent_model->get_all_agents();

                $data['_view'] = 'fiche_affectation/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fiche_affectation you are trying to edit does not exist.');
    } 

    /*
     * Deleting fiche_affectation
     */
    function remove($Id)
    {
        $fiche_affectation = $this->Fiche_affectation_model->get_fiche_affectation($Id);

        // check if the fiche_affectation exists before trying to delete it
        if(isset($fiche_affectation['Id']))
        {
            $this->Fiche_affectation_model->delete_fiche_affectation($Id);
            redirect('fiche_affectation/index');
        }
        else
            show_error('The fiche_affectation you are trying to delete does not exist.');
    }
    
}

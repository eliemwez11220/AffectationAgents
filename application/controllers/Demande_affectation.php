<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Demande_affectation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Demande_affectation_model');
    } 

    /*
     * Listing of demande_affectation
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('demande_affectation/index?');
        $config['total_rows'] = $this->Demande_affectation_model->get_all_demande_affectation_count();
        $this->pagination->initialize($config);

        $data['demande_affectation'] = $this->Demande_affectation_model->get_all_demande_affectation($params);
        
        $data['_view'] = 'demande_affectation/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new demande_affectation
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Matricule' => $this->input->post('Matricule'),
				'LiBourgmestre' => $this->input->post('LiBourgmestre'),
				'Date_Demande' => $this->input->post('Date_Demande'),
            );
            
            $demande_affectation_id = $this->Demande_affectation_model->add_demande_affectation($params);
            redirect('demande_affectation/index');
        }
        else
        {
			$this->load->model('Agent_model');
			$data['all_agents'] = $this->Agent_model->get_all_agents();

			$this->load->model('Commune_model');
			$data['all_communes'] = $this->Commune_model->get_all_communes();
            
            $data['_view'] = 'demande_affectation/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a demande_affectation
     */
    function edit($Id_demande_affectation)
    {   
        // check if the demande_affectation exists before trying to edit it
        $data['demande_affectation'] = $this->Demande_affectation_model->get_demande_affectation($Id_demande_affectation);
        
        if(isset($data['demande_affectation']['Id_demande_affectation']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Matricule' => $this->input->post('Matricule'),
					'LiBourgmestre' => $this->input->post('LiBourgmestre'),
					'Date_Demande' => $this->input->post('Date_Demande'),
                );

                $this->Demande_affectation_model->update_demande_affectation($Id_demande_affectation,$params);            
                redirect('demande_affectation/index');
            }
            else
            {
				$this->load->model('Agent_model');
				$data['all_agents'] = $this->Agent_model->get_all_agents();

				$this->load->model('Commune_model');
				$data['all_communes'] = $this->Commune_model->get_all_communes();

                $data['_view'] = 'demande_affectation/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The demande_affectation you are trying to edit does not exist.');
    } 

    /*
     * Deleting demande_affectation
     */
    function remove($Id_demande_affectation)
    {
        $demande_affectation = $this->Demande_affectation_model->get_demande_affectation($Id_demande_affectation);

        // check if the demande_affectation exists before trying to delete it
        if(isset($demande_affectation['Id_demande_affectation']))
        {
            $this->Demande_affectation_model->delete_demande_affectation($Id_demande_affectation);
            redirect('demande_affectation/index');
        }
        else
            show_error('The demande_affectation you are trying to delete does not exist.');
    }
    
}

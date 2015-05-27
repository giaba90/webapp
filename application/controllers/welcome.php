<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('form','url'));
    }

	public function index()
	{
    //    $data['users'] = $this->user_model->get_all_users('primogiorno');
        $this->load->view('welcome_message');
	}

    public function register($table){
        //set validation rule
        $this->form_validation->set_rules('nome', 'Nome', 'required|trim|max_length[50]');
        $this->form_validation->set_rules('cognome', 'Cognome', 'required|trim|max_length[50]');
        $this->form_validation->set_rules('matricola', 'Matricola', 'integer'); //matricola
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email'); //email

        if ($this->form_validation->run() == TRUE) { // validation has been passed
            //insert in the table
            $data_input = array(
                "matricola" => $this->input->post('matricola'),
                "nome" =>  $this->input->post('nome'),
                "cognome" => $this->input->post('cognome'),
                "email" => $this->input->post('email'),
                "crediti" => (bool) $this->input->post('crediti')
            ); //return true if it's all ok
            $success = $this->user_model->register($data_input,$table);
            if ($success) {
              $this->session->set_flashdata('message', ' Utente inserito con successo');
              redirect('/', 'refresh');
            } else {
                //If there was an error when you tried to update post
                //set the flash data error message if there is one
                $this->session->set_flashdata('message', 'Errore inserimento utente');
                redirect('/', 'refresh');
            }
        } else { // validation has not been passed, refresh the view
            $this->session->set_flashdata('message', 'Errore nella validazione del form');
            redirect('/', 'refresh');
        }
    }

    public function raffle_winner($table){
            $data['table'] = $table;
            $data['list'] = $this->user_model->raffle_winner($table);
            $this->load->view('winner', $data);
        }

    public function get_users($table){
        $data['table'] = $table;
        $data['users'] = $this->user_model->get_all_users($table);
        $this->load->view('user',$data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
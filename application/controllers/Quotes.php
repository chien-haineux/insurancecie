<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper([ 'form', 'url' ]);

        $this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('quotes/quote');
		$this->load->view('footer');
	}

	public function myquotes()
	{
		var_dump(session_id());
		$carResults = $this->db->get_where('carQuotes', [ 'userSessId' => session_id() ])->result();

		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('quotes/myquotes', [ 'carResults' => $carResults ]);
		$this->load->view('footer');
	}

	/** Home quotes related methods **/

	public function homeQuote()
	{
		$this->form_validation->set_rules('firstName', 'first name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('lastName', 'last name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('province', 'province', 'trim|required|exact_length[2]');
		$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[3]|max_length[90]');
		$this->form_validation->set_rules('phoneNumber', 'phone number', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('gender', 'gender', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('DOBMonth', 'month of birth', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]');
		$this->form_validation->set_rules('DOBDay', 'day of birth', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]');
		$this->form_validation->set_rules('DOBYear', 'year of birth', 'trim|required|is_natural_no_zero|exact_length[4]');
		$this->form_validation->set_rules('homeType', 'home type', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('constructionYear', 'year of construction', 'trim|required|is_natural_no_zero|exact_length[4]');
		$this->form_validation->set_rules('claimsLast5Years', 'claims in the last 5 years', 'trim|required|is_natural|min_length[1]|max_length[5]');

        if($this->form_validation->run() == false)
        {
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('quotes/homeQuote');
			$this->load->view('footer');
        }

        else
        {
			$this->persistHomeQuote($this->input->post());

            $this->load->view('quotes/success');
        }
	}

	/*
	 * Persist home quote on home quote table
	 *
	 */
	private function persistHomeQuote(array $homeQuote)
	{
		// We use the session id as the user id for prototyping sake.
		$homeQuote['userSessId'] = session_id();

		$this->db->insert('homeQuotes', $homeQuote);
	}


	/** Car quotes related methods **/

	public function carInsurance()
	{
		// If form is being submitted, save data
		if(count($this->input->post()) > 0)
		{
			// check validateCarData()
			$this->persistCarQuote($this->input->post());
		}

		$form = $this->db->get_where('carQuotes', [ 'id' =>  $this->uri->segment(3) ])->row_array();

		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('quotes/carQuote', $form);
		$this->load->view('footer');
	}

	/** Set validation rules and return wether data is valid. */
	private function validateCarData()
	{
		$this->form_validation->set_rules('firstName', 'first name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('lastName', 'last name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('province', 'province', 'trim|required|exact_length[2]');
		$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[3]|max_length[90]');
		$this->form_validation->set_rules('phoneNumber', 'phone number', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('gender', 'gender', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('DOBMonth', 'month of birth', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]');
		$this->form_validation->set_rules('DOBDay', 'day of birth', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]');
		$this->form_validation->set_rules('DOBYear', 'year of birth', 'trim|required|is_natural_no_zero|exact_length[4]');
		$this->form_validation->set_rules('claimsLast5Years', 'claims in the last 5 years', 'trim|required|is_natural|min_length[1]|max_length[5]');

		return $this->form_validation->run();
	}

	public function carQuote()
	{
		$emptyForm = [
			'firstName' => '',
			'lastName' => '',
			'province' => '',
			'address' => '',
			'phoneNumber' => '',
			'email' => '',
			'gender' => '',
			'DOBMonth' => '',
			'DOBDay' => '',
			'DOBYear' => '',
			'claimsLast5Years' => '',
			'driverLicenseYear' => '',
			'vehicleYear' => '',
			'vehicleDailyKms' => ''
		];

		if($this->validateCarData() == false)
		{
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('quotes/carQuote', $emptyForm);
			$this->load->view('footer');
		}

		else
		{
			$this->persistCarQuote($this->input->post());

			$this->load->view('quotes/success');
		}
	}

	/*
	 * Persist car quote on car quote table
	 *
	 */
	private function persistCarQuote(array $carQuote)
	{
		// We're creating a new record
		if(empty($carQuote['id']))
		{
			// We use the session id as the user id for prototyping sake.
			$carQuote['userSessId'] = session_id();

			$this->db->insert('carQuotes', $carQuote);
		}

		else
		{
			// We need this field in the where not the update clause.
			$this->db->where('id', $carQuote['id']);
			unset($carQuote['id']);

			$this->db->update('carQuotes', $carQuote);
		}
	}
}

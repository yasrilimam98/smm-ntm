<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		if (is_login()) {
			redirect('Dashboard');
		}
		// echo $this->input->cookie('link');
		$data['title'] = 'Login';
		$this->template->views('auths/login', $data, true);
	}

	public function setSessions()
	{
		$token = $this->input->post('token');
		$user = $this->input->post('user');
		$department = $this->input->post('department');
		$dataUser = json_decode($this->curl->simple_get('https://rest.pt-bks.com/hr_lr/smm/get-data-employee?employee_id=' . $department[0]['employee_id']));
		$this->session->set_userdata('logged_in', true);
		$this->session->set_userdata('token', $token);
		foreach ($user as $key => $value) {
			$this->session->set_userdata($key, $value);
		}
		foreach ($department as $key => $value) {
			$this->session->set_userdata('department_id', $value['department_id']);
			$this->session->set_userdata('department_name', $value['department_name']);
			$this->session->set_userdata('alias', $value['alias']);
			$this->session->set_userdata('employee_id', $value['employee_id']);
			$this->session->set_userdata('division_id', $value['division_id']);
			$this->session->set_userdata('job_level_id', $value['job_level_id']);
			$this->session->set_userdata('job_title_id', $value['job_title_id']);
			if ($dataUser) {
				$this->session->set_userdata('image_profile', $dataUser->data->person->photo);
				$this->session->set_userdata('gender', $dataUser->data->person->gender);
			}
		}

		$response['success'] = true;
		echo json_encode($response);
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('status_login', 'Anda sudah berhasil keluar dari aplikasi');
		redirect('Auth', 'refresh');
	}
}

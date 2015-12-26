<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Notes extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Note");
    $this->output->enable_profiler();
  }
  public function index_json()
  {
    $data["notes"] = $this->Note->all();
    echo json_encode($data);
  }

  public function index_html()
  {
    $data["notes"] = $this->Note->all();
    $this->load->view('/partials/notes',$data);
  }
  public function create()
  {
    $new_note = $this->input->post();
    $this->Note->create($new_note);
    $data['notes'] = $this->Note->all();
    $this->load->view('/partials/notes',$data);
  }

  public function update_title(){
    $new_note = $this->input->post();
    $this->Note->update_title($new_note);
    $data['notes'] = $this->Note->all();
    $this->load->view('/partials/notes',$data);

  }

  public function update_description(){
    $new_note = $this->input->post();
    $this->Note->update_description($new_note);
    $data['notes'] = $this->Note->all();
    $this->load->view('/partials/notes',$data);

  }

  public function delete_note(){
    $new_note = $this->input->post();
    $this->Note->delete_note($new_note);
    $data['notes'] = $this->Note->all();
    $this->load->view('/partials/notes',$data);

  }
  public function index()
  {
    $this->load->view('index');
  }
}

?>

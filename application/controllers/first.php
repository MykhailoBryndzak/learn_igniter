<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {

    public function index()
    {
        $this->load->view('welcome_message');

    }

    public function about($id)
    {
        $id = 1;

        $data['name'] = "Михайло";
        $data['second'] = "Бриндзак";
        $data['age'] = 20;
        $this->load->view('about_view', $data);

        if($id =     1){
            $input = array("a", "b", "c", "d", "e");
            $output = array_slice($input, 0, 3);
        }
    }

    public function articles()
    {
        $config['base_url'] = base_url().'index.php/first/articles/';
        $config['total_rows'] = '200';
        $config['per_page'] = '20';

        $this->pagination->initialize($config);

        $this->load->model('articles_model');
        $data['articles'] = $this->articles_model->get_articles();
        $this->load->view('articles_view',$data);
    }

    public function add_articles()
    {
        $data['title'] = "п*ята статьтя";
        $data['text'] = "qwqwreqwreqewrqreqrewqwrqwrqwrwqer";
        $data['date'] = "2016-09-19";
        $this->load->model('articles_model');
        $this->articles_model->add_articles($data);
    }

    public function edit_articles()
    {
        $data['title'] = "нова статьтя";
        $data['text'] = "ТеКст";
        $data['date'] = "1995-09-19";
        $this->load->model('articles_model');
        $this->articles_model->edit_articles($data);
    }

    public function delete_articles($id)
    {
        $this->load->model('articles_model');
        $this->articles_model->delete_articles($id);
    }
}
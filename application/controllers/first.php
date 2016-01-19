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
        $config['total_rows'] = $this->db->count_all('articles');
        $config['per_page'] = '2';
        $config['full_tag_open'] = '<p style="text-align: center ;color: red">';
        $config['full_tag_close'] = '</p>';

        $this->pagination->initialize($config);

        $this->load->model('articles_model');
        $data['articles'] = $this->articles_model->get_articles($config['per_page'],$this->uri->segment(3));
        $this->load->view('articles_view',$data);
    }

    public function upload_img()
    {
        if(isset($_POST['download'])){

            $config['upload_path'] = './img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';
            $config['encrypt_name'] = 'TRUE';
            $config['remove_spaces'] = 'TRUE';

            $this->load->library('upload', $config);

            $this->upload->do_upload();

            $img_data = $this->upload->data();
            $add['img'] = $img_data['file_name'];
            $this->db->insert('img', $add);

            echo "Файл успішно завантажений! :)";

            $config = array(
                'image_library' => 'gd2',
                'source_image' => $img_data['full_path'],
                'new_image' => APPPATH.'../img/thumbs',
                'create_thumb' => TRUE,
                'maintain_ratio' => TRUE,
                'width' => 80,
                'height' => 80,

        );

            $this->load->library('image_lib', $config); // загружаем библиотеку

            $this->image_lib->resize(); // и вызываем функцию


            $config['source_image']	= $img_data['full_path'];
            $config['new_image'] = APPPATH.'../img/wm';
            $config['wm_text'] = 'Copyright 2016 - bryndza';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = './system/fonts/texb.ttf';
            $config['wm_font_size']	= '16';
            $config['wm_font_color'] = '000000';
            $config['wm_vrt_alignment'] = 'top';
            $config['wm_hor_alignment'] = 'center';
            $config['wm_padding'] = '20';

            $this->image_lib->initialize($config);

            $this->image_lib->watermark();

        }else {
            $this->load->view('upload_view');
        }
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
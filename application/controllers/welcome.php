<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guid');

    }

    //apparea
    public function index()
    {
        $data = array("flag" => "index");
        $this->__user_header($data);

        $this->load->view("index/index", $data);

        $this->load->view("apps/footer");
    }


    public function product()
    {
         $this->__user_header($data);
        $this->load->view("index/artitle", $data);
        $this->load->view("apps/footer");
    }

    public function research()
    {
        $data = array("flag" => "research");

        $this->__user_header($data);

        $this->load->view("index/research", $data);

        $this->load->view("apps/footer");
    }

    public function qualityc()
    {
        $data = array("flag" => "qualityc");

        $this->__user_header($data);
        $this->load->view("index/qualityc", $data);
        $this->load->view("apps/footer");
    }

    public function intro()
    {
        $data = array(
            "flag" => "intro"
        );


        $this->__user_header($data);

        $this->load->view("index/intro", $data);

        $this->load->view("apps/footer");
    }

    public function contact()
    {
        $data = array("flag" => "contact");

        $this->__user_header($data);

        $this->load->view("index/contact", $data);

        $this->load->view("apps/footer");
    }

    public function openlogin()
    {
        $data = array(
            "flag" => "index"
        );
        $this->__user_header($data);

        $this->load->view("index/openlogin");

        $this->load->view("apps/footer");
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
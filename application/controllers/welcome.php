<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guid');
        $this->load->model("Artitle_model","adao");
        $this->load->model("Myuser_model","usrdao");

    }

    //apparea
    public function index()
    {
        $data = array("flag" => "index");
        $this->__user_header($data);

        $this->load->view("index/index", $data);

        $this->load->view("apps/footer");
    }
    public function catalog($id=1){

        $data = array("flag" => "index");
        $this->__user_header($data);
        $locale = $this->nsession->userdata('locale');
        if(! $locale) $locale='zh-cn';
        $tree = $this->adao->find_cata_content($id,$locale);

        $data['tree'] = $tree;
        $tid = substr($id,0,1);
        $this->fireLog($data);
        $this->load->view("index/catalog_".$tid, $data);

        $this->load->view("apps/footer");
    }

    public function search($key=null){
        !$key AND redirect();
        $lang = $this->nsession->userdata('locale');
        if(!$lang) $lang = 'zh-cn';
        $SQL="select name,aid from artitle_info where lang= ? and content like ?";
        $query = $this->db->query($SQL,array($lang, '%'.urldecode($key).'%'));
        $beans  = $query->result_array();

        $data = array(
            "list" => $beans,
            'key'=>urldecode($key)
        );

        $this->__user_header($data);

        $this->load->view("index/search", $data);

        $this->load->view("apps/footer");
    }


    public function contactme(){
        $data = $this->input->post(NULL, TRUE);
        $this->usrdao->add_contact($data);

    }


    public function changelang($lang){

        $this->nsession->set_userdata('locale',$lang);
        $this->config->set_item('language', $lang);
        $this->load->helper('language');
        $this->lang->load($lang);
        redirect();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
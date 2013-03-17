<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hantu
 * Date: 12-5-13
 * Time: 下午2:50
 * To change this template use File | Settings | File Templates.
 */
class MY_Model extends CI_Model
{
    protected $table = null;
    protected $fieldNames = array();
    protected $row_per_page=10;
    public function __construct()
    {

        parent::__construct();

        if (func_num_args() == 1) {
            $mname = func_get_arg(0);
            $this->table = strtolower(substr($mname,0,strlen($mname)-6));
        }
        $this->load->library('firephp');
        $this->load->helper('guid');
        $this->load->database();

    }


    public function gets($page = 1, $rows = 10) {
        $start = $rows*$page - $rows; //
        if ($start<0) $start = 0;
        $this->db->limit($rows,$start);
        $query = $this->db->get($this->table());
        $result = $query->result_array();
        return $result;
    }

    public function query($sql){
        $query =  $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function find_where($where=""){
        $sql="select * from ".$this->table().(strlen($where)==0?"":" where ".$where);
        $query =  $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function search($fields,$key,$page=1,$rows=10){
        $key = urldecode($key);
        foreach($fields as $fd)
        $this->db->or_like($fd, $key);
        $start = $page*$rows-$rows;
        if($start<0)$start=0;
        $this->db->limit($rows,$start);
        $query =  $this->db->get($this->table());

        foreach($fields as $fd)
            $this->db->or_like($fd, $key);
        $this->db->from($this->table());
        $count =  $this->db->count_all_results();
        $pagelink = $this->page_nav($this->table().'/search/'.$key,$count,$page,$rows);
        $data = array(
            'beans'=>$query->result_array(),
            'pagelink'=>$pagelink
        );
        return $data;

    }


    public function page_link($page=1){

        return $this->page_nav("/".$this->table()."/lists/",$this->db->count_all($this->table()),$page,10);
    }

    public function page_nav($baseurl='',$count=0,$page=1,$rows=10){
        $config['base_url'] = $baseurl;
        $config['total_rows'] = $count;
        $config['per_page'] = $rows;
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        return $pagelink;
    }

    public function saveUpdate($data,$pk='id'){
       $pk = urldecode($pk);
       if(!isset($data[$pk]) || $data[$pk]==''){
           $this->save($data,$pk);
       }else{
           $this->update($data,$pk);
       }
    }

    /**
     * @param array;
     */
    public function save($data,$pk='id')
    {


        if($pk=='id')
           $data[$pk]=getGuidId();

        $str = $this->db->insert_string($this->table(), $data);
        $this->firelog($str);
        $this->db->insert($this->table, $data);

    }


    public function update($data,$pk='id'){


        $pk = urldecode($pk);
        $id = isset($data[$pk])?$data[$pk]:false;
        if(!$id){
            $this->firelog("primary key ".$pk." for  update action  is required  of table ".$this->table());
            return;
        }

        unset($data[$pk]);
        $str = $this->db->update_string($this->table(),$data,$pk."='$id'");
        $this->firelog($str);
        $this->db->where($pk, $id);
        $this->db->update($this->table(),$data);
    }

    public function list_with_paged($page=1,$rows=10,$fields="id,name"){
        $data = array();
        $this->db->select($fields);
        $this->db->order_by('firedate','desc');
        $start = $page*$rows-$rows;
        $this->db->limit($rows,$start);

        $query = $this->db->get($this->table());
        $data['list'] = $query->result_array();
        $count =  $this->db->count_all_results();
        $config['base_url'] = "/".$this->table()."/list_with_paged/";
        $config['total_rows'] = $count;
        $config['per_page'] = $rows;
        //$this->firelog($config);
        $this->pagination->initialize($config);
        $pagelink = $this->pagination->create_links($page);
        $data['pagelink']= $pagelink;
        return $data;
    }


    public function create_batch($data)
    {

        $this->db->insert_batch($this->table(), $data);

    }

    public function remove($id,$pk='id')
    {
        $id = urldecode($id);
        $this->db->delete($this->table(), array($pk=>$id));
    }

    public function get($id,$pk='id'){

        $id = urldecode($id);
        $query = $this->db->get_where($this->table(), array($pk => $id));
        return  $query->row_array();
    }

    public function table(){
        return strtolower($this->table);
    }

    /**
      *  创建一个新的空对象
      */
    public function emptyObject($pk='id'){
        $fields = $this->db->list_fields($this->table());
        $data = array();
        foreach ($fields as $field)
        {
            $data[$field]="";
        }

        return $data;
    }

    public function find_all(){
        $query = $this->db->get($this->table());
        $beans = $query->result_array();
        //$this->firelog($beans);
        return $beans;
    }

    public function __valid($param){
        if(!isset($param) || $param==null || $param=='')return FALSE;
        return TRUE;
    }

    public function firelog($msg = "")
    {
        $this->firephp->log($msg);
    }
}



class Media_Model extends MY_Model{
    public function __construct()
    {

        if (func_num_args() == 1) {
            $mname = func_get_arg(0);
            parent::__construct($mname);
        }else{
            parent::__construct();
        }

    }



    public function update_picture_extra($path,$pk,$idval,$field){
        $data = array(
            $field => $path
        );
        $idval = urldecode($idval);
        $this->db->where($pk, $idval);
        $this->db->update($this->table(), $data);
    }

    public function update_funds($user,$amount=0){
        if(!($this->__valid($user) || $this->__valid($amount)))return;

        $SQL = "update ".$this->table()." u set u.founds=u.founds+".$amount."  where id='".$user."'";
        $this->db->query($SQL);

    }

}

class PK_Model extends Media_Model{

    public function __construct()
    {

        if (func_num_args() == 1) {
            $mname = func_get_arg(0);
            parent::__construct($mname);
        }else{
            parent::__construct();
        }

    }

    public function saveUpdate($data,$pk='id'){
        $pk = urldecode($pk);
        $id = $data[$pk];
        if(!$this->__valid($id))return;
        $bean = $this->get($id,$pk);
        if(empty($bean)){
            $this->save($data,$pk);
        }else{
            $this->update($data,$pk);
        }
    }
}

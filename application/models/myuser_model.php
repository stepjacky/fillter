<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * FileName application/models/myuser.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Myuser_model extends Media_Model {
     
    public  function __construct(){
        parent::__construct("Myuser_model");
        $this->load->library('email');
    }



    public function remove($id){
        $id = urldecode($id);
        $this->firelog($id);
        $sql="update qqnickname set amount=amount-1 where name='".$id."' and amount>1";
        $this->db->trans_start();
        $this->db->query($sql);
        $this->db->delete("shipaddress",array('myuser_username'=>$id));
        $this->db->delete($this->table(), array("id"=>$id));
        $this->db->trans_complete();
    }




    public function  save($data){
        $this->db->trans_start();
        $id = urldecode($data["id"]);
        $id = $this->dao->getUserName($id);
        $data['id'] = $id;
        $this->db->insert($this->table, $data);
        $this->db->trans_complete();
    }

    public function login($username,$password){

        $this->db->where('id', $username);
        $this->db->where('password', $password);
        $query = $this->db->get($this->table());
        $user =  $query->first_row('array');
        if(count($user)==0)return FALSE;
        return $user;

    }

    public function register($email,$password){


       $email = urldecode($email);
       $this->db->where('id',$email);
       $this->db->from($this->table());
       $count =  $this->db->count_all_results();
       if($count!=0)return FALSE;
       $data = array(
           'id'=>$email,
           'password'=>$password
       );
       $this->save($data);
       $rst = $this->get($email);
       return $rst;
    }


    public function add_contact($data){

        $this->email->from('xxxxfox@163.com', 'filter代理');
        $this->email->to('xianfilter@yahoo.com.cn,xianfilter@gmail.com,xxxxfox@163.com');
        $this->email->cc('xianfilter@gmail.com');
        $this->email->bcc('xianfilter@yahoo.com.cn');

        $this->email->subject('客户信息');

        $msg = "
           客户联系方式:\n\r
           姓名:%s\r\n
           单位:%s\r\n
           电话:%s\r\n
           邮件:%s\r\n
           留言:%s";

        $cnt = sprintf ($msg,
            $data['name'],
            $data['address'],
            $data['phone'],
            $data['email'],
            $data['company']);

        $this->email->message($cnt);

        $this->email->send();

        $this->db->insert('contact_info',$data);

    }



    
}   
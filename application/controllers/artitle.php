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
 * FileName application/controllers/qualityc.php
 * Created by CIscaffolding.
 * User: qujiakang
 * QQ:myqq_postor@qq.com
 * Email: qujiakang@gmail.com  
 * Date: Wed Nov 28 23:40:02 CST 2012
 *    
 */

class Artitle extends Media_Controller {
     
    public  function __construct(){
        parent::__construct("Artitle_model");
        $this->load->library('create_ckeditor');

    }

    public function index(){
        $data = array();

        $this->load->view("apps/header");
        $this->load->view("artitle/index",$data);
        $this->load->view("apps/footer");
    }
    
     /**
      * 新增编辑
      */
    public function editNew($id=-1){
        
       $data = array(); 
             
               $ckcfg = array();
               $ckcfg["name"]  ="content";          
      
        if($id!=-1){
            $id = urldecode($id);
            $data = $this->dao->get($id);
            $this->fireLog($data);
            $ckcfg["value"] = $data["content"];

        }
        
             $data['my_editor'] = $this->create_ckeditor->createEditor( $ckcfg);
        $this->load->view("admin/res-head");
        $this->load->view($this->dao->table()."/editNew",$data);
        $this->load->view("admin/footer");
    }

    public function one($id){
        $id = urldecode($id);
        $data  = array('flag'=>'artitle');
        $data['bean'] = $this->dao->get($id);
        $tags = $this->tagDao->find_by_catalog('artitle');
        $data['tags']=$tags;
        $this->__user_header($data);
        $this->load->view($this->dao->table()."/one", $data);
        $this->load->view("apps/footer");
    }

    public  function selector($page=1){

        $this->load->view('admin/res-head');
        $this->load->view('artitle/selector');
    }

}
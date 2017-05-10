<?php
class User_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();        
    }    
    
    public function insertUser($d)
    {  
            $string = array(
                
                'username'=>$d['username'],
                'password'=>$d['password'],
                'status'=>'victim',

                'name'=>$d['name'],
                'ic'=>$d['ic'],
                'working'=>$d['working'],

                'address'=>$d['address'],
                'house'=>$d['house'],
                'office'=>$d['office'],
                'hp'=>$d['hp'],

                'gender'=>$d['gender'],
                'birthday'=>$d['dob'],
                'nationality'=>$d['nationality']
            );
            $q = $this->db->insert_string('user',$string);             
            $this->db->query($q);
            return $this->db->insert_id();
    }
    
    public function checkLogin($post)
    {
        $this->db->select('*');
        $where = array('username' => $post['username'], 'password' => $post['password']);
        $this->db->where($where);
        $query = $this->db->get('user');
        $userInfo = $query->row();        
        return $userInfo; 
    }
  

    public function check_Ic_available($ic_user)
    {

        $ic_num = preg_replace('/\s+/', '', $ic_user);

        $this->db->select("*");
        $this->db->from('user');
        $where = array('ic' => $ic_num);
        $this->db->where($where);
        $query = $this->db->get();

        if($query->num_rows() == 1){
            return true;
        }else{

        }      
    }


}
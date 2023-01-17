<?php
    class User_model extends CI_Model{
        // CREATE
        function create($formArray){
            $this->db->insert('users',$formArray);
        }
        // READ
        public function all(){
            // $query = "SELECT * FROM test.users";
            $this->db->select('*');

            return $users = $this->db->get('users')->result_array();
        }
        public function getUser($userId){
            $this->db->where('user_id',$userId);
            return $user = $this->db->get('users')->row_array();
        }
        // UPDATE
        public function updateUser($userId,$formArray){
            $this->db->where('user_id',$userId);
            $this->db->update('users',$formArray);
        }
        //DELETE
        public function deleteUser($userId){
            $this->db->where('user_id',$userId);
            $this->db->delete('users');
        }
    }
?>
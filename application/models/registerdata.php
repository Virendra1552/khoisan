<?php
    class registerdata extends CI_Model 
    {
        public function insertuser($data) 
        {
            return $this->db->insert('register',$data);
           
           
            
        }
        public function logdata($username, $password) 
        {
           
                // Perform a database query to check if the username and password are valid.
                // You should hash the password and compare it to the stored hash.
        
                // Example query (assuming you have a 'users' table):
                $query = $this->db->get_where('register', array('username' => $username, 'password' => $password));
        
                if ($query->num_rows() == 1) {
                    return true;
                } else {
                    return false;
                }
        }

        public function select()
        {
            $query = $this->db->get('register');
            return $query;
        }
    }


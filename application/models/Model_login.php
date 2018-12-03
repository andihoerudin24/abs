<?php
class Model_login extends CI_Model{


    function chek_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $login = $this->db->get('login')->row_array();
        return $login;
    }
}

?>
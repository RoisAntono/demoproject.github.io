<?php

    function setEncryption( $key ){

        $CI =& get_instance();
        $CI->load->library('encryption'); // load library 

        return $CI->encryption->encrypt($key);

    }

?>
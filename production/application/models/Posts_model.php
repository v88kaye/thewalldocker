<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {
    function __construct() {
        $this->load->database();
    }

}
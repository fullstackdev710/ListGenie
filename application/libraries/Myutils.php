<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Myutils
{
    protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI = &get_instance();
    }

    public function check_login()
    {
        if (!$this->CI->session->logged_in) {
            redirect('/login/');
        }
    }
}

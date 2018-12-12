<?php
class Template
{
    public $layout = 'default';

    function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI =& get_instance();
    }

		function setLayout($layout)
    {
        $this->layout = $layout;
    }

    function layout($content, $data = array())
    {
        $data['navbar'] = '_partials/navbar';
        $data['footer'] = '_partials/footer';
        $data['content'] = $content;

				$layoutPath = '_partials/'.$this->layout;
        $this->CI->load->view($layoutPath, $data);
    }
}

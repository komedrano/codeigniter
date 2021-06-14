<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_news($slug = FALSE)
        {
            if ($slug === FALSE)
            {
                $query = $this->db->get('medrano_kharie_news');
                return $query->result_array();
            }

            $query = $this->db->get_where('medrano_kharie_news', array('slug' => $slug));
            return $query->row_array();
        }
}

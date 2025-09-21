<?php
class Model_home extends CI_Model {

	public function get_results($sql){
		$res = $this->db->query($sql);
		if ($res->num_rows() > 0)
		{
			return $res->result_array();
		}
		else
		{
			return false;
		}
	}
	public function get_row($sql){
		$res = $this->db->query($sql);
		if ($res->num_rows() > 0)
		{
			$resp = $res->result_array();
			return $resp[0];
		}
		else
		{
			return false;
		}
	}
	public function get_home_blog()
	{
		return $this->get_results("SELECT `slug`,`title`,`image`,`at` FROM `blog` WHERE `home` = 'yes' ORDER BY `order_home` ASC LIMIT 3;");
	}
	public function get_main_blog()
	{
		return $this->get_results("SELECT `slug`,`title`,`image`,`short_description` FROM `blog` WHERE `main` = 'yes' ORDER BY `order_main` ASC LIMIT 3;");
	}
	
}
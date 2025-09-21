<?php
class Model_functions extends CI_Model {

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
	public function get_footer_blog()
	{
		return $this->get_results("SELECT `slug`,`short_title` FROM `blog` WHERE `footer` = 'yes' ORDER BY `order_footer` ASC LIMIT 4;");
	}
	public function get_blog_by_slug($slug)
	{
		return $this->get_row("SELECT * FROM `blog` WHERE `slug` = '$slug';");
	}
}
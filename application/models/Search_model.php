 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

	public function ambil_data($id=null){
		$this->db->select('*');
		$this->db->from('posts');
		if(!empty($id)){
			$this->db->like('id',$id);
			
		}
		$result = $this->db->get();
		return $result;
	}

}
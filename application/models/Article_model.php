<?php
class Article_model extends CI_Model{
 
  function get_objek($limit, $start){
    $result = $this->db->get('posts', $limit, $start); 
    return $result;
  }

  function get_all_object(){
    $result = $this->db->get('posts');
    return $result;
  }

  function get_published_object(){
    //$result = $this->db->get('posts');
    $result = $this->db->get_where('posts', array('status' => 'publish'));
    return $result;
  }

  function get_drafts_object(){
    //$result = $this->db->get('posts');
    $result = $this->db->get_where('posts', array('status' => 'draft'));
    return $result;
  }

  function get_trashed_object(){
    //$result = $this->db->get('posts');
    $result = $this->db->get_where('posts', array('status' => 'trash'));
    return $result;
  }
  
  function save($title,$content,$category,$updated,$status){
    $data = array(
      'title' => $title,
      'content' => $content,
      'category' => $category,
      'updated_date' => $updated,
      'status' => $status
    );
    $this->db->insert('posts',$data);
  }

function get_article_id($id){
    $query = $this->db->get_where('posts', array('id' => $id));
    return $query;
}

function update($id,$title,$content,$category,$updated,$status){
    $data = array(
      'title' => $title,
      'content' => $content,
      'category' => $category,
      'updated_date' => $updated,
      'status' => $status
    );
    $this->db->where('id', $id);
    $this->db->update('posts', $data);
}

function cariBarang(){
  $id = $this->input->post('id');
  $this->db->like('nama', $id);
  return $this->db->get('tabelbarang1')->result_array();
}

  function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('posts');
}


}
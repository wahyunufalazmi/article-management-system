 <?php
class Article extends CI_Controller{
    
    function __construct(){
      parent::__construct();
      
     $this->load->library('pagination');
      $this->load->model('article_model');

    }

    function index(){
      $data['data'] = $this->article_model->get_all_object();
      $this->load->view('article_view',$data);
    }


    function published(){
      $data['data'] = $this->article_model->get_published_object();
      $this->load->view('published_view',$data);
    }

    function drafts(){
      $data['data'] = $this->article_model->get_drafts_object();
      $this->load->view('drafts_view',$data);
    }

    function trashed(){
      $data['data'] = $this->article_model->get_trashed_object();
      $this->load->view('trashed_view',$data);
    }

    function preview(){
      $config['base_url'] = site_url('article/preview'); //site url
          $config['total_rows'] = $this->db->count_all('posts'); //total row
          $config['per_page'] = 1;  //show record per halaman
          $config["uri_segment"] = 3;  // uri parameter
          $choice = $config["total_rows"] / $config["per_page"];
          $config["num_links"] = floor($choice);

          $config['first_link']       = 'First';
          $config['last_link']        = 'Last';
          $config['next_link']        = 'Next';
          $config['prev_link']        = 'Prev';
          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
          $config['full_tag_close']   = '</ul></nav></div>';
          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
          $config['num_tag_close']    = '</span></li>';
          $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
          $config['prev_tagl_close']  = '</span>Next</li>';
          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
          $config['first_tagl_close'] = '</span></li>';
          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
          $config['last_tagl_close']  = '</span></li>';
      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      $data['data'] = $this->article_model->get_objek($config["per_page"], $data['page']);
      $data['pagination'] = $this->pagination->create_links();
      $this->load->view('pre_view',$data);
    }
    
    function add_new(){
      $this->load->view('add_article_view');
    }

    function save(){
      if (isset($_POST['publish'])) {
          $title = $this->input->post('title');
          $content = $this->input->post('content');
          $category = $this->input->post('category');
          $updated = "";
          $status = "publish";
         
          $this->article_model->save($title,$content,$category,$updated,$status);
          redirect('article');
      }
      else{
          $title = $this->input->post('title');
          $content = $this->input->post('content');
          $category = $this->input->post('category');
          $updated = "";
          $status = "draft";
         
          $this->article_model->save($title,$content,$category,$updated,$status);
          redirect('article');
      }
    }

    function delete(){
      $id = $this->uri->segment(3);
      $this->article_model->delete($id);
      redirect('article/trashed');
  }

  function edit(){
      $id = $this->uri->segment(3);
      $result = $this->article_model->get_article_id($id);
      if($result->num_rows() > 0){
          $i = $result->row_array();
          $data = array(
              'id'    => $i['id'],
              'title'  => $i['title'],
              'content'     => $i['content'],
              'category' =>$i['category']
          );
          $this->load->view('edit_article_view',$data);
      }else{
          echo "Data Was Not Found";
      }
  }

  function update(){

    if (isset($_POST['publish'])) {

      $id = $this->input->post('id');
      $title = $this->input->post('title');
      $content = $this->input->post('content');
      $category = $this->input->post('category');
      date_default_timezone_set('Asia/Jakarta');
      $updated = date('Y-m-d H:i:s');
      $status = "publish";
      
      $this->article_model->update($id,$title,$content,$category,$updated,$status);
      redirect('article/published');

    }
    else{

      $id = $this->input->post('id');
      $title = $this->input->post('title');
      $content = $this->input->post('content');
      $category = $this->input->post('category');
      date_default_timezone_set('Asia/Jakarta');
      $updated = date('Y-m-d H:i:s');
      $status = "draft";
      
      $this->article_model->update($id,$title,$content,$category,$updated,$status);
      redirect('article/drafts');

    }
      
  }

  function throw(){
      $id = $this->uri->segment(3);
      $result = $this->article_model->get_article_id($id);
      if($result->num_rows() > 0){
          $i = $result->row_array();
          $data = array(
              'id'    => $i['id'],
              'title'  => $i['title'],
              'content'     => $i['content'],
              'category' =>$i['category']
          );
          $this->load->view('temp_view',$data);
      }else{
          echo "Data Was Not Found";
      }
  }

  function bin(){

      $id = $this->input->post('id');
      $title = $this->input->post('title');
      $content = $this->input->post('content');
      $category = $this->input->post('category');
      date_default_timezone_set('Asia/Jakarta');
      $updated = date('Y-m-d H:i:s');
      $status = "trash";
      
      $this->article_model->update($id,$title,$content,$category,$updated,$status);
      redirect('article/trashed');

  }

}
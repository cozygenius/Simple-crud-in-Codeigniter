<?php

class User extends CI_controller
{

  



	function index(){
		//$this->load->model('User_model');
	//	$usr=$this->User_model->dis();

        // echo "<pre>";
        // print_r($usr);
		//$data=array();
		//$data['usr']=$usr;
		$this->load->view('list');
        
   }

   function listing(){
    $this->load->model('User_model');
        $result=$this->User_model->dis();
          // $data = array();  
          //  foreach($user as $row)  
          //  {  
          //       $sub_array = array();  
          //     // $sub_array['faculty_id'] = $row['f_id'];  
          //      $sub_array['subject name'] = $row['subject'];  
          //       //$sub_array['date'] = $row['created_at'];  
          //       $sub_array['status'] = $row['status'];  
          //      // $sub_array['id'] = $row['id'];  
          //       $sub_array['name'] = $row['name'];  
               
          //       $data[] = $sub_array;  
          //  }  
          //    $output = array(  
               
          //       "data" => $data  
          //  );  

        // print_r($usr);
       // echo "<pre>";
       // print_r($data);
        echo json_encode($result);
           // echo "</pre>";


   }


    function create()
    {
    	 $this->load->model('User_model');
    	 $this->form_validation->set_rules('name','Name','required');
    	if($this->form_validation->run()==false)
    	{
    	 	$this->load->view('create');

    	 }
    
    	 else
    	 {
    	 	$formArray= array();
    	 	$formArray['name']=$this->input->post('name');
    	 	$this->User_model->create($formArray);
    	 	$this->session->set_flashdata('success','records added');
    	 	redirect(base_url().'index.php/user/index');
    	 }
       

	}
	
	function edit($userId)
	{
		$this->load->model('User_model');
		$user = $this->User_model->getUser($userId);
		$data = array();
		$data['user'] = $user;

		 $this->form_validation->set_rules('name','Name','required');
    	if($this->form_validation->run()==false)
    	{
    	 	$this->load->view('edit',$data);
    	}   
    	 else
    	 {
    	 	$formArray= array();
    	 	$formArray['name']=$this->input->post('name');
    	 	$this->User_model->updateUser($userId,$formArray);
    	 	$this->session->set_flashdata('success','records updated');
    	 	redirect(base_url().'index.php/user/index');
    	 }	
	}
	function delete($userId)
	{
		$this->load->model('User_model');
		$user = $this->User_model->getUser($userId);
		if (empty($user))
		{
			$this->session->set_flashdata('failure','records not found');
    	 	redirect(base_url().'index.php/user/index');
		}
		$this->User_model->deleteUser($userId);
		$this->session->set_flashdata('success','records deleted');
		redirect(base_url().'index.php/user/index');
	}
    function updatestatus(){
        //   $id=$_REQUEST['sid'];
        //   $val=$_REQUEST['sval'];
        // $data=array(
        //     'id'=>$id,
        //     'status'=>$val
        // );
        // echo "<pre>";
        // print_r($data);

        if(isset($_REQUEST['sval']))
        {
              $id=$_REQUEST['sid'];
        $val=$_REQUEST['sval'];
        // $data=array('id'=>$id,'status'=>$val);
        // echo "<pre>";
        // print_r($data);
        if($val == 1){
            $status = 0;

        }
        else{
            $status = 1;
        }
        $data=array('status'=>$status);
        // echo "<pre>";
        // print_r($data);

        $this->db->where('user_id',$id);
        $this->db->update('faculty', $data); //Update status here

        if($status==1){
               $this->session->set_flashdata('failure','record deleted ');
        }
        else
        {
               $this->session->set_flashdata('success','records recovered');
        }
        redirect(base_url().'index.php/user/index');

          
            // if(>0){
            //     $this->session->set_flashdata('success','records deleted');
            // }
            // else{
            //     $this->session->set_flashdata('success','records recovered');
            // }
        }

    }
 
        function fetch(){
           $this->load->model('User_model');
           $user=$this->User_model->viewUser();  
           $data=array();
           $data['user']=$user;
            $this->form_validation->set_rules('subject[]','Subject','required');
            $this->form_validation->set_rules('select','select','required');

            if($this->form_validation->run()==false)
            {
                $this->load->view('fetch',$data);

             }
        
             else
             {
         
                 $formArray= array();
                 $id=$this->input->post('select');
                 $subject=$this->input->post('subject[]');
                // $idd=$this->input->
                $fo=date('Y-m-d');

                 for ($i=0; $i<count($subject); $i++) { 
                    $formArray[$i] = array(

                        'f_id'=>$id,
                        'subject'=>$subject[$i],
                        'created_at'=>$fo
                    );
                  
                 } 
                
            
                  echo "<pre>";
                print_r($formArray);
                echo "</pre>";
                $this->User_model->ins($formArray);
                $this->session->set_flashdata('success','records added');
                redirect(base_url().'index.php/user/index');
         }

 }

}
?>

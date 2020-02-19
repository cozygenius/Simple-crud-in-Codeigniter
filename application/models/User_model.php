<?php
class User_model extends CI_model{
    

    function create($formArray)
    {
        $this->db->insert("user",$formArray);         //for table 1
     }
//for table 2
         function ins($formArray)
    {
        $this->db->insert_batch("faculty",$formArray);
     }
     function all(){
     	return $user=$this->db->get('user')->result_array();
     }
     function dis(){
            $this->db->select('*');
            $this->db->from('faculty');
            $this->db->join('user', 'user.id = faculty.f_id');
            $data=$this->db->get()->result();
               return compact('data');
     }
     function getUser($userId){
         $this->db->where('id',$userId);
         return $user = $this->db->get('user')->row_array();

     }
     function updatestatus(){
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
        //  print_r($data);

        // $this->db->where('user_id',$id);
        // $this->db->update('faculty', $data); //Update status here
          redirect(base_url().'index.php/user/index');

     }
     function updateUser($userId,$formArray){
     	$this->db->where('id',$userId);
     	$this->db->update('user',$formArray);

     }
     function deleteUser($userId){
     	$this->db->where('id',$userId);
     	$this->db->delete('user');
     }


    function viewUser(){
        $data=$this->db->get('user');
        if($data->num_rows()>0)
        {
            return $data->result();
        }
    }

     // function fetchUser($userId){
     //     $this->db->where('id',$userId);
     //     return $us = $this->db->get('user')->row_array();

     // }
    //  function createins($userId,$formArray)
    // {
    //     $this->db->where('id',$userId)
    //     $this->db->insert('user',$formArray);
    //  }
// $this->db->select('*');
//             $this->db->from('faculty');
//             $this->db->join('user', 'user.id = faculty.f_id');
//             return $user=$this->db->get()->result_array();

}
?>
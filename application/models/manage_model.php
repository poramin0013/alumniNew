<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		/*function getAllRegiter(){
			$this->db->select('card_id, studentCode, name ,gender,birthday,address,p_tel,email,facebook');
			$result = $this->db->get('personal');
			return $result;
		} */

        function personal_insert($datapersonal){
			$this->db->insert('personal',$datapersonal);
			
        }
		function alumni_insert($dataalumni){
			$this->db->insert('alumni',$dataalumni);
		}
		function workinformation_insert($dataworkinformation){
			$this->db->insert('workinformation',$dataworkinformation);
		}
		
		

		
		/*function menu_delete($id){
			$this->db->where('menu_id', $id);
			$this->db->delete('menu');  
		}	

		function menu_edit($mid){
			$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
			$result = $this->db->get_where('menu', array('menu_id' => $mid));
			return $result;
		}
		        
		function menu_update($data,$menu_id){
			$this->db->where('menu_id', $menu_id);
			$this->db->update('menu', $data);
		}	*/

		function personal_view(){
			
			//$this->db->select('card_id,student_id,name,gender,birthday,address,tel,email,facebook,img');
			$this->db->select('*');
			$data = $this->db->get('personal');
			return $data;
		}

		/*function abc(){
			$this->db->select('*');
			$data = $this->db->get_where('personal', array('student_id' => $id));
			return $data;
		}*/
		function alumni_view(){
			///$this->db->select('student_id,group,branch,faculty,semester,education_level,year_int,year_out,outstanding_work');
			$this->db->select('*');
			$data = $this->db->get('alumni');
			return $data;
		}function workinformation_view(){
			//$this->db->select('student_id,company,position,address,tel');
			$this->db->select('*');
			$data = $this->db->get('workinformation');
			return $data;
        }
		/*function alumni_view($dataalumni){
			$this->db->insert('alumni',$dataalumni);
		}
		function workinformation_view($dataworkinformation){
			$this->db->insert('workinformation',$dataworkinformation);
		}*/
}
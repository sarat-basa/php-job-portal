<?php
Class Custom_Db extends CI_Model{
	/*
		Selecting rows from table or depending on requirements
		$table is Table name
		$column is column name e.g 'name,name_id'
		$condition should be like array('name' => $name, 'title' => $title, 'status' => $status)
	*/
	function get_records($table, $condition = '', $cols='*')
	{
		$data = '';
		$temp_condition = array('1' => 1);
		if (strlen($table) > 0 ) {
			if(is_array($condition)) {
				$temp_condition = $condition; 
			}
			$tmp_data = $this->db->select($cols)->get_where($table, $temp_condition)->result_array();
			$data = array('status' => 1, 'data' => $tmp_data);
		} else {
			redirect('login/logout');
		}
		//echo  $this->db->last_query();exit;
		return $data;
	}
	
	/*
	* Selecting rows from table without condition
	* $table is Table name
	*/
	function fetch_records ($table, $cols='*', $order='')
	{
            $data = '';
            if (strlen($table) > 0 ) {
                if ($order != '') {
                    if (valid_array($order) == true) {
                        foreach ($order as $o_k => $o_v) {
                            $this->db->order_by($o_k, $o_v);
                        }
                    }
                }
                $tmp_data = $this->db->select($cols)->get_where($table)->result_array();
                $data = array('status' => 1, 'data' => $tmp_data);
            } else {
                redirect('login/logout');
            }
            return $data;
	}
	
	
	
	
	function num_rows($table_name) {

		$result = $this->db->select('count(*) as numrows')->from($table_name)->get()->result_array();
	    return $result[0]['numrows'];
	}
	
	/*
	*this will insert the data into database and create new record
	*
	*@param string $table_name name of the table to which the data has to be inserted
	*@param array  $data       data which has to be inserted into database
	*
	*@return array has status of insertion and insert id
	*/
	function insert_record ($table_name, $data)
	{
		$insert = $this->db->insert($table_name, $data);
		
		$num_inserts = $this->db->affected_rows();
		//print_r($this);
		if (intval($num_inserts) > 0) {
			$data = array('status' => 1, 'insert_id' => $this->db->insert_id());
		} else {
			redirect('login/logout');
		}
		return $data;
	}
	
	
	/*
	*this will insert the data into database and update existing record
	*
	*@param string $table_name name of the table to which the data has to be inserted
	*@param array  $data       data which has to be inserted into database
	*
	*@return array has status of insertion and insert id
	*/
	function update_record ($table_name='', $data='', $condition='')
	{
		$status = '';
		//echo strlen($table_name);
		//print_r(is_array($data));
		//print_r(is_array($condition));
		//echo $condition;
		if (strlen($table_name) > 1 and is_array($data) == true and is_array($condition)) {
			$this->db->trans_start();
			$this->db->update($table_name, $data, $condition);
			
			$this->db->trans_complete();
			$status = 1;
		} else {
			//redirect('login/logout');
			$status = 0;
		}
		return $status;
	}
	
	/*
	*this will delete data from database
	*
	*@param string $table_name name of the table to which the data has to be inserted
	*@param array  $condition  condition for deleting data
	*
	*@return array has status of insertion and insert id
	*/
	function delete_record($table_name='',  $condition='')
	{
		$status = '';
		if (strlen($table_name) > 1 and is_array($condition)) {
			$this->db->delete($table_name, $condition);
			$status = 1;
		} else {
			//redirect('login/logout');
			$status = 0;
		}
		return $status;
	}
	//find sms details
	public function sms_details()
	{
		$sql = $this->db->select('sms_url, user_name, password, sender')
						->from('sms_provider_setup')->get();
	 	return $sql->result_array();
	}

	public function check_email_id($email)
	{

		$this->db->select('COUNT(email_id) AS email_status');
		$this->db->from('user_master');
		$this->db->where('email_id',$email);
		$query = $this->db->get();
	 	$result=$query->row();
	 	return $result;
	}
	public function get_detail_otp($get_detail_otp)
	{

		$this->db->select('user_id,unique_code,full_name,email_id,PASSWORD,mobile,user_type,otp_code,otp_status');
		$this->db->from('user_master');
		$this->db->where('otp_code',$get_detail_otp);
		$query = $this->db->get();
	 	$result=$query->row();
	 	return $result;
	}
}

?>

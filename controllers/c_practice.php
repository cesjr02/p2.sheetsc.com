<?php

class practice_controller extends base_controller {
	
	public function test3() {
		
		$data = array(
			'first_name' => 'Bruce',
			'last_name' => 'Willis',
			'email' => 'willis@gmail.com')
			;
			
		$user_id = DB::instance(DB_NAME)->insert('users', $data);
		
		echo 'Inserted a new row; resulting id:'.$user_id;
}		
} # eoc



?>
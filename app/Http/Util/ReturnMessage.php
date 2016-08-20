<?php namespace App\Http\Util;
use Response;

class ReturnMessage  
{
	protected $status;
	protected $data;
	protected $message;

	public function statusOK(){
		$this->status = 0;
	}
	public function statusErro(){
		$this->status = 1;
	}
	public function setData($data){
		$this->data = $data;
	}
	public function setMessage($message) {
		$this->message = $message;
	}

	public function response() {
		return  Response::json($this->toArray());
	}

	public function toArray() {
		return  array(
			'status'=>$this->status,
			'data'=>$this->data,
			'message'=>$this->message			
		);
	}
}

<?php namespace App\Http\Util;
use App\Http\Util\ReturnMessage;
use Response;

class HTTPErrorMessages  
{
	const CODE_CONFLICT = 409;
	const CODE_BAD_REQUEST = 400;
	const CODE_NOT_FOUND = 404;
	const CODE_INTERNAL_ERROR = 500;
	const CODE_UNAUTHORIZED = 401;
	const CODE_NETWORK_AUTH = 511;
	const CODE_NO_CONTENT = 204;
	const UNAUTOHORIZED = 401;
	
	static public function erroMessageResponse($msg,$code)
	{
		 $return = new ReturnMessage();	
		 $return->statusErro();
         $return->setMessage($msg);
         return Response::make($return->toArray(), $code);
	}

	static public function okMessageResponse($data){
		$return = new ReturnMessage();	
        $return->statusOk();
        $return->setData($data);
        return $return->response();  
	}
	static public function errorInfoData($code,$message,$data){
		return array('code'=>$code,'message' => $message,'data'=>$data);		
	}
}
<?php

//check for request content type
function checkContentType($headers) {
	return true;
}

//check request method
function checkRequestMethod($method) {
	//echo $method;exit;
	if($_SERVER['REQUEST_METHOD'] === $method) {
		return true;
	}else{
		throwError(200, false, "Request Method is Not Valid");
	}
}

//throw error response
function throwError($response_code, $status, $message) {
	http_response_code($response_code);
	$error_response = json_encode(['status' => $status, 'message' => $message]);
	echo $error_response; exit;
}
function throwApiError($response_code, $message) {
	http_response_code($response_code);
	$error_response = json_encode(['message' => $message]);
	echo $error_response; exit;
}

// return response to client
function response($response_code, $status, $message, $data = null) {
	http_response_code($response_code);
	$response = json_encode(['status' => $status, 'message' => $message, 'data' => $data]);
	echo $response; exit;
}
function validateParameter($fieldName, $value, $required = true) {
	if($required == true && empty($value) == true){
		throwError(200, false, $fieldName." is required");
	}
	return $value;
}
<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * Return a new JSON response from the application.
     *
     * @param string       $message 
     * @param string|array $data    
     * @param int          $status  
     *
     * @return \Illuminate\Http\JsonResponse;
     */
    public function responseSuccess($message, $data = [], $status = 200)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    /**
     * Return a new JSON response from the application.
     *
     * @param string       $message 
     * @param string|array $error   
     * @param int          $status  
     *
     * @return \Illuminate\Http\JsonResponse;
     */
    public function responseError($message, $error = [], $status = 500)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'errors' => $error
        ], $status);
    }

}

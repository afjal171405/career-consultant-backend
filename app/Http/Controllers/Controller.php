<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function reportSuccess($message, $data = [], $code = 200)
    {
        return response()->json([
            'status' => TRUE,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public function reportError($message, $data = [], $code = 400)
    {
        return response()->json([
            'status' => FALSE,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}

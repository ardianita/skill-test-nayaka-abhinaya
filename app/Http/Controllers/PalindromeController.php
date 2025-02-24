<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function palindrome($param)
    {
        $text = strtolower($param);

        try {
            if ($text === strrev($text)) {
                return response()->json([
                    'status' => 'success',
                    'parameter' => $param,
                    'message' => 'Palindrome',
                ], 200);
            } else {
                return response()->json([
                    'status' => 'success',
                    'parameter' => $param,
                    'message' => 'Not Palindrome',
                ], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th,
            ], 400);
        }
    }
}

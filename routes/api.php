<?php

use App\Http\Controllers\PalindromeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Hello Go Developers',
    ], 200);
});

Route::get('/language', function () {
    $data = [
        "language" => "C",
        "appeared" => 1972,
        "created" => [
            "Dennis Ritchie"
        ],
        "functional" => true,
        "object-oriented" => false,
        "relation" => [
            "influenced-by" => [
                "B",
                "ALGOL 68",
                "Assembly",
                "FORTRAN"
            ],
            "influences" => [
                "C++",
                "Objective-C",
                "C#",
                "Java",
                "JavaScript",
                "PHP",
                "Go"
            ]
        ]
    ];
    return response()->json($data, 200);
});

Route::post('/language', function (Request $request) {
    $datas = [
        [
            "id" => 2,
            "language" => "Go",
            "appeared" => 2009,
            "created" => [
                "Robert Griesemer",
                "Rob Pike",
                "Ken Thompson"
            ],
            "functional" => true,
            "object-oriented" => false,
            "relation" => [
                "influenced-by" => [
                    "C",
                    "Python",
                    "Pascal",
                    "Smalltalk",
                    "Modula"
                ],
                "influences" => [
                    "Odin",
                    "Crystal",
                    "Zig"
                ]
            ]
        ],
        [
            "id" => 3,
            "language" => "Python",
            "appeared" => 1991,
            "created" => [
                "Guido van Rossum"
            ],
            "functional" => true,
            "object-oriented" => true,
            "relation" => [
                "influenced-by" => [
                    "C",
                    "C++",
                    "ALGOL 68",
                    "Ada",
                    "Haskell",
                    "Java",
                    "Lisp"
                ],
                "influences" => [
                    "Go",
                    "CoffeeScript",
                    "JavaScript",
                    "Julia",
                    "Ruby",
                    "Swift"
                ]
            ]
        ],
    ];

    $languages[] = $datas;

    return response()->json($datas, 200);
});

Route::get('/palindrome/{param}', [PalindromeController::class, 'palindrome']);

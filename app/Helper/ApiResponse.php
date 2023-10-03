<?php
/**
 * Created by PhpStorm.
 * User: Abdulrahman
 * Date: 1/17/2019
 * Time: 11:18 م
 */

/**
 * success response method.
 *
 * @return \Illuminate\Http\Response
 */
function sendResponse($message = 'OK', $data = null, $status_code = 200)
{
    $response = [
        'success' => true,
        'message' => $message,

        'data' => $data,
        'statusCode' => $status_code,
    ];

    return response()->json($response, $status_code);
}

/**
 * return error response.
 *
 * @return \Illuminate\Http\Response
 */
function sendError($message = 'Error', $data = null, $status_code = 404, $errors = [])
{
    $response = [
        'success' => false,
        'message' => $message,
        'errors' => $errors,
        'data' => $data,
        'statusCode' => $status_code,
    ];

    return response()->json($response, $status_code);
}

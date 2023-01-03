<?php

namespace App\Http\Controllers;

use App\Services\ChallengeService;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function __construct(private ChallengeService $service) {
    }

    /**
     * 
     *
     * @throws Exception
     */
    public function listChallenge()
    {
        try {
            
            
            $result = $this->service->listChallenge();

            return $result;

        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }

    public function createChallenge()
    {
        try {
            //code...
        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }

    public function updateChallenge()
    {
        try {
            //code...
        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }
}

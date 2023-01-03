<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCodingChallengeRequest;
use App\Http\Requests\UpdateCodingChallengeRequest;
use App\Services\ChallengeService;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function __construct(private ChallengeService $service)
    {
    }

    /**
     * 
     *
     * @throws Exception
     */
    public function listChallenge()
    {
        try {

            $result = $this->service->listReports();

            return $result;
        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }

    public function createChallenge(CreateCodingChallengeRequest $request)
    {
        try {
            $result = $this->service->createdReports($request->reportType, $request->message);

            return $result;
        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }

    public function updateChallenge(UpdateCodingChallengeRequest $request, $id)
    {
        try {
            $result = $this->service->updateReports($id, $request->state);

            return $result;
        } catch (\Exception $e) {
            [$message, $statusCode, $exceptionCode] = getHttpMessageAndStatusCodeFromException($e);

            return response()->json([
                "message" => $message,
            ], $statusCode);
        }
    }
}

<?php

namespace App\Services;

use App\Models\Reports;
use Illuminate\Support\Facades\DB;

class ChallengeService
{
    public function listReports(): array
    {
        $reports = DB::select("SELECT reports.id, reports.source, 
                               reports.reportType, reports.message, 
                               reports.state 
                               FROM reports 
                               WHERE reports.state = 'OPEN' ");

        return $reports;
    }

    public function createdReports(string $reportType, string $message): Reports
    {
        $postReports = Reports::create([
            'reportType' => $reportType,
            'message' => $message,
        ]);

        return $postReports;
    }

    public function updateReports(int $id, string $state)
    {
        $validateId = Reports::where('id', $id)->first();

        if (is_null($validateId) || !$validateId) {

            return false;

        } else {

            $updateReports = Reports::where('id', $id)->update([
                
                'state' => $state,
            ]);
        }

        return $updateReports;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Issue;
use App\Models\Delivery;
use App\Models\Driver;
use App\Models\Support;
use App\Models\IssueMedia;
use App\Models\SosLog;

class DashboardController extends Controller
{
    public function index(Request $request){
        try {
            $now = Carbon::now();
            $last30 = $now->subDays(30);
            $userDetails = User::with('userDetail')
                ->where('status', 'active')
                ->get();

            $reportedIssues = Issue::with([
                    'delivery',
                    'driver',
                    'support',
                    'issueCategory',
                    'issueMedia'
                ])
                ->where('status', 'open')
                ->get();

            $totalDeliveries = Delivery::where('created_at', '>=', $last30)->count();   
            $delayedTrips = Delivery::where('created_at', '>=', $last30)
                ->where('status', 'deplay')
                ->count();
            $sosReports = SosLog::where('created_at', '>=', $last30)->count();
            $responseTimes = Issue::whereNotNull('resolved_at')
            ->where('reported_at', '>=', $last30)
            ->get()
            ->map(function ($issue) {
                return $issue->resolved_at->diffInMinutes($issue->reported_at);
            });

            $avgResponseTime = $responseTimes->count() > 0
                ? round($responseTimes->avg())
                : 0;
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Dashboard data retrieved successfully',
                'data' => [
                    'user' => $userDetails,
                    'reported_issues' => $reportedIssues,
                    'delivery_count' => $totalDeliveries,
                    'delayed_trips' => $delayedTrips,
                    'sos_reports' => $sosReports,
                    'support_response_time' => $avgResponseTime,
                ]
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'code' => 500,
                'message' => 'Something went wrong while fetching dashboard data.',
                'error' => $e->getMessage() 
            ], 500);
        }
    }

}

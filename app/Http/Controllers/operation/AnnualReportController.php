<?php

namespace App\Http\Controllers\operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class AnnualReportController extends Controller
{
    public function AnnualReportPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'รายงานผลการดำเนินงานประจำปี')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('operation.annual_report.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function AnnualReportDetail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('operation.annual_report.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}

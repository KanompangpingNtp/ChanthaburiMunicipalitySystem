<?php

namespace App\Http\Controllers\operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class BudgetReportController extends Controller
{
    public function BudgetReportPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'รายงานการกำกับติดตามการดำเนินงานและการใช้งบประมาณประจำปีรอบ6เดือน')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('operation.budget_report.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function BudgetReportDetail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('operation.budget_report.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}

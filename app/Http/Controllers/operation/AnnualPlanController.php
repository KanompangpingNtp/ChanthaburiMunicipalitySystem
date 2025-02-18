<?php

namespace App\Http\Controllers\operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class AnnualPlanController extends Controller
{
    public function AnnualPlanPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'แผนดำเนินงานและการใช้งบประมาณประจำปี')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('operation.annualplan.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function AnnualPlanDetail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('operation.annualplan.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}

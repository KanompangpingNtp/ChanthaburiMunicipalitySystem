<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProcurementResultsController;
use App\Http\Controllers\AveragePriceController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\DataPostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagePersonnelController;
use App\Http\Controllers\PersonnelAgencyController;
use App\Http\Controllers\operation\AdminPlanProgressController;
use App\Http\Controllers\operation\PlanProgressController;
use App\Http\Controllers\operation\AdminAnnualPlanController;
use App\Http\Controllers\operation\AnnualPlanController;
use App\Http\Controllers\operation\AdminBudgetReportController;
use App\Http\Controllers\operation\BudgetReportController;
use App\Http\Controllers\operation\AdminAnnualReportController;
use App\Http\Controllers\operation\AnnualReportController;
use App\Http\Controllers\operation\AdminWorkforcePlanController;
use App\Http\Controllers\operation\WorkforcePlanController;
use App\Http\Controllers\FinanceTreasuryMgmt\AdminBudgetTransferController;
use App\Http\Controllers\FinanceTreasuryMgmt\BudgetTransferController;
use App\Http\Controllers\FinanceTreasuryMgmt\AdminTrialBalanceController;
use App\Http\Controllers\FinanceTreasuryMgmt\TrialBalanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [DataPostController::class, 'HomeIndex'])->name('HomeIndex');
Route::get('/agency/{id}', [PersonnelAgencyController::class, 'show'])->name('agency.show');
Route::get('/layout', [DataPostController::class, 'layout'])->name('layout');

//แผนและความก้าวหน้าในการดำเนินงานและการใช้จ่ายงบประมาณประจำปี
Route::get('/PlanProgress/page', [PlanProgressController::class, 'PlanProgressPage'])->name('PlanProgressPage');
Route::get('/PlanProgress/show/details/{id}', [PlanProgressController::class, 'PlanProgressDetail'])->name('PlanProgressDetail');

//แผนดำเนินงานและการใช้งบประมาณประจำปี
Route::get('/AnnualPlan/page', [AnnualPlanController::class, 'AnnualPlanPage'])->name('AnnualPlanPage');
Route::get('/AnnualPlan/show/details/{id}', [AnnualPlanController::class, 'AnnualPlanDetail'])->name('AnnualPlanDetail');

//รายงานการกำกับติดตามการดำเนินงานและการใช้งบประมาณประจำปีรอบ6เดือน
Route::get('/BudgetReport/page', [BudgetReportController::class, 'BudgetReportPage'])->name('BudgetReportPage');
Route::get('/BudgetReport/show/details/{id}', [BudgetReportController::class, 'BudgetReportDetail'])->name('BudgetReportDetail');

//รายงานผลการดำเนินงานประจำปี
Route::get('/AnnualReport/page', [AnnualReportController::class, 'AnnualReportPage'])->name('AnnualReportPage');
Route::get('/AnnualReport/show/details/{id}', [AnnualReportController::class, 'AnnualReportDetail'])->name('AnnualReportDetail');

//แผนอัตรากำลัง3ปี
Route::get('/WorkforcePlan/page', [WorkforcePlanController::class, 'WorkforcePlanPage'])->name('WorkforcePlanPage');
Route::get('/WorkforcePlan/show/details/{id}', [WorkforcePlanController::class, 'WorkforcePlanDetail'])->name('WorkforcePlanDetail');

Route::middleware(['check.auth'])->group(function () {
    //admin PressRelease
    Route::get('/PressRelease/page', [PressReleaseController::class, 'PressReleaseHome'])->name('PressReleaseHome');
    Route::post('/PressRelease/create', [PressReleaseController::class, 'PressReleaseCreate'])->name('PressReleaseCreate');
    Route::delete('/PressRelease/delete{id}', [PressReleaseController::class, 'PressReleaseDelete'])->name('PressReleaseDelete');
    Route::put('/PressRelease/update/{id}', [PressReleaseController::class, 'PressReleaseUpdate'])->name('PressReleaseUpdate');
    Route::put('/PressRelease/{id}/updatefile', [PressReleaseController::class, 'updateFile'])->name('updateFile');

    //admin Activity
    Route::get('/Activity/page', [ActivityController::class, 'ActivityHome'])->name('ActivityHome');
    Route::post('/Activity/create', [ActivityController::class, 'ActivityCreate'])->name('ActivityCreate');
    Route::delete('/Activity/delete{id}', [ActivityController::class, 'ActivityDelete'])->name('ActivityDelete');
    Route::put('/Activity/update/{id}', [ActivityController::class, 'ActivityUpdate'])->name('ActivityUpdate');
    Route::put('/Activity/{id}/updatefile', [ActivityController::class, 'ActivityUpdateFile'])->name('ActivityUpdateFile');

    //admin Procurement
    Route::get('/Procurement/page', [ProcurementController::class, 'ProcurementHome'])->name('ProcurementHome');
    Route::post('/Procurement/create', [ProcurementController::class, 'ProcurementCreate'])->name('ProcurementCreate');
    Route::delete('/Procurement/delete{id}', [ProcurementController::class, 'ProcurementDelete'])->name('ProcurementDelete');
    Route::put('/procurement/update/{id}', [ProcurementController::class, 'ProcurementUpdate'])->name('ProcurementUpdate');

    //admin ProcurementResults
    Route::get('/ProcurementResults/page', [ProcurementResultsController::class, 'ProcurementResultsHome'])->name('ProcurementResultsHome');
    Route::post('/ProcurementResults/create', [ProcurementResultsController::class, 'ProcurementResultsCreate'])->name('ProcurementResultsCreate');
    Route::delete('/ProcurementResults/delete{id}', [ProcurementResultsController::class, 'ProcurementResultsDelete'])->name('ProcurementResultsDelete');
    Route::put('/ProcurementResults/update/{id}', [ProcurementResultsController::class, 'ProcurementResultsUpdate'])->name('ProcurementResultsUpdate');

    //admin AveragePrice
    Route::get('/AveragePrice/page', [AveragePriceController::class, 'AveragePriceHome'])->name('AveragePriceHome');
    Route::post('/AveragePrice/create', [AveragePriceController::class, 'AveragePriceCreate'])->name('AveragePriceCreate');
    Route::delete('/AveragePrice/delete{id}', [AveragePriceController::class, 'AveragePriceDelete'])->name('AveragePriceDelete');
    Route::put('/AveragePrice/update/{id}', [AveragePriceController::class, 'AveragePriceUpdate'])->name('AveragePriceUpdate');

    //admin Revenue
    Route::get('/Revenue/page', [RevenueController::class, 'RevenueHome'])->name('RevenueHome');
    Route::post('/Revenue/create', [RevenueController::class, 'RevenueCreate'])->name('RevenueCreate');
    Route::delete('/Revenue/delete{id}', [RevenueController::class, 'RevenueDelete'])->name('RevenueDelete');
    Route::put('/Revenue/update/{id}', [RevenueController::class, 'RevenueUpdate'])->name('RevenueUpdate');

    //admin ManagePersonnel
    Route::get('/Personnel/page', [ManagePersonnelController::class, 'ManagePersonnel'])->name('ManagePersonnel');
    Route::post('/Personnel/agency/create', [ManagePersonnelController::class, 'agencyCreate'])->name('agencyCreate');
    Route::put('/Personnel/agency/update/{id}', [ManagePersonnelController::class, 'agencyUpdate'])->name('agencyUpdate');
    Route::delete('/Personnel/agency/delete{id}', [ManagePersonnelController::class, 'agencyDelete'])->name('agencyDelete');

    Route::get('/PersonnelRankDetails/page/{id}', [ManagePersonnelController::class, 'PersonnelRankDetails'])->name('PersonnelRankDetails');
    Route::post('/Personnel/PersonnelRank/create/{id}', [ManagePersonnelController::class, 'PersonnelRankCreate'])->name('PersonnelRankCreate');
    Route::put('/Personnel/PersonnelRank/update/{id}', [ManagePersonnelController::class, 'PersonnelRankUpdate'])->name('PersonnelRankUpdate');
    Route::delete('/Personnel/PersonnelRank/delete{id}', [ManagePersonnelController::class, 'PersonnelRankDelete'])->name('PersonnelRankDelete');

    Route::get('/Personnel/PersonnelRank/PersonnelDetails/page/{id}', [ManagePersonnelController::class, 'PersonnelDetails'])->name('PersonnelDetails');
    Route::post('/Personnel/PersonnelRank/PersonnelDetails/create/{id}', [ManagePersonnelController::class, 'PersonnelDetailsCreate'])->name('PersonnelDetailsCreate');
    Route::put('/Personnel/PersonnelRank/PersonnelDetails/update/{id}', [ManagePersonnelController::class, 'PersonnelDetailsUpdate'])->name('PersonnelDetailsUpdate');
    Route::delete('/Personnel/PersonnelRank/PersonnelDetails/delete{id}', [ManagePersonnelController::class, 'PersonnelDetailsDelete'])->name('PersonnelDetailsDelete');

    //PlanProgress
    Route::get('/Admin/PlanProgress/page', [AdminPlanProgressController::class, 'PlanProgressAdmin'])->name('PlanProgressAdmin');
    Route::post('/Admin/PlanProgress/create', [AdminPlanProgressController::class, 'PlanProgressCreate'])->name('PlanProgressCreate');
    Route::put('/Admin/PlanProgress/{id}/update', [AdminPlanProgressController::class, 'PlanProgressUpdate'])->name('PlanProgressUpdate');
    Route::delete('/Admin/PlanProgress/{id}/delete', [AdminPlanProgressController::class, 'PlanProgressDelete'])->name('PlanProgressDelete');
    Route::get('/Admin/PlanProgress/show/details/{id}', [AdminPlanProgressController::class, 'PlanProgressShowDetails'])->name('PlanProgressShowDetails');
    Route::post('/Admin/PlanProgress/details/{id}/create', [AdminPlanProgressController::class, 'PlanProgressCreateFiles'])->name('PlanProgressCreateFiles');
    Route::delete('/Admin/PlanProgress/details/{id}/delete', [AdminPlanProgressController::class, 'PlanProgressDetailsDelete'])->name('PlanProgressDetailsDelete');

    //AnnualPlan
    Route::get('/Admin/AnnualPlan/page', [AdminAnnualPlanController::class, 'AnnualPlanAdmin'])->name('AnnualPlanAdmin');
    Route::post('/Admin/AnnualPlan/create', [AdminAnnualPlanController::class, 'AnnualPlanCreate'])->name('AnnualPlanCreate');
    Route::put('/Admin/AnnualPlan/{id}/update', [AdminAnnualPlanController::class, 'AnnualPlanUpdate'])->name('AnnualPlanUpdate');
    Route::delete('/Admin/AnnualPlan/{id}/delete', [AdminAnnualPlanController::class, 'AnnualPlanDelete'])->name('AnnualPlanDelete');
    Route::get('/Admin/AnnualPlan/show/details/{id}', [AdminAnnualPlanController::class, 'AnnualPlanShowDetails'])->name('AnnualPlanShowDetails');
    Route::post('/Admin/AnnualPlan/details/{id}/create', [AdminAnnualPlanController::class, 'AnnualPlanCreateFiles'])->name('AnnualPlanCreateFiles');
    Route::delete('/Admin/AnnualPlan/details/{id}/delete', [AdminAnnualPlanController::class, 'AnnualPlanDetailsDelete'])->name('AnnualPlanDetailsDelete');

    //BudgetReport
    Route::get('/Admin/BudgetReport/page', [AdminBudgetReportController::class, 'BudgetReportAdmin'])->name('BudgetReportAdmin');
    Route::post('/Admin/BudgetReport/create', [AdminBudgetReportController::class, 'BudgetReportCreate'])->name('BudgetReportCreate');
    Route::put('/Admin/BudgetReport/{id}/update', [AdminBudgetReportController::class, 'BudgetReportUpdate'])->name('BudgetReportUpdate');
    Route::delete('/Admin/BudgetReport/{id}/delete', [AdminBudgetReportController::class, 'BudgetReportDelete'])->name('BudgetReportDelete');
    Route::get('/Admin/BudgetReport/show/details/{id}', [AdminBudgetReportController::class, 'BudgetReportShowDetails'])->name('BudgetReportShowDetails');
    Route::post('/Admin/BudgetReport/details/{id}/create', [AdminBudgetReportController::class, 'BudgetReportCreateFiles'])->name('BudgetReportCreateFiles');
    Route::delete('/Admin/BudgetReport/details/{id}/delete', [AdminBudgetReportController::class, 'BudgetReportDetailsDelete'])->name('BudgetReportDetailsDelete');

    //AnnualReport
    Route::get('/Admin/AnnualReport/page', [AdminAnnualReportController::class, 'AnnualReportAdmin'])->name('AnnualReportAdmin');
    Route::post('/Admin/AnnualReport/create', [AdminAnnualReportController::class, 'AnnualReportCreate'])->name('AnnualReportCreate');
    Route::put('/Admin/AnnualReport/{id}/update', [AdminAnnualReportController::class, 'AnnualReportUpdate'])->name('AnnualReportUpdate');
    Route::delete('/Admin/AnnualReport/{id}/delete', [AdminAnnualReportController::class, 'AnnualReportDelete'])->name('AnnualReportDelete');
    Route::get('/Admin/AnnualReport/show/details/{id}', [AdminAnnualReportController::class, 'AnnualReportShowDetails'])->name('AnnualReportShowDetails');
    Route::post('/Admin/AnnualReport/details/{id}/create', [AdminAnnualReportController::class, 'AnnualReportCreateFiles'])->name('AnnualReportCreateFiles');
    Route::delete('/Admin/AnnualReport/details/{id}/delete', [AdminAnnualReportController::class, 'AnnualReportDetailsDelete'])->name('AnnualReportDetailsDelete');

    //WorkforcePlan
    Route::get('/Admin/WorkforcePlan/page', [AdminWorkforcePlanController::class, 'WorkforcePlanAdmin'])->name('WorkforcePlanAdmin');
    Route::post('/Admin/WorkforcePlan/create', [AdminWorkforcePlanController::class, 'WorkforcePlanCreate'])->name('WorkforcePlanCreate');
    Route::put('/Admin/WorkforcePlan/{id}/update', [AdminWorkforcePlanController::class, 'WorkforcePlanUpdate'])->name('WorkforcePlanUpdate');
    Route::delete('/Admin/WorkforcePlan/{id}/delete', [AdminWorkforcePlanController::class, 'WorkforcePlanDelete'])->name('WorkforcePlanDelete');
    Route::get('/Admin/WorkforcePlan/show/details/{id}', [AdminWorkforcePlanController::class, 'WorkforcePlanShowDetails'])->name('WorkforcePlanShowDetails');
    Route::post('/Admin/WorkforcePlan/details/{id}/create', [AdminWorkforcePlanController::class, 'WorkforcePlanCreateFiles'])->name('WorkforcePlanCreateFiles');
    Route::delete('/Admin/WorkforcePlan/details/{id}/delete', [AdminWorkforcePlanController::class, 'WorkforcePlanDetailsDelete'])->name('WorkforcePlanDetailsDelete');

    //BudgetTransfer
    Route::get('/Admin/BudgetTransfer/page', [AdminBudgetTransferController::class, 'BudgetTransferAdmin'])->name('BudgetTransferAdmin');
    Route::post('/Admin/BudgetTransfer/create', [AdminBudgetTransferController::class, 'BudgetTransferCreate'])->name('BudgetTransferCreate');
    Route::put('/Admin/BudgetTransfer/{id}/update', [AdminBudgetTransferController::class, 'BudgetTransferUpdate'])->name('BudgetTransferUpdate');
    Route::delete('/Admin/BudgetTransfer/{id}/delete', [AdminBudgetTransferController::class, 'BudgetTransferDelete'])->name('BudgetTransferDelete');
    Route::get('/Admin/BudgetTransfer/show/details/{id}', [AdminBudgetTransferController::class, 'BudgetTransferShowDetails'])->name('BudgetTransferShowDetails');
    Route::post('/Admin/BudgetTransfer/details/{id}/create', [AdminBudgetTransferController::class, 'BudgetTransferCreateFiles'])->name('BudgetTransferCreateFiles');
    Route::delete('/Admin/BudgetTransfer/details/{id}/delete', [AdminBudgetTransferController::class, 'BudgetTransferDetailsDelete'])->name('BudgetTransferDetailsDelete');

    //TrialBalance
    Route::get('/Admin/TrialBalance/page', [AdminTrialBalanceController::class, 'TrialBalanceAdmin'])->name('TrialBalanceAdmin');
    Route::post('/Admin/TrialBalance/create', [AdminTrialBalanceController::class, 'TrialBalanceCreate'])->name('TrialBalanceCreate');
    Route::put('/Admin/TrialBalance/{id}/update', [AdminTrialBalanceController::class, 'TrialBalanceUpdate'])->name('TrialBalanceUpdate');
    Route::delete('/Admin/TrialBalance/{id}/delete', [AdminTrialBalanceController::class, 'TrialBalanceDelete'])->name('TrialBalanceDelete');
    Route::get('/Admin/TrialBalance/show/details/{id}', [AdminTrialBalanceController::class, 'TrialBalanceShowDetails'])->name('TrialBalanceShowDetails');
    Route::post('/Admin/TrialBalance/details/{id}/create', [AdminTrialBalanceController::class, 'TrialBalanceCreateFiles'])->name('TrialBalanceCreateFiles');
    Route::delete('/Admin/TrialBalance/details/{id}/delete', [AdminTrialBalanceController::class, 'TrialBalanceDetailsDelete'])->name('TrialBalanceDetailsDelete');
});

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

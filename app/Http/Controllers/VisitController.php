<?php

namespace App\Http\Controllers;

use App\Visit;
use App\Action;
use App\Worker;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use App\Exports\VisitsExport;
use App\Imports\VisitsImport;
use Maatwebsite\Excel\Facades\Excel;



class VisitController extends Controller
{
// <<<<<<< Updated upstream
//   /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function importExportView()
//     {
//        return view('import');
//     }
//
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function export()
//     {
//         return Excel::download(new VisitsExport, 'visits.xlsx');
//     }
// =======
//
// >>>>>>> Stashed changes
//
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function import()
//     {
//         Excel::import(new VisitsImport,request()->file('file'));
//
// <<<<<<< Updated upstream
//         return back();
// =======

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function importExportView()
    // {
    //    return view('import');
    // }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new VisitsExport, 'visits.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new VisitsImport,request()->file('file'));

        $visits = Visit::select('*')
        ->get();

        return back();

// >>>>>>> Stashed changes
    }
}
// public function index()
// {
//     $actions = Action::select('*')
//     ->get();
//
//     return view('actions.list', ['actions' => $actions]);
// }
//
//
// }

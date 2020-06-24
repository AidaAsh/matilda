<?php

namespace App\Http\Controllers;

use App\Visit;
use App\Report;
use App\Action;
use App\Worker;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use App\Exports\ReportsExport;
use App\Imports\VisitsImport;
use Maatwebsite\Excel\Facades\Excel;

class VisitController extends Controller
{
  /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new ReportsExport, 'reports.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new VisitsImport,request()->file('file'));
        DB::select("CALL insert_to_totals()");
        DB::select("CALL insert_to_reports()");
        DB::select("CALL update_reports()");
      return redirect('/visits');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function identical()
    {


      return redirect('/visits');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function excess()
    {


      return redirect('/visits');
    }

    /**
    * @return \Illuminate\Support\Collection
    */


}

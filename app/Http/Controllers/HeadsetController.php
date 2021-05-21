<?php

namespace App\Http\Controllers;

use App\Models\Headset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\HeadsetExport;
use App\Imports\HeadsetsImport;
use Maatwebsite\Excel\Facades\Excel;

class HeadsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headsets = Headset::all();
        return view('headsets.index', compact('headsets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('headsets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $headset = $request->except('_token');
        if($img = $request->file('image')){
            $destinationPath = 'imagenes/headsets/';
            $name =date('YmdHis') . "." . 
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $headset['image'] = "$name";
        }

        Headset::create($headset);
        return redirect()->to(url('/headsets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Headsets  $headset
     * @return \Illuminate\Http\Response
     */
    public function show(Headset $headset)
    {
        return view('headsets.show', compact('headset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Headsets  $headset
     * @return \Illuminate\Http\Response
     */
    public function edit(Headset $headset)
    {
        return view('headsets.edit', compact('headset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Headset  $headset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Headset $headset)
    {
        $dataHeadset = request()->except('_token');
        $headset->update($dataHeadset);
        return redirect()->to(url('/headsets'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Headset  $headset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headset $headset)
    {
        $headset->delete();
        return redirect()->to(url('/headsets'));
    }


    public function exportToCsv(Request $request)
    {
       $fileName = 'headset.csv';
       $headsets = Headset::all();
    
            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );
    
            $columns = array('brand', 'model', 'color', 'type', 'year');
    
            $callback = function() use($headsets, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);
    
                foreach ($headsets as $headset) {
                    $row['brand']  = $headset->brand;
                    $row['model']    = $headset->model;
                    $row['color']    = $headset->color;
                    $row['type']  = $headset->type;
                    $row['year']  = $headset->year;
    
                    fputcsv($file, array($row['brand'], $row['model'], $row['color'], $row['type'], $row['year']));
                }
    
                fclose($file);
            };
    
            return response()->stream($callback, 200, $headers);
        }

    public function chart()
    {

        $headsets = Headset::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Minute(created_at)"))
            ->pluck('count');

        $headsets2 = Headset::select(\DB::raw("COUNT(*) as count"))
            ->whereBetween('available', ([2, 100]))
            ->groupBy(\DB::raw("year"))
            ->pluck('count');


        return view('headsets.chart')
            ->with('headsets', $headsets)
            ->with('headsets2', $headsets2);
    }


    public function cards()
    {
        $headsets = Headset::all();
        return view('headsets.cards', compact('headsets'));
    }

    public function exportToXlsx()
    {
        return Excel::download(new HeadsetExport, 'headsets.xlsx');
    }

    public function import()
    {
        return view('headsets.import');
    }

    public function importData(Request $request)
    {
        Excel::import(new HeadsetsImport, request()->file('excel'));
        return redirect()->to(url('headsets'));
    }
}

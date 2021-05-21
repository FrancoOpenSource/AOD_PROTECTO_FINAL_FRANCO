<?php

namespace App\Http\Controllers;

use App\Models\Chair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ChairExport;
use App\Imports\ChairsImport;
use Maatwebsite\Excel\Facades\Excel;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chairs = Chair::all();
        return view('chairs.index', compact('chairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chairs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chair = $request->except('_token');
        if($img = $request->file('image')){
            $destinationPath = 'imagenes/chairs/';
            $name =date('YmdHis') . "." . 
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $chair['image'] = "$name";
        }

        Chair::create($chair);
        return redirect()->to(url('/chairs'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function show(Chair $chair)
    {
        return view('chairs.show', compact('chair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function edit(Chair $chair)
    {
        return view('chairs.edit', compact('chair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chair $chair)
    {
        $dataChair = request()->except('_token');
        $chair->update($dataChair);
        return redirect()->to(url('/chairs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chair $chair)
    {
        $chair->delete();
        return redirect()->to(url('/chairs'));
    }


    public function exportToCsv(Request $request)
{
   $fileName = 'chairs.csv';
   $chairs = Chair::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('brand', 'model', 'color', 'weight', 'fixed');

        $callback = function() use($chairs, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($chairs as $chair) {
                $row['brand']  = $chair->brand;
                $row['model']    = $chair->model;
                $row['color']    = $chair->color;
                $row['weight']  = $chair->weight;
                $row['fixed']  = $chair->fixed;

                fputcsv($file, array($row['brand'], $row['model'], $row['color'], $row['weight'], $row['fixed']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
   

    public function chart()
    {

        $chairs = Chair::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Minute(created_at)"))
            ->pluck('count');

        $chairs2 = Chair::select(\DB::raw("COUNT(*) as count"))
            ->whereBetween('weight', ([1, 100]))
            ->groupBy(\DB::raw("weight"))
            ->pluck('count');


        return view('chairs.chart')
            ->with('chairs', $chairs)
            ->with('chairs2', $chairs2);
    }


    public function cards()
    {
        $chairs = Chair::all();
        return view('chairs.cards', compact('chairs'));
    }

    public function exportToXlsx()
    {
        return Excel::download(new ChairExport, 'chairs.xlsx');
    }

    public function import()
    {
        return view('chairs.import');
    }

    public function importData(Request $request)
    {
        Excel::import(new ChairsImport, request()->file('excel'));
        return redirect()->to(url('chairs'));
    }
}

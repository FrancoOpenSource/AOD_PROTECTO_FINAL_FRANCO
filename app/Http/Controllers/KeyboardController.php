<?php

namespace App\Http\Controllers;

use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\KeyboardExport;
use App\Imports\KeyboardsImport;
use Maatwebsite\Excel\Facades\Excel;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyboards = Keyboard::all();
        return view('keyboards.index', compact('keyboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keyboards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keyboard = $request->except('_token');
        if($img = $request->file('image')){
            $destinationPath = 'imagenes/keyboards/';
            $name =date('YmdHis') . "." . 
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $keyboard['image'] = "$name";
        }

        Keyboard::create($keyboard);
        return redirect()->to(url('/keyboards'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function show(Keyboard $keyboard)
    {
        return view('keyboards.show', compact('keyboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Keyboard $keyboard)
    {
        return view('keyboards.edit', compact('keyboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keyboard $keyboard)
    {
        $dataKeyboard = request()->except('_token');
        $keyboard->update($dataKeyboard);
        return redirect()->to(url('/keyboards'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyboard $keyboard)
    {
        $keyboard->delete();
        return redirect()->to(url('/keyboards'));
    }


    public function exportToCsv(Request $request)
{
   $fileName = 'keyboards.csv';
   $keyboards = Keyboard::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('brand', 'model', 'keycap', 'ckey', 'rgb');

        $callback = function() use($keyboards, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($keyboards as $keyboard) {
                $row['brand']  = $keyboard->brand;
                $row['model']    = $keyboard->model;
                $row['keycap']    = $keyboard->keycap;
                $row['ckey']  = $keyboard->ckey;
                $row['rgb']  = $keyboard->rgb;

                fputcsv($file, array($row['brand'], $row['model'], $row['keycap'], $row['ckey'], $row['rgb']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
   

    public function chart()
    {

        $keyboards = Keyboard::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Minute(created_at)"))
            ->pluck('count');

        $keyboards2 = Keyboard::select(\DB::raw("COUNT(*) as count"))
            ->whereBetween('ckey', ([1, 100]))
            ->groupBy(\DB::raw("ckey"))
            ->pluck('count');


        return view('keyboards.chart')
            ->with('keyboards', $keyboards)
            ->with('keyboards2', $keyboards2);
    }


    public function cards()
    {
        $keyboards = Keyboard::all();
        return view('keyboards.cards', compact('keyboards'));
    }

    public function exportToXlsx()
    {
        return Excel::download(new KeyboardExport, 'keyboards.xlsx');
    }

    public function import()
    {
        return view('keyboards.import');
    }

    public function importData(Request $request)
    {
        Excel::import(new KeyboardsImport, request()->file('excel'));
        return redirect()->to(url('keyboards'));
    }
}
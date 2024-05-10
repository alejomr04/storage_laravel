<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoRequest $request)
    {
        $fileName = time().'.'.$request->file->extension();

        //guarda en la imagen en la carpeta public/images
        $request->file->storeAs('public/images', $fileName);

        //Ingresar en la bd la imagen
        $info = new Info;
        $info->name = $request->name;
        $info->email = $request->email;

        $info->file_url = $fileName;
        $info->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Info $info)
    {
         // Agrega esta línea para depurar el objeto $info
        return view('show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

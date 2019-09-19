<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buffet;

class BuffetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if (!empty($keyword)) {
            $buffet = Buffet::search($keyword);
        } else {
            $buffet = Buffet::getAll();
        }
        $data = [
          "buffet" => $buffet,
        ];
        return view('buffet.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buffet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newItem = $request->all();
        $buffet = Buffet::storeItem($newItem);
        return redirect('buffet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buffet = Buffet::findOrFail($id);
        $data = [
          "buffet" => $buffet,
        ];
        return view('buffet.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buffet = Buffet::findOrFail($id);
        $data = [
          "buffet" => $buffet,
        ];
        return view('buffet.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = $request->all();
        Buffet::updateItem($id,$item);
        return redirect('buffet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buffet::destroyItem($id);
        return redirect('buffet');
    }
}

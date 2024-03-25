<?php

namespace App\Http\Controllers;

use App\Models\titlesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //ใช้สำหรับการแสดงหน้าจอแรกเมื่อเรียก Controller
    {   
        $data["titles"] = titlesModel::all();
        return view("crud",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //ใช้สำหรับการแสดงหน้า create หรือ หน้า add นั่นแหละ
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//ใช้สำหรับการเอาข้อมูลลงฐานข้อมูล //$request = ข้อมูลที่ผู้ใช้กรอก
    {
        $name = $request -> input("name");
        $pin = $request -> input("pin");

        $titlesModel = new titlesModel();

        $titlesModel -> tit_name = $name;
        $titlesModel -> tit_pin = $pin;

        $titlesModel->save();

        return Redirect::to("/customers"); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //ใช้สำหรับการแสดงข้อมูลราย id
    {
        $tit_data = titlesModel::find($id);

        if($tit_data === null){
            return Redirect::to("/customers");
        } else{
        return view("read",compact("tit_data"));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //ใช้สำหรับการแสดงหน้าแก้ไขข้อมูลราย id
    {
        $tit_data = titlesModel::find($id); 

        if($tit_data === null){
            return Redirect::to("/customers");
        } else{
            return view("edit",compact("tit_data"));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //ใช้สำหรับการแก้ไขข้อมูลราย id
    {
        $name = $request -> input("name");
        $pin = $request -> input("pin");

        $tit_data = titlesModel::find($id);

        $tit_data -> tit_name = $name;
        $tit_data -> tit_pin = $pin;

        $tit_data -> save();

        return Redirect::to("/customers");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //ใช้สำหรับลบข้อมูลราย id
    {
        $tit_data = titlesModel::find($id);

        $tit_data  -> delete();
        
        return Redirect::to("/customers");
    }
}

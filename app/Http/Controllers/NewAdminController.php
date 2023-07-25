<?php

namespace App\Http\Controllers;

use App\Category_model;
use foo\bar;
use Illuminate\Http\Request;

class NewAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_active=5;
        $categories=Category_model::all();
        return view('backEnd.newadmin.create',compact('menu_active'));
    }
}
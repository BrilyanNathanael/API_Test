<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use Auth;

class TablesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function showAll()
    {
        $user = Auth::user();
        $data = DB::table('employees')->get();
        $join = DB::table('companies')
                ->join('employees','companies.id','=','employees.id')
                ->join('events','companies.event_id','=','events.id')
                ->select('name_event','name_company','name','position')
                ->get();
        return response()->json([
            'status' => 200,
            'auth' => 
            [
                'user' => $user->name,
                'email' => $user->email,
            ],
            'data' => $data,
            'join' => $join,
        ]);
    }
    public function join()
    {
        $join = DB::table('companies')
                ->join('employees','companies.id','=','employees.id')
                ->join('events','companies.event_id','=','events.id')
                ->select('name_event','name_company','name','position')
                ->get();
        return response()->json([
            'status' => 200,
            'join' => $join,
        ]);
    }
    public function show($id)
    {
        $data = DB::table('employees')->where('id', $id)->get();
        return response()->json([
            'status' => 200,
            'data' => $data,
        ]);
    }
    public function company()
    {
        $data = DB::table('companies')->get();
        return response()->json([
            'status' => 200,
            'data' => $data,
        ]);
    }
    public function employee()
    {
        $data = DB::table('employees')->get();
        return response()->json([
            'status' => 200,
            'data' => $data,
        ]);
    }
    public function event()
    {
        $data = DB::table('events')->get();
        return response()->json([
            'status' => 200,
            'data' => $data,
        ]);
    }
    public function create(Request $request)
    {
        Event::create([
            'name_event' => $request->name_event,
            'date_event' => $request->date_event,
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil ditambahkan!',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\error;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservations.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('reservations.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required', 'max:50'],
            'email'=>['required','email','max:255'],
            'person'=>['required', 'max:1'],
            'table'=>['required', 'max:1'],
            'time'=>['required',  Rule::unique('reservations')->where(function ($query) use ($request) {
                return $query->where('date', $request->date)->where('table', $request->table);
             })],
            'date'=>['required','after:tomorrow']
        
        ],
        [
            'date.after'=>"la date doit être le lendemain" ,
            'time.after'=>'horaire doit être entre 9H du matin et 21H du soir',
            'time.before'=>'horaire doit être entre 9H du matin et 21H du soir',
            'name.required'=>'Enter un nom correcte',
            'email.email'=>"L'email doit etre correcte",
        
        ]);
         $reserve = new Reservation();
        
        $reserve->name=strip_tags($request->input('name'));
        $reserve->email=strip_tags($request->input('email'));
        $reserve->person=strip_tags($request->input('person'));
        $reserve->time=strip_tags($request->input('time'));
        $reserve->table=strip_tags($request->input('table'));
        $reserve->date=strip_tags($request->input('date'));
        $reserve->save();
        if( $reserve->save()){
        return  redirect()->route('index');
    }else{
        return error('error');
      }    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

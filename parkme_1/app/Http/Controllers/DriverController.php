<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();

        return view('drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $driver = new Driver([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'Driving_Liscence_number' => $request->get('Driving_Liscence_number'),
            'Vehicle_type' => $request->get('Vehicle_type'),
            'Vehicle_Number' => $request->get('Vehicle_Number')
        ]);
        $driver->save();
        return redirect('/drivers')->with('success', 'New Driver Added Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $driver = driver::find($id);
        return view('drivers.edit', compact('driver')); 
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $driver = driver::find($id);
        $driver->first_name =  $request->get('first_name');
        $driver->last_name = $request->get('last_name');
        $driver->email = $request->get('email');
        $driver->Driving_Liscence_number = $request->get('Driving_Liscence_number');
        $driver->Vehicle_type= $request->get('Vehicle_type');
        $driver->Vehicle_Number = $request->get('Vehicle_Number');
        $driver->save();

        return redirect('/drivers')->with('success', 'Driver updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

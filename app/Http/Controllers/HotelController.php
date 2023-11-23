<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotel = Hotel::orderBy('name', 'asc')->get();

        return view('hotel.hotel', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel.hotel-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:hotels',
            'description' => 'required',
            'bedroom_name' => 'required',
            'price' => 'required',
            'beds' => 'required',
            'max_adult' => 'required',
            'child_number' => 'required',
            'attributes' => 'required',
            'statut' => 'required',
        ]);

        $hotel = Hotel::create($request->all());

        Alert::success('Success', 'Hotel has been saved !');
        return redirect('/hotel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        // $hotel = Hotel::findOrFail($id_hotel);

        return view('hotel.hotel-show.show', [
            'hotel' => $hotel,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_hotel)
    {
        $hotel = Hotel::findOrFail($id_hotel);

        return view('hotel.hotel-edit', [
            'hotel' => $hotel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_hotel)
    {
        $validated = $request->validate([
            'name' => 'required|unique:hotels,name,' . $id_hotel . ',id_hotel',
            'description' => 'required',
            'bedroom_name' => 'required',
            'price' => 'required',
            'beds' => 'required',
            'max_adult' => 'required',
            'child_number' => 'required',
            'attributes' => 'required',
            'statut' => 'required',
        ]);

        $hotel = Hotel::findOrFail($id_barang);
        $hotel->update($validated);

        Alert::info('Success', 'Hotel has been updated !');
        return redirect('/hotel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_hotel)
    {
        try {
            $deletedhotel = Hotel::findOrFail($id_hotel);

            $deletedhotel->delete();

            Alert::error('Success', 'Hotel has been deleted !');
            return redirect('/hotel');
        } catch (Exception $ex) {
            Alert::warning('Error', 'Cant deleted, Hotel already used !');
            return redirect('/hotel');
        }
    }
}

<?php

namespace App\Http\Controllers;

use http\Url;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class WasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function findItem(Request $request)
    {
        $targetURL = $request->segment(2);
        switch ($targetURL)
        {
            case 'anakart-hurdasi':
                return view('homepage.services.subServices.mainboard');
                break;
            case 'telefon-hurdasi':
                return view('homepage.services.subServices.phones');
                break;
            case 'tablet-hurdasi':
                return view('homepage.services.subServices.tablet');
                break;
            case 'adaptor-hurdasi':
                return view('homepage.services.subServices.adapter');
                break;
            case 'monitor-hurdasi':
                return view('homepage.services.subServices.monitor');
                break;
            case 'oem-hurdalar':
                return view('homepage.services.subServices.oem');
                break;
            default:
                return abort(404,"henüz böyle bir hurda alımımız yok");
                break;
        }
    }


}

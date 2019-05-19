<?php

namespace App\Http\Controllers;

use Alert;
use App\Mail\callMe;
use App\Mail\contactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class homePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage.index');
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

    public function about()
    {
        return view('homepage.about.index');
    }

    public function contact()
    {
        return view('homepage.contact.index');
    }

    public function services()
    {
        return view('homepage.services.index');
    }

    public function contactUs(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'tel' => 'required',
            'subject' => ''
            ],[
                'name.required' => 'Adınız soyadınız boş olamaz',
                'email.required' => 'Email adresiniz boş olamaz',
                'email.email' => 'Geçerli bir e-mail adresi giriniz',
                'message.required' => 'Mesaj boş olamaz',
                'tel.required' => 'Telefon boş olamaz'
            ]
        );

        $mailDetail = array(
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['tel']
        );

        $to = 'merhaba@elektronikatikistanbul.com';
        Mail::to($to)->cc('emir.h.calik@gmail.com')->send(new contactForm($mailDetail));
        alert()
            ->success('Başarılı', 'Mesajınızı aldık, size çok kısa süre içerisinde geri dönüş yapacağız')
            ->autoClose(2000);
        return back();
    }

    public function callBack(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'tel' => 'required',
        ],[
                'name.required' => 'Adınız soyadınız boş olamaz',
                'tel.required' => 'Telefon boş olamaz'
            ]
        );

        $mailDetail = array(
            'name' => $validated['name'],
            'phone' => $validated['tel']
        );

        $to = 'merhaba@elektronikatikistanbul.com';
        Mail::to($to)->cc('emir.h.calik@gmail.com')->send(new callMe($mailDetail));
        alert()
            ->success('Başarılı', 'Arama talebinizi aldık, size çok kısa süre içerisinde geri dönüş yapacağız')
            ->autoClose(2000);
        return back();
    }
}

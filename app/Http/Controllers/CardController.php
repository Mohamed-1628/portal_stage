<?php

namespace App\Http\Controllers;


use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
       $cards=Card::all();

       
        if (!empty(Auth::user())){
        
           $user = User::find(Auth::user()->id);
           $cards = $user->attachFavoriteStatus($cards);
           return view('cards',compact('cards'));
        }
       
        return view('welcome',compact('cards'));
        
    }
    
    public function favorites(){
        $user = User::find(1);
        $cards = $user->getFavoriteItems(Card::class)->get();

        return view('dashboard',compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

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

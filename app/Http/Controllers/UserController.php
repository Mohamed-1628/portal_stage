<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use App\Models\CardUser;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

    

    public function aff(){
       
        $cards=Card::all();
        return view('welcome',compact('cards'));

    }


    public function bookmarks( $user_id, $card_id)

    {      
       //find user & toggle pivot table
       if ($user_id == 0 && $card_id ==0){
        return $this->index();
        //$result = (new CardController)->index();
        //print_r($result);
       
       }else{
        $user = User::find($user_id); 
       $card = Card::find($card_id);
       $user->toggleFavorite($card);
       $favorites=$user->getFavoriteItems(Card::class)->get();
       
       return redirect()->back()->with(compact('favorites'));
        
       }
    }

    public function index()
    {
       $cards=Card::all();

       
        if (!empty(Auth::user())){
        
           $user = User::find(Auth::user()->id);
           $cards = $user->attachFavoriteStatus($cards);
           //return view('cards',compact('cards'));
           return redirect('/')->with(compact('cards'));
        }
       
        return redirect('/')->with(compact('cards'));
        
    }


    public function retrieveRecords()

    {   

        //Retrieve recoed in user table

        $user = User::find(1);    

        dd($user->cards);

        

        //Retrieve recoed in role table

        $card = Card::find(1);  

        dd($card->users);

    }
}

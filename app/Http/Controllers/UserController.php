<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\CardUser;
use App\Models\User;



class UserController extends Controller
{

    

    public function aff(){
       
        $cards=Card::all();
        return view('welcome',compact('cards'));

    }


    public function bookmarks( $user_id , $card_id)

    {      
       //find user & toggle pivot table
       $user = User::find($user_id); 
       $card = Card::find($card_id);
       $user->toggleFavorite($card);
 
    //    $user->cards()->toggle($card_id);
    //    $favorites=CardUser::all();
       $favorites=$user->getFavoriteItems(Card::class)->get();
       

       return redirect()->back()->with(compact('favorites'));
       //redirect("/cards")
       //back

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

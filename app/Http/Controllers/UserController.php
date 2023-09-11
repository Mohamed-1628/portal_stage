<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\CardUser;
use App\Models\User;
use Doctrine\DBAL\Schema\Index;
use Ramsey\Uuid\Type\Integer;

class UserController extends Controller
{

    public function Index(){
        $favorites=CardUser::all();
        $cards=Card::all();
        return view('dashboard',compact('favorites','cards'));

    }


    public function bookmarks( $user_id , $card_id)

    {      
       //find user & toggle pivot table
       $user = User::find($user_id); 
       
       $user->cards()->toggle($card_id);
       $favorites=CardUser::all();

       return redirect("/cards")->with(compact('favorites'));

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

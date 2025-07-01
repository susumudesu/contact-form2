<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndexRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
     public function confirm(IndexRequest $request)
    {
        $contacts = $request->only(['first_name','last_name','gender', 'email', 'tel1', 'tel2','tel3','address','building','category_id','detail']);

        $tel1 = $contacts['tel1'];
        $tel2 = $contacts['tel2'];
        $tel3 = $contacts['tel3'];
        $tel = $tel1 . $tel2 . $tel3;

        $category = Category::all();

            return view('confirm', compact('contacts','tel','category'));
    }
    
    public function thanks(Request $request)
    {
        $contacts = $request->only(['first_name','last_name','gender', 'email', 'tel' , 'address','building','category_id','detail']);
        Contact::create($contacts);
        return view('thanks');

    }


    public function admin(Request $request)
    {
        $contacts = Contact::all();
        $categories = Category::all();

        $firstName = $contacts['first_name'];
        $lastName = $contacts['last_name'];
        $fullName = $firstName . ' ' . $lastName;

        

        return view('admin', compact('contacts','fullName'));
    }
}

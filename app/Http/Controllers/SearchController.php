<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Recipe;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function index(){
        $search_text = $_GET['src'];
        $category = $_GET['src_category'];
        $passValue =  null;
        switch ($category){
            case "countries":
                //use get() to get a collection, use first to get single object
                $passValue = DB::table("countries")->where('name','LIKE','%'.$search_text.'%')->first();
                if ($passValue==null) return View("search.searchResult_error");
                $resByCountry = DB::table("restaurants")->where('country_id','=',$passValue->id)->get();
                $recByCountry = DB::table("recipes")->where('country_id','=',$passValue->id)->get();
                return View('search.searchResult_country',['restaurants'=>$resByCountry,'recipes'=> $recByCountry]);
            case "recipes":
                $passValue = DB::table("recipes")->where('name','LIKE','%'.$search_text.'%')->first();
                if ($passValue==null) return View("search.searchResult_error");
                $recReview = DB::table("recipe_reviews")->where('recipe_id',"=",$passValue->id)->get();
                return View('search.searchResult_recipe',['recipes'=>$passValue, 'reviews'=>$recReview]);
            case "restaurant":
                $passValue = DB::table("restaurants")->where('restaurants.name','LIKE','%'.$search_text.'%')->first();
                if ($passValue==null) return View("search.searchResult_error");
                $resReview = DB::table("restaurant_reviews")->where('restaurant_id',"=",$passValue->id)->get();
                return View('search.searchResult_restaurant',['restaurant'=>$passValue,"reviews"=>$resReview]);
            default:
                return View("search.searchResult_error");
        }

    }

}

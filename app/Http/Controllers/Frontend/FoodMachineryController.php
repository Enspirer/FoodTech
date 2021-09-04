<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class FoodMachineryController.
 */
class FoodMachineryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.product_services.food_machinery');
    }

    public function beverage()
    {
        return view('frontend.food_processing.beverage');
    }

    public function baking()
    {
        return view('frontend.food_processing.baking_and_confectionery');
    }

    public function fruit()
    {
        return view('frontend.food_processing.fruit_and_vegetable');
    }

    public function dairy()
    {
        return view('frontend.food_processing.dairy');
    }

    public function spice()
    {
        return view('frontend.food_processing.spices');
    }

    public function fish()
    {
        return view('frontend.food_processing.fish_and_canning');
    }

    public function coconut()
    {
        return view('frontend.food_processing.coconut');
    }

    public function steam()
    {
        return view('frontend.food_processing.steam_boilers');
    }

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class AboutUsController.
 */
class AboutUsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function aboutUs()
    {
        return view('frontend.about_us');
    }
}

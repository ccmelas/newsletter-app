<?php

namespace App\Http\Controllers;

use App\Repositories\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    private $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email'
        ]);

        $response = $this->newsletter->subscribe($request->all());
        if($response['status']) {
            return redirect()->back()->with('success', $response['message']);
        }
        return redirect()->back()->with('failure', $response['message']);
    }
}

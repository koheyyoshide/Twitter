<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    //
    public function showTimelinePage()
    {
        return view('timeline');
    }

    public function postTweet(Request $request)
    {   
        $validator = $request->validate([
            'tweet' => ['required', 'string', 'max:280'],
        ]);
        Tweet::create([
            'user_id' => 1,
            'tweet' => $request->tweet,
        ]);

        return back();
    }
}

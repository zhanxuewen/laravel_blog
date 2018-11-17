<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\WeddingCommits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WeddingController extends Controller
{

    public function getCommitList()
    {
        $commits = WeddingCommits::latest()->paginate(10)->toArray();
        return $this->success($commits['data']);
    }

    public function store()
    {
        $nickname = Input::get('nickname');
        $avatar = Input::get('avatar');
        $commit = Input::get('commit');

        WeddingCommits::create([
            'nickname' => $nickname,
            'avatar' => $avatar,
            'commit' => $commit,
        ]);

        return $this->success(true);
    }
}

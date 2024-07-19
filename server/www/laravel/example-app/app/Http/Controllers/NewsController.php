<?php

namespace App\Http\Controllers;

use App\DB\NewsList;

class NewsController
{

    public function list(){
        $data = (new NewsList())->get();
        return view('tt.news',['data'=>$data]);

    }

    public function page(int $id){
        $data = (new NewsList())->get();

        if (!isset($data[$id])){
            abort(404);
        }

        $page = $data[$id];

        return view('tt.page', ['id'=>$id, 'page'=>$page]);
    }
}

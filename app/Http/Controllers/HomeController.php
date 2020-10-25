<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use PHPHtmlParser\Dom;

class HomeController extends Controller
{
    public function __invoke()
    {
        $response = Http::get('https://duo.nl/particulier/footer/service/betaaldatums.jsp');
        if(!Cache::has('responseBody')) {
            Cache::put('responseBody', $response->body(), now()->addMinutes(20));
        }
        $dom = new Dom;
        $dom->loadStr(Cache::get('responseBody'));
        $lists = $dom->find('main ul');
        $thisYear = $this->cleanUpLists($lists[0]);
        $nextYear = $this->cleanUpLists($lists[1]);

        return view('home', ['thisYear' => $thisYear, 'nextYear' => $nextYear]);
    }

    private function cleanUpLists($list)
    {
        $values = [];
        foreach($list->getChildren() as $listItem) {
            if($listItem->getTag()->name() === "li") {
                foreach($listItem->getChildren() as $textNodesWithDates) {
                 $values[] = $textNodesWithDates->text;
                }
            }
        }
        return $values;
    }
}

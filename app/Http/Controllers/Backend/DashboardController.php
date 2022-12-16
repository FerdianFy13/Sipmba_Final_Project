<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // event
        $event = DB::table('events')->count();

        // news
        $news = DB::table('news')->count();

        // blood type a
        $bloodA1 = DB::table('blood_stoks')
            ->where('blood_group_id', '1')
            ->sum('sum');
        $bloodA2 = DB::table('blood_stoks')
            ->where('blood_group_id', '2')
            ->sum('sum');

        // blood type b
        $bloodB1 = DB::table('blood_stoks')
            ->where('blood_group_id', '3')
            ->sum('sum');
        $bloodB2 = DB::table('blood_stoks')
            ->where('blood_group_id', '4')
            ->sum('sum');

        // blood type AB
        $bloodAB1 = DB::table('blood_stoks')
            ->where('blood_group_id', '5')
            ->sum('sum');
        $bloodAB2 = DB::table('blood_stoks')
            ->where('blood_group_id', '6')
            ->sum('sum');

        // blood type O
        $bloodO1 = DB::table('blood_stoks')
            ->where('blood_group_id', '7')
            ->sum('sum');
        $bloodO2 = DB::table('blood_stoks')
            ->where('blood_group_id', '8')
            ->sum('sum');

        // @@chart
        // blood stock
        $data = DB::table('blood_stoks')->sum('sum');
        $datas = DB::table('blood_requests')->sum('sum');
        // $result = $data + $datas;

        // dd($data, $datas);

        // blood input

        // @blood request
        // blood type A
        $reqa1 = DB::table('blood_requests')->sum('blooda1');
        $reqa2 = DB::table('blood_requests')->sum('blooda2');

        // blood type B
        $reqb1 = DB::table('blood_requests')->sum('bloodb1');
        $reqb2 = DB::table('blood_requests')->sum('bloodb2');

        // blood type AB
        $reqab1 = DB::table('blood_requests')->sum('bloodc1');
        $reqab2 = DB::table('blood_requests')->sum('bloodc2');

        // blood type O
        $reqo1 = DB::table('blood_requests')->sum('bloodd1');
        $reqo2 = DB::table('blood_requests')->sum('bloodd2');

        // dd($reqa2);

        return view('backend.dashboard.dashboard', [
            'title' => 'Dashboard',
            'event' => $event,
            'news' => $news,
            'bloodTypeA' => $bloodA1 + $bloodA2,
            'bloodTypeB' => $bloodB1 + $bloodB2,
            'bloodTypeAB' => $bloodAB1 + $bloodAB2,
            'bloodTypeO' => $bloodO1 + $bloodO2,
            'reqBloodTypeA' => $reqa1 + $reqa2,
            'reqBloodTypeB' => $reqb1 + $reqb2,
            'reqBloodTypeAB' => $reqab1 + $reqab2,
            'reqBloodTypeO' => $reqo1 + $reqo2,
            // 'test' => $bloodStock,
        ]);
    }
}

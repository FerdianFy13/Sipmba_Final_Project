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

        return view('backend.dashboard.dashboard', [
            'title' => 'Dashboard',
            'event' => $event,
            'news' => $news,
            'bloodTypeA' => $bloodA1 + $bloodA2,
            'bloodTypeB' => $bloodB1 + $bloodB2,
            'bloodTypeAB' => $bloodAB1 + $bloodAB2,
            'bloodTypeO' => $bloodO1 + $bloodO2,
        ]);
    }
}

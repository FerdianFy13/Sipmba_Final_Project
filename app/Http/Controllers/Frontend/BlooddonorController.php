<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BloodStok;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlooddonorController extends Controller
{
    //
    public function procedure()
    {
        return view('frontend.blood_donor.procedure', [
            'title' => 'Prosedur & Syarat Donor',
        ]);
    }

    public function information()
    {
        // @ahf
        $ahfBloodA1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '1')
            ->where('blood_component_id', '1')
            ->sum('sum');

        $ahfBloodA2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '2')
            ->where('blood_component_id', '1')
            ->sum('sum');

        $ahfBloodB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '3')
            ->where('blood_component_id', '1')
            ->sum('sum');

        $ahfBloodB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '4')
            ->where('blood_component_id', '1')
            ->sum('sum');

        $ahfBloodAB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '5')
            ->where('blood_component_id', '1')
            ->sum('sum');

        $ahfBloodAB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '6')
            ->where('blood_component_id', '1')
            ->sum('sum');

        $ahfBloodO1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '7')
            ->where('blood_component_id', '1')
            ->sum('sum');

        $ahfBloodO2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '8')
            ->where('blood_component_id', '1')
            ->sum('sum');

        // @plasma konvaselen
        $plasmaBloodA1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '1')
            ->where('blood_component_id', '2')
            ->sum('sum');

        $plasmaBloodA2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '2')
            ->where('blood_component_id', '2')
            ->sum('sum');

        $plasmaBloodB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '3')
            ->where('blood_component_id', '2')
            ->sum('sum');

        $plasmaBloodB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '4')
            ->where('blood_component_id', '2')
            ->sum('sum');

        $plasmaBloodAB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '5')
            ->where('blood_component_id', '2')
            ->sum('sum');

        $plasmaBloodAB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '6')
            ->where('blood_component_id', '2')
            ->sum('sum');

        $plasmaBloodO1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '7')
            ->where('blood_component_id', '2')
            ->sum('sum');

        $plasmaBloodO2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '8')
            ->where('blood_component_id', '2')
            ->sum('sum');

        // @ffp
        $ffpBloodA1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '1')
            ->where('blood_component_id', '3')
            ->sum('sum');

        $ffpBloodA2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '2')
            ->where('blood_component_id', '3')
            ->sum('sum');

        $ffpBloodB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '3')
            ->where('blood_component_id', '3')
            ->sum('sum');

        $ffpBloodB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '4')
            ->where('blood_component_id', '3')
            ->sum('sum');

        $ffpBloodAB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '5')
            ->where('blood_component_id', '3')
            ->sum('sum');

        $ffpBloodAB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '6')
            ->where('blood_component_id', '3')
            ->sum('sum');

        $ffpBloodO1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '7')
            ->where('blood_component_id', '3')
            ->sum('sum');

        $ffpBloodO2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '8')
            ->where('blood_component_id', '3')
            ->sum('sum');

        // @pcr
        $pcrBloodA1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '1')
            ->where('blood_component_id', '4')
            ->sum('sum');

        $pcrBloodA2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '2')
            ->where('blood_component_id', '4')
            ->sum('sum');

        $pcrBloodB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '3')
            ->where('blood_component_id', '4')
            ->sum('sum');

        $pcrBloodB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '4')
            ->where('blood_component_id', '4')
            ->sum('sum');

        $pcrBloodAB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '5')
            ->where('blood_component_id', '4')
            ->sum('sum');

        $pcrBloodAB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '6')
            ->where('blood_component_id', '4')
            ->sum('sum');

        $pcrBloodO1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '7')
            ->where('blood_component_id', '4')
            ->sum('sum');

        $pcrBloodO2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '8')
            ->where('blood_component_id', '4')
            ->sum('sum');

        // @prc
        $prcBloodA1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '1')
            ->where('blood_component_id', '5')
            ->sum('sum');

        $prcBloodA2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '2')
            ->where('blood_component_id', '5')
            ->sum('sum');

        $prcBloodB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '3')
            ->where('blood_component_id', '5')
            ->sum('sum');

        $prcBloodB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '4')
            ->where('blood_component_id', '5')
            ->sum('sum');

        $prcBloodAB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '5')
            ->where('blood_component_id', '5')
            ->sum('sum');

        $prcBloodAB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '6')
            ->where('blood_component_id', '5')
            ->sum('sum');

        $prcBloodO1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '7')
            ->where('blood_component_id', '5')
            ->sum('sum');

        $prcBloodO2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '8')
            ->where('blood_component_id', '5')
            ->sum('sum');

        // @tc
        $tcBloodA1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '1')
            ->where('blood_component_id', '6')
            ->sum('sum');

        $tcBloodA2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '2')
            ->where('blood_component_id', '6')
            ->sum('sum');

        $tcBloodB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '3')
            ->where('blood_component_id', '6')
            ->sum('sum');

        $tcBloodB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '4')
            ->where('blood_component_id', '6')
            ->sum('sum');

        $tcBloodAB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '5')
            ->where('blood_component_id', '6')
            ->sum('sum');

        $tcBloodAB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '6')
            ->where('blood_component_id', '6')
            ->sum('sum');

        $tcBloodO1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '7')
            ->where('blood_component_id', '6')
            ->sum('sum');

        $tcBloodO2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '8')
            ->where('blood_component_id', '6')
            ->sum('sum');

        // @wb
        $wbBloodA1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '1')
            ->where('blood_component_id', '7')
            ->sum('sum');

        $wbBloodA2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '2')
            ->where('blood_component_id', '7')
            ->sum('sum');

        $wbBloodB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '3')
            ->where('blood_component_id', '7')
            ->sum('sum');

        $wbBloodB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '4')
            ->where('blood_component_id', '7')
            ->sum('sum');

        $wbBloodAB1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '5')
            ->where('blood_component_id', '7')
            ->sum('sum');

        $wbBloodAB2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '6')
            ->where('blood_component_id', '7')
            ->sum('sum');

        $wbBloodO1 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '7')
            ->where('blood_component_id', '7')
            ->sum('sum');

        $wbBloodO2 = BloodStok::with('bloodGroup', 'bloodComponent')
            ->where('blood_group_id', '8')
            ->where('blood_component_id', '7')
            ->sum('sum');

        return view('frontend.blood_donor.information', [
            'title' => 'Informasi Stok Darah',

            // ahf
            'ahfBloodA' => $ahfBloodA1 + $ahfBloodA2,
            'ahfBloodB' => $ahfBloodB1 + $ahfBloodB2,
            'ahfBloodAB' => $ahfBloodAB1 + $ahfBloodAB2,
            'ahfBloodO' => $ahfBloodO1 + $ahfBloodO2,

            // plasma konvalesen
            'plasmaBloodA' => $plasmaBloodA1 + $plasmaBloodA2,
            'plasmaBloodB' => $plasmaBloodB1 + $plasmaBloodB2,
            'plasmaBloodAB' => $plasmaBloodAB1 + $plasmaBloodAB2,
            'plasmaBloodO' => $plasmaBloodO1 + $plasmaBloodO2,

            // ffp
            'ffpBloodA' => $ffpBloodA1 + $ffpBloodA2,
            'ffpBloodB' => $ffpBloodB1 + $ffpBloodB2,
            'ffpBloodAB' => $ffpBloodAB1 + $ffpBloodAB2,
            'ffpBloodO' => $ffpBloodO1 + $ffpBloodO2,

            // pcr
            'pcrBloodA' => $pcrBloodA1 + $pcrBloodA2,
            'pcrBloodB' => $pcrBloodB1 + $pcrBloodB2,
            'pcrBloodAB' => $pcrBloodAB1 + $pcrBloodAB2,
            'pcrBloodO' => $pcrBloodO1 + $pcrBloodO2,

            // prc
            'prcBloodA' => $prcBloodA1 + $prcBloodA2,
            'prcBloodB' => $prcBloodB1 + $prcBloodB2,
            'prcBloodAB' => $prcBloodAB1 + $prcBloodAB2,
            'prcBloodO' => $prcBloodO1 + $prcBloodO2,

            // tc
            'tcBloodA' => $tcBloodA1 + $tcBloodA2,
            'tcBloodB' => $tcBloodB1 + $tcBloodB2,
            'tcBloodAB' => $tcBloodAB1 + $tcBloodAB2,
            'tcBloodO' => $tcBloodO1 + $tcBloodO2,

            // wb
            'wbBloodA' => $wbBloodA1 + $wbBloodA2,
            'wbBloodB' => $wbBloodB1 + $wbBloodB2,
            'wbBloodAB' => $wbBloodAB1 + $wbBloodAB2,
            'wbBloodO' => $wbBloodO1 + $wbBloodO2,
        ]);
    }

    public function schedule()
    {
        return view('frontend.blood_donor.schedule', [
            'title' => 'Jadwal Mobilisasi Donor',
            'event' => Event::with('user')
                ->orderBy('date', 'desc')
                ->paginate(10),
        ]);
    }

    public function flow()
    {
        return view('frontend.blood_donor.flow', [
            'title' => 'Alur Permintaan Darah',
        ]);
    }
}

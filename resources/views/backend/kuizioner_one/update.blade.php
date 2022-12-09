@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>
<div class="col-lg-10">
    <form action="{{ route('one-kuisioner.update', $quiz->id) }}" method="post" enctype="multipart/form-data"
        class="mb-5">
        @csrf
        @method('patch')
        {{-- @foreach ($quiz as $kuis) --}}
        <div class="mb-3">
            {{-- <label for="user_id" class="form-label">User</label> --}}
            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id"
                value="{{ auth()->user()->id }}" placeholder="Masukkan nama pertanyaan">
            @error('user_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 1 --}}
        <div class="mb-3">
            <label for="answer1" class="form-label">1. Apakah anda merasa sehat hari ini?</label>
            <input type="text" class="form-control @error('answer1') is-invalid @enderror" id="answer1" name="answer1"
                value="{{ old('answer1', $quiz->answer1) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 2 --}}
        <div class="mb-3">
            <label for="answer2" class="form-label">2. Apakah anda sedang minum antibiotic?</label>
            <input type="text" class="form-control @error('answer2') is-invalid @enderror" id="answer2" name="answer2"
                value="{{ old('answer2', $quiz->answer2) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer2')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 3 --}}
        <div class="mb-3">
            <label for="answer3" class="form-label">3. Apakah anda sedang minum obat lain untuk infeksi?</label>
            <input type="text" class="form-control @error('answer3') is-invalid @enderror" id="answer3" name="answer3"
                value="{{ old('answer3', $quiz->answer3) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer3')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 4 --}}
        <div class="mb-3">
            <label for="answer4" class="form-label">4. Dalam 48 jam terakhir apakah anda sedang minum aspirin atau obat
                yang mengandung aspirin?</label>
            <input type="text" class="form-control @error('answer4') is-invalid @enderror" id="answer4" name="answer4"
                value="{{ old('answer4', $quiz->answer4) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer4')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 5 --}}
        <div class="mb-3">
            <label for="answer5" class="form-label">5. Dalam 1 minggu terakhir Apakah anda akan mengalami sakit kepala
                dan
                demam bersamaan?</label>
            <input type="text" class="form-control @error('answer5') is-invalid @enderror" id="answer5" name="answer5"
                value="{{ old('answer5', $quiz->answer5) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer5')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 6 --}}
        <div class="mb-3">
            <label for="answer6" class="form-label">6. Dalam 6 minggu terakhir untuk pendonor wanita : apakah anda
                sedang
                hamil? Kehamilan berapa?</label>
            <input type="text" class="form-control @error('answer6') is-invalid @enderror" id="answer6" name="answer6"
                value="{{ old('answer6', $quiz->answer6) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer6')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 7 --}}
        <div class="mb-3">
            <label for="answer7" class="form-label">7. Dalam 8 minggu terakhir apakah anda mendonorkan darah, trombosit
                atau plasma?</label>
            <input type="text" class="form-control @error('answer7') is-invalid @enderror" id="answer7" name="answer7"
                value="{{ old('answer7', $quiz->answer7) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer7')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 8 --}}
        <div class="mb-3">
            <label for="answer8" class="form-label">8. Dalam 8 minggu terakhir apakah anda menerima vaksinasi atau
                suntikan lainnya?</label>
            <input type="text" class="form-control @error('answer8') is-invalid @enderror" id="answer8" name="answer8"
                value="{{ old('answer8', $quiz->answer8) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer8')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 9 --}}
        <div class="mb-3">
            <label for="answer9" class="form-label">9. Dalam 8 minggu terakhir apakah anda pernah kontak dengan orang
                yang menerima vaksinasi smallpox?</label>
            <input type="text" class="form-control @error('answer9') is-invalid @enderror" id="answer9" name="answer9"
                value="{{ old('answer9', $quiz->answer9) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer9')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 10 --}}
        <div class="mb-3">
            <label for="answer10" class="form-label">10. Dalam 16 minggu terakhir apakah anda mendonorkan 2 kantong sel
                darah merah melalui proses apheresis?</label>
            <input type="text" class="form-control @error('answer10') is-invalid @enderror" id="answer10"
                name="answer10" value="{{ old('answer10', $quiz->answer10) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer10')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 11 --}}
        <div class="mb-3">
            <label for="answer11" class="form-label">11. Dalam 12 bulan terakhir apakah anda pernah menerima transfuse
                darah?</label>
            <input type="text" class="form-control @error('answer11') is-invalid @enderror" id="answer11"
                name="answer11" value="{{ old('answer11', $quiz->answer11) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer11')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 12 --}}
        <div class="mb-3">
            <label for="answer12" class="form-label">12. Dalam 12 bulan terakhir apakah anda pernah mendapatkan
                transplantasi, organ, jaringan, atau sumsum tulang?</label>
            <input type="text" class="form-control @error('answer12') is-invalid @enderror" id="answer12"
                name="answer12" value="{{ old('answer12', $quiz->answer12) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer12')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 13 --}}
        <div class="mb-3">
            <label for="answer13" class="form-label">13. Dalam 12 bulan terakhir apakah anda pernah cangkok tulang atau
                kulit?</label>
            <input type="text" class="form-control @error('answer13') is-invalid @enderror" id="answer13"
                name="answer13" value="{{ old('answer13', $quiz->answer13) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer13')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 14 --}}
        <div class="mb-3">
            <label for="answer14" class="form-label">14. Dalam 12 bulan terakhir apakah anda pernah tertusuk jarum
                medis?</label>
            <input type="text" class="form-control @error('answer14') is-invalid @enderror" id="answer14"
                name="answer14" value="{{ old('answer14', $quiz->answer14) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer14')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 15 --}}
        <div class="mb-3">
            <label for="answer15" class="form-label">15. Dalam 12 bulan terakhir apakah anda pernah berhubungan
                seksual dengan orang dengan HIV/AIDS?</label>
            <input type="text" class="form-control @error('answer15') is-invalid @enderror" id="answer15"
                name="answer15" value="{{ old('answer15', $quiz->answer15) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer15')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 16 --}}
        <div class="mb-3">
            <label for="answer16" class="form-label">16. Dalam 12 bulan terakhir apakah anda pernah berhubungan seksual
                denga orang dengan pekerja seks komersial?</label>
            <input type="text" class="form-control @error('answer16') is-invalid @enderror" id="answer16"
                name="answer16" value="{{ old('answer16', $quiz->answer16) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer16')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 17 --}}
        <div class="mb-3">
            <label for="answer17" class="form-label">17. Dalam 12 bulan terakhir apakah anda pernah berhubungan
                seksual dengan orang dengan pengguna narkoba jarum suntik?</label>
            <input type="text" class="form-control @error('answer17') is-invalid @enderror" id="answer17"
                name="answer17" value="{{ old('answer17', $quiz->answer17) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer17')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 18 --}}
        <div class="mb-3">
            <label for="answer18" class="form-label">18. Dalam 12 bulan terakhir apakah anda pernah berhubungan seksual
                dengan orang dengan pengguna konsentrat factor pembekuan?</label>
            <input type="text" class="form-control @error('answer18') is-invalid @enderror" id="answer18"
                name="answer18" value="{{ old('answer18', $quiz->answer18) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer18')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 19 --}}
        <div class="mb-3">
            <label for="answer19" class="form-label">19. Dalam 12 bulan terakhir donor wanita : apakah anda pernah
                berhubungan seksual dengan laki-laki yang biseksual?</label>
            <input type="text" class="form-control @error('answer19') is-invalid @enderror" id="answer19"
                name="answer19" value="{{ old('answer19', $quiz->answer19) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer19')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 20 --}}
        <div class="mb-3">
            <label for="answer20" class="form-label">20. Dalam 12 bulan terakhir apakah anda pernah berhubungan
                seksual dengan penderita hepatitis?</label>
            <input type="text" class="form-control @error('answer20') is-invalid @enderror" id="answer20"
                name="answer20" value="{{ old('answer20', $quiz->answer20) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer20')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 21 --}}
        <div class="mb-3">
            <label for="answer21" class="form-label">21. Dalam 12 bulan terakhir apakah anda tinggal bersama penderita
                hepatitis?</label>
            <input type="text" class="form-control @error('answer21') is-invalid @enderror" id="answer21"
                name="answer21" value="{{ old('answer21', $quiz->answer21) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer21')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 22 --}}
        <div class="mb-3">
            <label for="answer22" class="form-label">22. Dalam 12 bulan terakhir apakah anda memiliki tatto?</label>
            <input type="text" class="form-control @error('answer22') is-invalid @enderror" id="answer22"
                name="answer22" value="{{ old('answer22', $quiz->answer22) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer22')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 23 --}}
        <div class="mb-3">
            <label for="answer23" class="form-label">23. Dalam 12 bulan terakhir apakah anda memiliki tindik telinga
                atau bagian tubuh lainnya?</label>
            <input type="text" class="form-control @error('answer23') is-invalid @enderror" id="answer23"
                name="answer23" value="{{ old('answer23', $quiz->answer23) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer23')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 24 --}}
        <div class="mb-3">
            <label for="answer24" class="form-label">24. Dalam 12 bulan terakhir apakah anda sedang atau pernah
                mendapatkan pengobatan sifilis atau CO (Kencing nanah)?</label>
            <input type="text" class="form-control @error('answer24') is-invalid @enderror" id="answer24"
                name="answer24" value="{{ old('answer24', $quiz->answer24) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer24')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 25 --}}
        <div class="mb-3">
            <label for="answer25" class="form-label">25. Dalam 12 bulan terakhir apakah anda pernah ditahan penjara
                untuk waktu lebih dari 72 jam?</label>
            <input type="text" class="form-control @error('answer25') is-invalid @enderror" id="answer25"
                name="answer25" value="{{ old('answer25', $quiz->answer25) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer25')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 26 --}}
        <div class="mb-3">
            <label for="answer26" class="form-label">26. Dalam waktu 3 tahun Apakah anda pernah berada di luar
                wilayah Indonesia?</label>
            <input type="text" class="form-control @error('answer26') is-invalid @enderror" id="answer26"
                name="answer26" value="{{ old('answer26', $quiz->answer26) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer26')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 27 --}}
        <div class="mb-3">
            <label for="answer27" class="form-label">27. Tahun 1980 hingga 1996 apakah anda tinggal selama 3 bulan atau
                lebih di Inggris?</label>
            <input type="text" class="form-control @error('answer27') is-invalid @enderror" id="answer27"
                name="answer27" value="{{ old('answer27', $quiz->answer27) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer27')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 28 --}}
        <div class="mb-3">
            <label for="answer28" class="form-label">28. Tahun 1980 hingga sekarang apakah tinggal selama 5 tahun atau
                lebih di Eropa?</label>
            <input type="text" class="form-control @error('answer28') is-invalid @enderror" id="answer28"
                name="answer28" value="{{ old('answer28', $quiz->answer28) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer28')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 29 --}}
        <div class="mb-3">
            <label for="answer29" class="form-label">29. Tahun 1980 hingga sekarang apakah anda menerima transfuse darah
                di Inggris?</label>
            <input type="text" class="form-control @error('answer29') is-invalid @enderror" id="answer29"
                name="answer29" value="{{ old('answer29', $quiz->answer29) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer29')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 30 --}}
        <div class="mb-3">
            <label for="answer30" class="form-label">30. Tahun 1977 hingga sekarang apakah anda menerima uang, obat
                atau pembayaran lainnya untuk seks?</label>
            <input type="text" class="form-control @error('answer30') is-invalid @enderror" id="answer30"
                name="answer30" value="{{ old('answer30', $quiz->answer30) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer30')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 31 --}}
        <div class="mb-3">
            <label for="answer31" class="form-label">31. Tahun 1977 hingga sekarang laki-laki: Apakah anda pernah
                berhubungan seksual dengan laki-laki, walaupun seksual?</label>
            <input type="text" class="form-control @error('answer31') is-invalid @enderror" id="answer31"
                name="answer31" value="{{ old('answer31', $quiz->answer31) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer31')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 32 --}}
        <div class="mb-3">
            <label for="answer32" class="form-label">32. Apakah anda pernah mendapatkan hasil positif untuk tes
                HIV/AIDS?</label>
            <input type="text" class="form-control @error('answer32') is-invalid @enderror" id="answer32"
                name="answer32" value="{{ old('answer32', $quiz->answer32) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer32')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 33 --}}
        <div class="mb-3">
            <label for="answer33" class="form-label">33. Apakah anda pernah menggunakan jarum suntik untuk
                obat-obatan, steroid yang tidak diresepkan dokter?</label>
            <input type="text" class="form-control @error('answer33') is-invalid @enderror" id="answer33"
                name="answer33" value="{{ old('answer33', $quiz->answer33) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer33')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 34 --}}
        <div class="mb-3">
            <label for="answer34" class="form-label">34. Apakah anda pernah menggunakan konsentrat factor
                pembekuan?</label>
            <input type="text" class="form-control @error('answer34') is-invalid @enderror" id="answer34"
                name="answer34" value="{{ old('answer34', $quiz->answer34) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer34')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 35 --}}
        <div class="mb-3">
            <label for="answer35" class="form-label">35. Apakah anda pernah menderita hepatitis?</label>
            <input type="text" class="form-control @error('answer35') is-invalid @enderror" id="answer35"
                name="answer35" value="{{ old('answer35', $quiz->answer35) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer35')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 36 --}}
        <div class="mb-3">
            <label for="answer36" class="form-label">36. Apakah anda pernah menderita malaria?</label>
            <input type="text" class="form-control @error('answer36') is-invalid @enderror" id="answer36"
                name="answer36" value="{{ old('answer36', $quiz->answer36) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer36')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 37 --}}
        <div class="mb-3">
            <label for="answer37" class="form-label">37. Apakah anda pernah Menderita kanker termasuk
                leukimia?</label>
            <input type="text" class="form-control @error('answer37') is-invalid @enderror" id="answer37"
                name="answer37" value="{{ old('answer37', $quiz->answer37) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer37')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 38 --}}
        <div class="mb-3">
            <label for="answer38" class="form-label">38. Apakah anda pernah bermasalah dengan jantung dan
                paru-paru?</label>
            <input type="text" class="form-control @error('answer38') is-invalid @enderror" id="answer38"
                name="answer38" value="{{ old('answer38', $quiz->answer38) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer38')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 39 --}}
        <div class="mb-3">
            <label for="answer39" class="form-label">39. Apakah anda pernah menderita pendarahan atau penyakit
                berhubungan dengan darah?</label>
            <input type="text" class="form-control @error('answer39') is-invalid @enderror" id="answer39"
                name="answer39" value="{{ old('answer39', $quiz->answer39) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer39')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 40 --}}
        <div class="mb-3">
            <label for="answer40" class="form-label">40. Apakah anda pernah berhubungan seksual dengan orang yang
                tinggal di Afrika?</label>
            <input type="text" class="form-control @error('answer40') is-invalid @enderror" id="answer40"
                name="answer40" value="{{ old('answer40', $quiz->answer40) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer40')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- 41 --}}
        <div class="mb-3">
            <label for="answer41" class="form-label">41. Apakah anda pernah tinggal di Afrika?</label>
            <input type="text" class="form-control @error('answer41') is-invalid @enderror" id="answer41"
                name="answer41" value="{{ old('answer41', $quiz->answer41) }}" required
                placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer41')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- @endforeach --}}
        {{-- <a href="/one-kuisioner" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a> --}}
        <button type="submit" class="btn btn-primary">Update</button>
        {{--
    </form> --}}
</div>
@endsection
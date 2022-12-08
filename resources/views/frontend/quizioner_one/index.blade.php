@extends('layout.app')

@section('frontend')
<div class="col-md-12 mt-2">
</div>
<section id="hero" class="hero">
    <div class="">
        @if (session()->has('success'))
        <div class="alert alert-success col-md-12" role="alert">
            {{ session('success') }}
        </div>
        @endif

        {{-- session alert confirm for delete this layout all my data --}}
        @if (session()->has('delete'))
        <div class="alert alert-danger col-md-12" role="alert">
            {{ session('delete') }}
        </div>
        @endif

        {{-- session alert confirm for update this layout all my data --}}
        @if (session()->has('update'))
        <div class="alert alert-info col-md-12" role="alert">
            {{ session('update') }}
        </div>
        @endif
    </div>
    <div class="container position-relative">
        {{-- @foreach ($quiz as $data)
        <h1>{{ $data->question }}</h1>
        @endforeach --}}
        <div class="row" data-aos="fade-in">
            <div class="text-lg-start">
                <h4 class="mt-3">Donor Darah</h4>
                <p>Silahkan mengisi Formulir Donor Darah untuk melakukan pendonoran. Pastikan data yang diisi telah
                    benar!</p>
            </div>

            <div class="card">
                <div class="card-header fw-bold p-3">Formulir Donor Darah - Kuesioner Tahap 1</div>
                <div class="card-body container">
                    <form class="container">
                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">Apakah Anda?</label>
                        </div>

                        @foreach ($quiz1 as $kuis)
                        <div class="form-group">
                            <label class="col-md-8">{{ $kuis->id }}. {{ $kuis->question }}</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>

                        </div>
                        @endforeach

                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">Dalam waktu 48 jam terakhir?</label>
                        </div>

                        @foreach ($quiz2 as $kuis2)

                        <div class="form-group">
                            <label class="col-md-8">{{ $kuis2->id }}. {{ $kuis2->question }}</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">Dalam waktu 1 minggu terakhir?</label>
                        </div>

                        @foreach ($quiz3 as $kuiz3)
                        <div class="form-group">
                            <label class="col-md-8">{{ $kuiz3->id }}. {{ $kuiz3->question }}</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">Dalam waktu 6 minggu terakhir?</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-8">6. Untuk donor wanita : Apakah anda sedang hamil?Kehamilan ke
                                berapa?</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                {{-- <input type="text" class="form-control d-inline" style="max-width: 5%;" id=""
                                    value=""> --}}
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">Dalam waktu 8 minggu terakhir?</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-8">7. Apakah anda mendonorkan darah,trombosit/plasma?</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-8">8. Apakah anda menerima vaksinasi/suntikan lainnya?</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-8">9. Apakah anda pernah kontak dengan orang yang menerima vaksinasi
                                smallpox?</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">Dalam waktu 16 minggu terakhir?</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-8">10. Apakah anda mendonorkan 2 kantong sel darah merah melalui proses
                                aferesis?</label>
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-footer text-end">
                    {{-- <a href="form-donor-identitas.html" class="btn btn-danger m-3">Kembali</a> --}}
                    <a href="form-donor-KT2.html" class="btn btn-danger m-3">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
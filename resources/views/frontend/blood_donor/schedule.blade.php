@extends('layout.app')

@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Informasi Stok Darah</h2>
                        <p>Jadwal dan Lokasi Donor Darah.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Donor Darah</li>
                    <li>Jadwal Mobilisasi Donor</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= jadwal-darah Section ======= -->
    <section>
        <div class="container aos-init aos-animate ">
            <div class="row">
                <div class="col-sm-6 p-3">
                    <div class="card p-4" style="border: none;">
                        <div class="card-body text-center">
                            <div id="color-calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-3">
                    <div class="card p-4" style="border: none;">
                        <div class="card-body">
                            <div class="events-display m-5">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- jadwal-stok-darah section -->
</main><!-- End #main -->
<script>
    new Calendar({
            id: '#color-calendar',
            calendarSize: 'large',
            eventsData: [{
                start: '2021-04-15T06:00:00',
                end: '2021-04-15T20:30:00',
                name: 'Event 1',
                url: 'https://www.cssscript.com',
            }, {
                start: '2021-04-16T06:00:00',
                end: '2021-04-16T20:30:00',
                name: 'Event 2',
                url: 'https://www.cssscript.com',
            }, {
                start: '2022-12-16T06:00:00',
                end: '2022-12-17T20:30:00',
                name: 'Event 3',
                url: 'https://www.cssscript.com',
            }, ],
            theme: 'glass',
            primaryColor: '#B93737',
            headerBackgroundColor: '#B93737',
            // weekdayType: 'long-lower',
            dateChanged: (currentDate, events) => {
                const events_display = document.querySelector('.events-display');
                let events_html = '';
                console.log(currentDate, events);
                events.forEach(event => {
                    events_html += `
          <div class="event">
            <div class="event-left">
              <div class="event-title fw-bold">Tempat : ${event.name}</div>
              <div class="event-title fw-bold"> Waktu : ${event.start}</div 
              <a href="${event.url}" target="_blank" class="event-url">${event.url}</a>
            </div>
          </div>
        `
                });
                if (events_html) {
                    events_display.innerHTML = events_html;
                } else {
                    events_display.innerHTML = '<div class="no-events-text">No events on this day :(</div>';
                }
            }
        })
</script>
@endsection
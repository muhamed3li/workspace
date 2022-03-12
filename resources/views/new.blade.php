@extends('layouts.app', ['activePage' => 'new', 'titlePage' => __('New')])

@section('content')
  <div class="content">
    <div class="container-fluid">
  
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('visitor-store') }}" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Visitor') }}</h4>
                <p class="card-category">{{ __('New Visitor') }}</p>
              </div>
              <div class="card-body ">
                @if (session('success'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('success') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-1 col-form-label">{{ __('New Visitor :') }}</label>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input class="form-control" name="name" type="text" placeholder="{{ __('Visito Name') }}" value="" required />
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <select name="category_id" class="form-group bg-success btn" aria-label="Default select example">
                      @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <input class="form-control" name="date"  type="date" placeholder="{{ __('Date') }}" value="" required />
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <input class="form-control" name="time" type="time" placeholder="{{ __('Time') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button id="timer" type="submit" class="btn btn-primary btn-fill" onclick='swal({ title:"Good job!", text: " Visitor Added Successfully", type: "success", buttonsStyling: true, confirmButtonClass: "btn btn-success"})'>{{ __('Add Visitor') }}</button>

              </div>
            </div>
          </form>
        </div>
      </div>
      {{-- <div id="timer">click somewhere</div>
      <div id="timer">Hello</div>
      <button id="start">Start</button> --}}
@include('table')
@endsection

@push('js')
  <script>
    // $(document).ready(function() {
    //   // Javascript method's body can be found in assets/js/demos.js
    //   md.initDashboardPageCharts();
    // });

    // function incTimer() {
    //     var currentMinutes = Math.floor(totalSecs / 60);
    //     var currentSeconds = totalSecs % 60;
    //     if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
    //     if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
    //     totalSecs++;
    //     $("#timer").text(currentMinutes + ":" + currentSeconds);
    //     setTimeout('incTimer()', 1000);
    // }

    totalSecs = 0;

    $(document).ready(function() {
        $("#start").click(function() {
            incTimer();
        });
    });

    // let min = 0;
    // let sec = 0;
    // function myTimer() {
    //   timer.innerHTML = min + " minutes " + sec + " seconds";
    //   sec++;
    //   if (sec >= 60) {
    //     sec = 0;
    //     min++;
    //   }
    // }
    // //Start the timer
    // document.addEventListener('click', () => {
    //   setInterval(myTimer, 1000);
    // }, { once: true });

  </script>
@endpush
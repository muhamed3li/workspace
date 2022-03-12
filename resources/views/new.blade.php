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
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('success') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    {{-- <label class="col-sm-1 col-form-label">{{ __('New Visitor :') }}</label> --}}
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control" name="name" type="text"
                                                placeholder="{{ __('Visito Name') }}" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <input class="form-control" name="count" type="number"
                                                placeholder="{{ __('Count') }}" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <select name="category_id" class="form-group btn btn-primary btn-round "
                                            aria-label="Default select example">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control" name="date" type="date"
                                                placeholder="{{ __('Date') }}" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control" name="time" type="time"
                                                placeholder="{{ __('Time') }}" value="" required />
                                        </div>
                                    </div>

                                    <div class="card-footer ml-auto mr-auto">
                                        <button id="timer" type="submit" class="btn btn-success btn-fill"
                                            onclick='swal({ title:"Good job!", text: " Visitor Added Successfully", type: "success", buttonsStyling: true, confirmButtonClass: "btn btn-success"})'>{{ __('Add Visitor') }}</button>
      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <span id="min">00</span>:<span id="sec">00</span>

            <input id="startButton" type="button" value="Start">
            <input id="pauseButton" type="button" value="Pause">
            <input id="resumeButton" type="button" value="Resume">
            <input id="resetButton" type="button" value="Reset">
            <input id="restartButton" type="button" value="Restart"> --}}

            @include('table')
        @endsection

        @push('js')
            <script>
                totalSecs = 0;

                $(document).ready(function() {
                    $("#start").click(function() {
                        incTimer();
                    });
                });

                // // timer 
                // var Clock = {
                //     totalSeconds: 0,
                //     start: function() {
                //         if (!this.interval) {
                //             var self = this;

                //             function pad(val) {
                //                 return val > 9 ? val : "0" + val;
                //             }
                //             this.interval = setInterval(function() {
                //                 self.totalSeconds += 1;

                //                 document.getElementById("min").innerHTML = pad(Math.floor(self.totalSeconds / 60 %
                //                     60));
                //                 document.getElementById("sec").innerHTML = pad(parseInt(self.totalSeconds % 60));
                //             }, 1000);
                //         }
                //     },

                //     reset: function() {
                //         Clock.totalSeconds = null;
                //         clearInterval(this.interval);
                //         document.getElementById("min").innerHTML = "00";
                //         document.getElementById("sec").innerHTML = "00";
                //         delete this.interval;
                //     },
                //     pause: function() {
                //         clearInterval(this.interval);
                //         delete this.interval;
                //     },

                //     resume: function() {
                //         this.start();
                //     },

                //     restart: function() {
                //         this.reset();
                //         Clock.start();
                //     }
                // };
                // document.getElementById("startButton").addEventListener("click", function() {
                //     Clock.start();
                // });
                // document.getElementById("pauseButton").addEventListener("click", function() {
                //     Clock.pause();
                // });
                // document.getElementById("resumeButton").addEventListener("click", function() {
                //     Clock.resume();
                // });
                // document.getElementById("resetButton").addEventListener("click", function() {
                //     Clock.reset();
                // });
                // document.getElementById("restartButton").addEventListener("click", function() {
                //     Clock.restart();
                // });
            </script>
        @endpush

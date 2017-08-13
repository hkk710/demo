<link rel="stylesheet" href="{{ asset('css/auditorium.css') }}">
@php
    $today = Carbon\Carbon::now();
@endphp
@for ($i=0; $i < 13; $i++)
    @if ($i >= $today->month)
        <div class="c-main">
            @if ($i == 1 && $today->month <= 1)
                <div class="month">
                    <div class="text-center">
                        January
                    </div>
                    <div class="c-month">
                        @for ($c=1; $c <= 31; $c++)
                            <div class="day">
                                @foreach (App\Auditorium::all() as $auditoria)
                                    @if ($auditoria->date == ($today->year . '-' . $i . '-' . $c))
                                        <div class=""style="">

                                        </div>{{ $c }}

                                    @else
                                        
                                    @endif
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>
            @endif
            @if ($i == 2 && $today->month <= 2)
                <div class="month">
                    <div class="text-center">
                        February
                    </div>
                    <div class="c-month">
                        @if ($today->year % 4 == 0)
                            @for ($c=1; $c < 29; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        @else
                            @for ($c=1; $c < 28; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>
            @endif
                @if ($i == 3 && $today->month <= 3)
                    <div class="month">
                        <div class="text-center">
                            March
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 31; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 4 && $today->month <= 4)
                    <div class="month">
                        <div class="text-center">
                            April
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 30; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 5 && $today->month <= 5)
                    <div class="month">
                        <div class="text-center">
                            May
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 31; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 6 && $today->month <= 6)
                    <div class="month">
                        <div class="text-center">
                            June
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 30; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 7 && $today->month <= 7)
                    <div class="month">
                        <div class="text-center">
                            July
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 31; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 8 && $today->month <= 8)
                    <div class="month">
                        <div class="text-center">
                            August
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 31; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 9 && $today->month <= 9)
                    <div class="month">
                        <div class="text-center">
                            September
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 30; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 10 && $today->month <= 10)
                    <div class="month">
                        <div class="text-center">
                            October
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 31; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 11 && $today->month <= 11)
                    <div class="month">
                        <div class="text-center">
                            November
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 30; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
                @if ($i == 12 && $today->month <= 12)
                    <div class="month">
                        <div class="text-center">
                            December
                        </div>
                        <div class="c-month">
                            @for ($c=1; $c <= 31; $c++)
                                <div class="day">
                                    {{ $c }}
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif
            @if ($i == 12)
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            @endif
        </div>
    @endif
@endfor
<script>
    var slideIndex = {{ $today->month }};
    showSlides(slideIndex);
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("month");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }
</script>

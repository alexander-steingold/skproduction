<!-- Start -->
<section class="relative md:py-20 py-16" id="about">
    <div class="container mx-auto">
        <div class="text-center">
            <h6 class="text-orange-600 text-xl font-medium uppercase mb-2">
                אולפן וירטואלי בפעולה
            </h6>
            <h3 class="mb-2 md:text-2xl text-2xl font-medium dark:text-white">
                מספר דוגמאות של אולפן וירטואלי
            </h3>
        </div>


        </canvas>
        <div class="grid grid-cols-3 gap-1 mt-8">
            @for($i=1; $i <=9; $i++)
                <div>
                    <video style="width: 100%; height: 100%" controls preload="auto">
                        <source src="{{url("theme/src/assets/videos/studio/{$i}.mp4")}}" type="video/mp4">
                    </video>
                </div>
            @endfor
        </div>

        {{--        <div class="grid grid-cols-3 gap-1 mt-8">--}}
        {{--            @foreach ($videos as $video)--}}
        {{--                <div>--}}
        {{--                    --}}{{--                    <iframe class="youtube-video" src="https://www.youtube.com/embed/{{ $video }}?controls=0"--}}
        {{--                    --}}{{--                            frameborder="0"--}}
        {{--                    --}}{{--                            allow="accelerometer; autoplay; modestbranding; encrypted-media; gyroscope; picture-in-picture"--}}
        {{--                    --}}{{--                            allowfullscreen>--}}
        {{--                    --}}{{--                    </iframe>--}}

        {{--                    <iframe class="youtube-video"--}}
        {{--                            src="https://www.youtube.com/embed/{{ $video }}?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1"></iframe>--}}
        {{--                </div>--}}
        {{--            @endforeach--}}

        {{--        </div>--}}
    </div><!--end container-->
</section><!--end section-->
<!-- End -->
<!-- Hero End -->


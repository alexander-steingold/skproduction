<!-- Start -->
<section class="relative md:py-20 py-16 hover:bg-black  dark:bg-black" id="tools">
    <div class="container mx-auto">
        <div class="text-center">
            <h6 class="text-orange-600 text-xl font-medium uppercase mb-2">
                הציוד באולפן
            </h6>
            <h3 class="mb-2 md:text-2xl text-2xl font-medium dark:text-white">
                ציוד מקצועי ללא פשרות...
            </h3>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 mt-8">
            <div
                class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div
                    class="relative flex items-center bg-white overflow-hidden"

                >
                    <img
                        class="rounded-t-lg "
                        src="{{ asset('theme/src/assets/images/tools/camera.jpg') }}"
                        alt=""/>

                </div>
                <div class="p-3">
                    <h5
                        class="mb-2 text-center text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        מצלמות
                    </h5>
                </div>
            </div>
            <div
                class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div
                    class="relative flex items-center bg-white overflow-hidden"

                >
                    <img
                        class="rounded-t-lg "
                        src="{{ asset('theme/src/assets/images/tools/telepromter.jpg') }}"
                        alt=""/>

                </div>
                <div class="p-3">
                    <h5
                        class="mb-2 text-center text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        טלפרומפטר
                    </h5>
                </div>
            </div>
            <div
                class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div
                    class="flex justify-center bg-white overflow-hidden text-center"
                >
                    <img
                        class="rounded-t-lg"
                        src="{{ asset('theme/src/assets/images/tools/light_1.jpg') }}"
                        alt=""/>
                </div>
                <div class="p-3">
                    <h5
                        class="mb-2 text-center text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        תאורה
                    </h5>
                </div>
            </div>
            <div
                class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div
                    class="flex justify-center bg-white overflow-hidden text-center"
                >
                    <img
                        class="rounded-t-lg"
                        src="{{ asset('theme/src/assets/images/tools/microphone.jpg') }}"
                        alt=""/>
                </div>
                <div class="p-3">
                    <h5
                        class="mb-2 text-center text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        סאונד
                    </h5>
                </div>
            </div>
        </div><!--end grid-->
        <div class="relative text-center mt-10">
            <a href="{{ route('equipment') }}"
               class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md">
                ראו את כל הציודה הקיים באולפן
            </a>
        </div>
    </div>

</section>

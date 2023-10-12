<!-- start -->
<section class="relative md:py-20 py-16" id="pricing">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-orange-600 text-xl font-medium uppercase mb-2">
                המחירים שלנו
            </h6>
            <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">
                מחירים הוגנים ללא תחרות
            </h3>

            <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">
                נכון להיום ולזמן מוגבל, אנו פועלים במתכון של מחירי היכרות עבור שירותינו.
                על מנת לתת אפשרות גם לעסקים קטנים ולקוחות פרטיים להינות מטכנולוגיות מתקדמות של הפקת וידאו פרסומי
                ושיווקי
            </p>
        </div><!--end grid-->

        <div class="flex flex-wrap">
            <div class="flex justify-center text-slate-400 text-xl text-center dark:text-white mt-4"><span
                    class="text-orange-600">*</span>
                לקבלת עלויות ומידע נוסף עבור שידורי אולפנים וירטואליים, קורסים דיגיטליים וסרטוני הדרכה, פרסומות
                וידאו,
                קליפים מוזיקליים וצילומי חוץ - יש
                לפנות אלינו טלפונית:
                {{ config('app.contact_phone') }}
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-0 md:px-3 mt-8">
                <div
                    class="flex flex-col pt-8 pb-8 bg-zinc-50 hover:bg-white dark:bg-gray-800 dark:hover:bg-black rounded-md shadow shadow-slate-200 dark:shadow-slate-700 transition duration-500">
                    <div class="px-8 pb-8">
                        <h3 class="mb-6 text-xl md:text-2xl text-center font-medium dark:text-white">
                            השכרת אולפן לשעתיים
                        </h3>
                        <div class="flex justify-center mb-6 items-end ">
                            <div class=" dark:text-white/70 ">
                                <span class="text-5xl font-semibold dark:text-white ">350</span>
                                <span class="relative  text-3xl">₪</span>
                            </div>
                            <div class=" dark:text-white/70 mx-3">
                                <span class="text-2xl font-medium text-red-500 line-through">550</span>
                                <span class="relative  text-xl">₪</span>
                            </div>
                        </div>

                        <p class="mb-6 text-slate-430 dark:text-slate-300 text-center">
                            עד 2 שעות בלבד</p>
                        <x-partials.order_btn/>
                    </div>
                    <div class="border-b border-slate-200 dark:border-slate-700"></div>
                    <h3 class="mb-2 mt-4 px-8 text-xl md:text-xl  font-medium dark:text-white">
                        ציוד מקצועי
                    </h3>
                    <ul class="self-start px-8 pt-2 w-full">
                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>מצלמת וידאו כולל מוניטור HDR</span>
                            <span>250 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span> טלפרומפטר 20" כולל מפעיל</span>
                            <span>200 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>מוניטור HDR למצלמה</span>--}}
                        {{--                            <span>200 ₪ </span>--}}
                        {{--                        </li>--}}

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>מיקרופון אלחוטי עם מקליט אודיו</span>
                            <span>150 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>סט חצובות מצלמה ותאורה</span>--}}
                        {{--                            <span>150 ₪ </span>--}}
                        {{--                        </li>--}}

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>סט רפלקטורים וחוסמי אור</span>--}}
                        {{--                            <span>150 ₪ </span>--}}
                        {{--                        </li>--}}

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>כל פריט מרשימת ציוד היקפי</span>
                            <span>100 ₪ </span>
                        </li>
                    </ul>
                    <div class="border-b border-slate-200 mt-4 dark:border-slate-700"></div>
                    <h3 class="mb-2 mt-4 px-8 text-xl md:text-xl  font-medium dark:text-white">
                        ליווי מקצועי
                    </h3>
                    <ul class="self-start px-8 pt-2 w-full">
                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>צלם למשך כל ההשכרה</span>
                            <span>250 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>עוזר טכני</span>
                            <span>150 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>מפעיל טלפרומפטר</span>--}}
                        {{--                            <span>150 ₪ </span>--}}
                        {{--                        </li>--}}


                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span> מאפרת למשתתף 1</span>
                            <span>200 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>גיבוי חומרים שצולמו (עד 90 יום)</span>
                            <span>100 ₪ </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-0 md:px-3 mt-8">
                <div
                    class="flex flex-col pt-8 pb-8 bg-zinc-50 hover:bg-white dark:bg-gray-800 dark:hover:bg-black rounded-md shadow shadow-slate-200 dark:shadow-slate-700 transition duration-500">
                    <div class="px-8 pb-8">
                        <h3 class="mb-6 text-xl md:text-2xl text-center font-medium dark:text-white">
                            השכרת אולפן לחצי יום
                        </h3>
                        <div class="flex justify-center mb-6 items-end ">
                            <div class=" dark:text-white/70 ">
                                <span class="text-5xl font-semibold dark:text-white ">650</span>
                                <span class="relative text-3xl">₪</span>
                            </div>
                            <div class=" dark:text-white/70 mx-3">
                                <span class="text-2xl font-medium dark:text-red-500 line-through">1050</span>
                                <span class="relative  text-xl">₪</span>
                            </div>
                        </div>

                        <p class="mb-6 text-slate-430 dark:text-slate-300 text-center">
                            עד 4 שעות בלבד</p>
                        <x-partials.order_btn/>
                    </div>
                    <div class="border-b border-slate-200 dark:border-slate-700"></div>
                    <h3 class="mb-2 mt-4 px-8 text-xl md:text-xl  font-medium dark:text-white">
                        ציוד מקצועי
                    </h3>
                    <ul class="self-start px-8 pt-2 w-full">
                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>מצלמת וידאו כולל מוניטור HDR</span>
                            <span>250 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span> טלפרומפטר 20" כולל מפעיל</span>
                            <span>200 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>מוניטור HDR למצלמה</span>--}}
                        {{--                            <span>250 ₪ </span>--}}
                        {{--                        </li>--}}

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>מיקרופון אלחוטי עם מקליט אודיו</span>
                            <span>150 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>סט חצובות מצלמה ותאורה</span>--}}
                        {{--                            <span>200 ₪ </span>--}}
                        {{--                        </li>--}}

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>סט רפלקטורים וחוסמי אור</span>--}}
                        {{--                            <span>200 ₪ </span>--}}
                        {{--                        </li>--}}

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>כל פריט מרשימת ציוד היקפי</span>
                            <span>150 ₪ </span>
                        </li>
                    </ul>
                    <div class="border-b border-slate-200 mt-4 dark:border-slate-700"></div>
                    <h3 class="mb-2 mt-4 px-8 text-xl md:text-xl  font-medium dark:text-white">
                        ליווי מקצועי
                    </h3>
                    <ul class="self-start px-8 pt-2 w-full">
                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>צלם למשך כל ההשכרה</span>
                            <span>450 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>עוזר טכני</span>
                            <span>150 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>מפעיל טלפרומפטר</span>--}}
                        {{--                            <span>200 ₪ </span>--}}
                        {{--                        </li>--}}


                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span> מאפרת למשתתף 1</span>
                            <span>200 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>גיבוי חומרים שצולמו (עד 90 יום)</span>
                            <span>100 ₪ </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-0 md:px-3 mt-8">
                <div
                    class="flex flex-col pt-8 pb-8 bg-zinc-50 hover:bg-white dark:bg-gray-800 dark:hover:bg-black rounded-md shadow shadow-slate-200 dark:shadow-slate-700 transition duration-500">
                    <div class="px-8 pb-8">
                        <h3 class="mb-6 text- md:text-2xl text-center font-medium dark:text-white">
                            השכרת אולפן ליום מלא
                        </h3>
                        <div class="flex justify-center mb-6 items-end ">
                            <div class=" dark:text-white/70 ">
                                <span class="text-5xl font-semibold dark:text-white ">950</span>
                                <span class="relative text-3xl">₪</span>
                            </div>
                            <div class=" dark:text-white/70 mx-3">
                                <span class="text-2xl font-medium dark:text-red-500 line-through">1550</span>
                                <span class="relative  text-xl">₪</span>
                            </div>
                        </div>

                        <p class="mb-6 text-slate-430 dark:text-slate-300 text-center">
                            עד 8 שעות בלבד</p>
                        <x-partials.order_btn/>
                    </div>
                    <div class="border-b border-slate-200 dark:border-slate-700"></div>
                    <h3 class="mb-2 mt-4 px-8 text-xl md:text-xl  font-medium dark:text-white">
                        ציוד מקצועי
                    </h3>
                    <ul class="self-start px-8 pt-2 w-full">
                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>מצלמת וידאו כולל מוניטור HDR</span>
                            <span>350 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span> טלפרומפטר 20" כולל מפעיל</span>
                            <span>300 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>מוניטור HDR למצלמה</span>--}}
                        {{--                            <span>300 ₪ </span>--}}
                        {{--                        </li>--}}

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>מיקרופון אלחוטי עם מקליט אודיו</span>
                            <span>150 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>סט חצובות מצלמה ותאורה</span>--}}
                        {{--                            <span>250 ₪ </span>--}}
                        {{--                        </li>--}}

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>סט רפלקטורים וחוסמי אור</span>--}}
                        {{--                            <span>250 ₪ </span>--}}
                        {{--                        </li>--}}

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>כל פריט מרשימת ציוד היקפי</span>
                            <span>100 ₪ </span>
                        </li>
                    </ul>
                    <div class="border-b border-slate-200 mt-4 dark:border-slate-700"></div>
                    <h3 class="mb-2 mt-4 px-8 text-xl md:text-xl  font-medium dark:text-white">
                        ליווי מקצועי
                    </h3>
                    <ul class="self-start px-8 pt-2 w-full">
                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>צלם למשך כל ההשכרה</span>
                            <span>650 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>עוזר טכני</span>
                            <span>250 ₪ </span>
                        </li>

                        {{--                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">--}}
                        {{--                            <span>מפעיל טלפרומפטר</span>--}}
                        {{--                            <span>250 ₪ </span>--}}
                        {{--                        </li>--}}


                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span> מאפרת למשתתף 1</span>
                            <span>200 ₪ </span>
                        </li>

                        <li class="flex w-full items-center justify-between my-1 text-slate-400 dark:text-slate-300">
                            <span>גיבוי חומרים שצולמו (עד 90 יום)</span>
                            <span>100 ₪ </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex text-lg justify-center items-top mt-8 text-slate-400 dark:text-slate-300">
            <i class="uil uil-check-circle text-lg text-green-600 me-1"></i>
            <span class="text-center"> כל האופציות כוללים: מסך ירוק \ לבן \ שחור, כל סוגי תאורה, סט רפלקטורים וחוסמי אור, סט חצובות מצלמה ותאורה, עמדת איפור,  חדר הלבשה \ המתנה, מטבחון עם מכונת קפה ושתייה, חדרי שירותים, מקלחת ומרחב מוגן, מרפסת פתוחה </span>
        </div>
        <div class="flex justify-center text-xl text-slate-400 dark:text-slate-300 mt-4"><span
                class="text-orange-600">*</span>
            המחירים לא כוללים מע"מ
        </div>
        <!--end container-->
</section><!--end section-->
<!-- End -->

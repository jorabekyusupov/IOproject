<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getQuestion(Request $request)
    {
        $data = $request->validate([
            'studentType' => 'required',
        ]);

        $questions = [];
        $questions[0] = [
            [
                'id' => 0,
                'answer' => 'Savolingizni kiriting',
            ],
            [
                'id' => 1,
                'answer' => 'Kompyuterimda Nosoz ovoz chiqyabdi',
            ],
            [
                'id' => 2,
                'answer' => 'Kompyuterim ekraniga tasvir chiqmayabdi',
            ],
            [
                'id' => 3,
                'answer' => 'kompyuterim dasturiy taminotiga kirib bo\'lmayabdi',
            ],
            [
                'id' => 4,
                'answer' => 'kompuyterim ishlagan vaqtida ochib qolayabdi',
            ],
            [
                'id' => 5,
                'answer' => 'Kompyuterimdan multimedia tovush chiqmayabdi',
            ],
            [
                'id' => 6,
                'answer' => 'Kompyuterimda Wifi tarmoqlari bilan aloqa yo\'q',
            ],
            [
                'id' => 7,
                'answer' => 'Kompyuterim bir necha daqiqada ochib qolayabdi',
            ],
            [
                'id' => 8,
                'answer' => 'Ekranimda Aloqa mavjud emas degan xabar chiqyabdi',
            ]


        ];
        $questions[1] = [
            [
                'id' => 0,
                'answer' => 'Savolingizni kiriting',
            ],
            [
                'id' => 1,
                'answer' => 'Divagetlimdan nosoz ovoz chiqyabdi',
            ],
            [
                'id' => 2,
                'answer' => 'Avtomobilim yo\'l davomida ochib qoldi',
            ],
            [
                'id' => 3,
                'answer' => 'Avtomobilim yo\'l davomida pasgi qismida nosoz ovoz chiqyabdi',
            ],
            [
                'id' => 4,
                'answer' => 'Avtomobilim yoqlig\'i sarfi oshib ketdi',
            ],
            [
                'id' => 5,
                'answer' => 'Uzatgich qisimim ishlamayabdi',
            ],
            [
                'id' => 6,
                'answer' => 'Avtomobilim judayam kop chayqalyabdi',
            ],
            [
                'id' => 7,
                'answer' => 'Avtomobilim yo\'l davomida turli nojoya hidlar kiryabdi',
            ],
            [
                'id' => 8,
                'answer' => 'Avtomobilim yo\'l davomida benzin korsatgichim ishlamayabdi',
            ]


        ];
        $questions[2] = [
            [
                'id' => 0,
                'answer' => 'Savolingizni kiriting',
            ],
            [
                'id' => 1,
                'answer' => 'Divagetlimdan nosoz ovoz chiqyabdi',
            ],
            [
                'id' => 2,
                'answer' => 'Avtomobilim yo\'l davomida ochib qoldi',
            ],
            [
                'id' => 3,
                'answer' => 'Avtomobilim yo\'l davomida pasgi qismida nosoz ovoz chiqyabdi',
            ],
            [
                'id' => 4,
                'answer' => 'Avtomobilim yoqlig\'i sarfi oshib ketdi',
            ],
            [
                'id' => 5,
                'answer' => 'Uzatgich qisimim ishlamayabdi',
            ],
            [
                'id' => 6,
                'answer' => 'Avtomobilim judayam kop chayqalyabdi',
            ],
            [
                'id' => 7,
                'answer' => 'Avtomobilim yo\'l davomida turli nojoya hidlar kiryabdi',
            ],
            [
                'id' => 8,
                'answer' => 'Avtomobilim yo\'l davomida benzin korsatgichim ishlamayabdi',
            ]


        ];



        return response()->json([
            'questions' => $questions[$data['studentType']],
        ]);
    }

    public function getAnswer(Request $request)
    {
        $data = $request->validate([
            'questionId' => 'required',
            'studentType' => 'required',
        ]);
        $question_id = $data['questionId'];
        $student_type = $data['studentType'];


        $questions = [];
        $questions[0] = [
            1 => [
                'id' => 1,
                'question' => 'Ekrangizga tasvirchiqyabdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            2 => [
                'id' => 1,
                'question' => 'Grafik Karta mavjudmi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            3 => [
                'id' => 1,
                'question' => 'Ekrangizga tasvirchiqyabdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            4 => [
                'id' => 1,
                'question' => 'Ekrangizga tasvirchiqyabdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

            5 => [
                'id' => 1,
                'question' => 'Sizning kompyuteringizda boshqa Wifi, bluetoth yordamchi qurilmar bilan aloqa bormi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

            6 => [
                'id' => 1,
                'question' => 'Kompyuteringizda boshqa aloqa qurilmalari bilan aloqa bormi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            7 => [
                'id' => 1,
                'question' => 'operatsion tizim ishga tushyabdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            8 => [
                'id' => 1,
                'question' => 'kompyuteringiz ishga tushyabdimi?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

        ];
        $questions[1] = [
            1 => [
                'id' => 1,
                'question' => 'Divgateliz o\'t olyabdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            2 => [
                'id' => 1,
                'question' => 'Mator qismida tutun chiqdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            3 => [
                'id' => 1,
                'question' => 'Tormiz tizimi to\'g\'ri ishlaybdimi',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            4 => [
                'id' => 1,
                'question' => 'Avtomobilningiz turli siltanishlarga ochirayabdimi',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

            5 => [
                'id' => 1,
                'question' => 'Avtomobilningiz  ot olyabdimi',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

            6 => [
                'id' => 1,
                'question' => 'Avtomobilingiz rul qisimi nosozliklarga uchrayabsizmi?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            7 => [
                'id' => 1,
                'question' => 'Avtomobilingiz kerakli tezlikga chiqaolyabdimi?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            8 => [
                'id' => 1,
                'question' => 'Avtomobilingiz ochib qolyabdimi?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

        ];
        $questions[2] = [
            1 => [
                'id' => 1,
                'question' => 'Divgateliz o\'t olyabdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            2 => [
                'id' => 1,
                'question' => 'Mator qismida tutun chiqdimi ?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            3 => [
                'id' => 1,
                'question' => 'Tormiz tizimi to\'g\'ri ishlaybdimi',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            4 => [
                'id' => 1,
                'question' => 'Avtomobilningiz turli siltanishlarga ochirayabdimi',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

            5 => [
                'id' => 1,
                'question' => 'Avtomobilningiz  ot olyabdimi',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

            6 => [
                'id' => 1,
                'question' => 'Avtomobilingiz rul qisimi nosozliklarga uchrayabsizmi?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            7 => [
                'id' => 1,
                'question' => 'Avtomobilingiz kerakli tezlikga chiqaolyabdimi?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],
            8 => [
                'id' => 1,
                'question' => 'Avtomobilingiz ochib qolyabdimi?',
                'answers' => [
                    [
                        'id' => 0,
                        'answer' => 'Ha',
                    ],
                    [
                        'id' => 1,
                        'answer' => 'Yo\'q',
                    ],
                ],
            ],

        ];

        return response()->json([
            'answers' => $questions[$student_type][$question_id],
        ]);
    }

    public function getMainAnswer(Request $request)
    {
        $data = $request->validate([
            'questionId' => 'required',
            'studentType' => 'required',
            'parentQuestionId' => 'required',
        ]);
        $question_id = $data['questionId'];
        $student_type = $data['studentType'];
        $parent_question_id = $data['parentQuestionId'];
        $questions = [];
        $questions[0] = [
            1 => [
                1 => [
                    'Iltmos kompyuteringizni qayta ishga tushiring va qayta urinib ko\'ring yoki Service Centerga olib kelishingiz mumkin'
                ],
                0 => [
                    'Kompyuteringiz tezkor xotirasi nosoz yoki mavjud emas'
                ],
            ],
            2 => [
                1 => [
                    'kompyuteringiz Ona platasi nosoz'
                ],
                0 => [
                    'Kompyuteringiz grafik kartasi nosoz '
                ],
            ],
            3 => [
                1 => [
                    'Iltmos kompyuteringizni qayta ishga tushiring va qayta urinib ko\'ring yoki Service Centerga olib kelishingiz mumkin'
                ],
                0 => [
                    'Kompyuterning tizim o\'rnatilgan diski nosoz'
                ],
            ],
            4 => [
                1 => [
                    'Kompyuteringiz tezkor xotirasi nosoz yoki mavjud emas'
                ],
                0 => [
                    'Kompyuteringiz Markaziy prosessori nosoz'
                ],
            ],
            5 => [
                1 => [
                    'Kompyuteringiz yordamchi quruilmalarning dasturlari mavjud emas'
                ],
                0 => [
                    'Kompyuteringiz ovoz chiqargich simlari nosoz yoki mavjud emas'
                ],
            ],
            6 => [
                1 => [
                    'Kompyuteringiz tarmoq dasturlari nosoz yoki mavjud emas'
                ],
                0 => [
                    'Wifi yordamchi qurilmangizni qayta ishga tushiring agar ishga tushmagan bo\'lsa Service Centerga olib kelishingiz mumkin'
                ],
            ],
            7 => [
                1 => [
                    'Kompyuteringiz operatsion tizimi nosoz yoki mavjud emas'
                ],
                0 => [
                    'Markaziy prosessori nosoz '
                ],
            ],
            8 => [
                1 => [
                    'Kompyuteringizga tok yetkazib beruvchi qurilma nosoz'
                ],
                0 => [
                    'Monitoringiz nosoz yoki simlari nosoz'
                ],
            ],

        ];
        $questions[1] = [
            1 => [
                1 => [
                    'Perdaxranitel nosoz'
                ],
                0 => [
                    'Divagtel moyi muddati o\'tgan'
                ],
            ],
            2 => [
                1 => [
                    'Yoqilg\'ingiz tugab qolgan'
                ],
                0 => [
                    'Avtomobil Antifriz suyuqligi kamaygan'
                ],
            ],
            3 => [
                1 => [
                    'Pachilnik to\'kilib ketgan'
                ],
                0 => [
                    'Kalodka yemirilgan'
                ],
            ],
            4 => [
                1 => [
                    'Avtomobil sinov muddatida chiqmagan'
                ],
                0 => [
                    'Zaslonka qismi tolib qolgab'
                ],
            ],
            5 => [
                1 => [
                    'Uzatma qutsi shestrnalari shikastlangan'
                ],
                0 => [
                    'Avtomobil Akkumlaytori ishdan chiqqan'
                ],
            ],
            6 => [
                1 => [
                    'Injektor nosoz'
                ],
                0 => [
                    'Stablizator ishlamaybdi'
                ],
            ],
            7 => [
                1 => [
                    'Havo Haydagich qismida turli qisqa tutashish mavjud bolishi mumkin'
                ],
                0 => [
                    'Hovo filteri nosoz'
                ],
            ],
            8 => [
                1 => [
                    'Avtomobil karobka qisimi nosoz'
                ],
                0 => [
                    'Avtomobilingiz Benza nasos nosoz'
                ],
            ],


        ];
        $questions[3] = [
            1 => [
                1 => [
                    'Perdaxranitel nosoz'
                ],
                0 => [
                    'Divagtel moyi muddati o\'tgan'
                ],
            ],
            2 => [
                1 => [
                    'Yoqilg\'ingiz tugab qolgan'
                ],
                0 => [
                    'Avtomobil Antifriz suyuqligi kamaygan'
                ],
            ],
            3 => [
                1 => [
                    'Pachilnik to\'kilib ketgan'
                ],
                0 => [
                    'Kalodka yemirilgan'
                ],
            ],
            4 => [
                1 => [
                    'Avtomobil sinov muddatida chiqmagan'
                ],
                0 => [
                    'Zaslonka qismi tolib qolgab'
                ],
            ],
            5 => [
                1 => [
                    'Uzatma qutsi shestrnalari shikastlangan'
                ],
                0 => [
                    'Avtomobil Akkumlaytori ishdan chiqqan'
                ],
            ],
            6 => [
                1 => [
                    'Injektor nosoz'
                ],
                0 => [
                    'Stablizator ishlamaybdi'
                ],
            ],
            7 => [
                1 => [
                    'Havo Haydagich qismida turli qisqa tutashish mavjud bolishi mumkin'
                ],
                0 => [
                    'Hovo filteri nosoz'
                ],
            ],
            8 => [
                1 => [
                    'Avtomobil karobka qisimi nosoz'
                ],
                0 => [
                    'Avtomobilingiz Benza nasos nosoz'
                ],
            ],


        ];

        return response()->json([
            'answer' => $questions[$student_type][$parent_question_id][$question_id]
        ]);

    }

}

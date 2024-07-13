<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            [
                "id" => "11",
                "name" => "Aceh",
                "lat" => "4.695135",
                "lng" => "96.7493993",
                "google_place_id" => "ChIJvcR8UN-bOTARYMogsoCdAwE",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "12",
                "name" => "Sumatera Utara",
                "lat" => "2.1153547",
                "lng" => "99.5450974",
                "google_place_id" => "ChIJhxxy61r51y8RC8vXCYE-p6w",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "13",
                "name" => "Sumatera Barat",
                "lat" => "-0.7399397",
                "lng" => "100.8000051",
                "google_place_id" => "ChIJRUJ08Ey51C8RVTvVdblRsXA",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "14",
                "name" => "Riau",
                "lat" => "0.2933469",
                "lng" => "101.7068294",
                "google_place_id" => "ChIJdz6xGVhXJy4Rsb21bJQCb4M",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "15",
                "name" => "Jambi",
                "lat" => "-1.6101229",
                "lng" => "103.6131203",
                "google_place_id" => "ChIJO83is5qIJS4RDdmyCseZWtE",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "16",
                "name" => "Sumatera Selatan",
                "lat" => "-3.3194374",
                "lng" => "103.914399",
                "google_place_id" => "ChIJLeo1PXWLEC4Rz8QB4gGB_Bg",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "17",
                "name" => "Bengkulu",
                "lat" => "-3.7928451",
                "lng" => "102.2607641",
                "google_place_id" => "ChIJeZLjNx6wNi4R6qaQ53a1eaA",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "18",
                "name" => "Lampung",
                "lat" => "-4.5585849",
                "lng" => "105.4068079",
                "google_place_id" => "ChIJpyKsUwF2Oy4RmrCJX8dYO48",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "19",
                "name" => "Kepulauan Bangka Belitung",
                "lat" => "-2.7410513",
                "lng" => "106.4405872",
                "google_place_id" => "ChIJizmlLUMWFy4RuSOEsf04fhI",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "21",
                "name" => "Kepulauan Riau",
                "lat" => "3.9456514",
                "lng" => "108.1428669",
                "google_place_id" => "ChIJAQuH1E1l2TERvCSFiXW1RnI",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "31",
                "name" => "DKI Jakarta",
                "lat" => "-6.223592",
                "lng" => "106.7317914",
                "google_place_id" => "ChIJxfRFTqzwaS4R9jhKTRFByAQ",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "32",
                "name" => "Jawa Barat",
                "lat" => "-7.090911",
                "lng" => "107.668887",
                "google_place_id" => "ChIJf0dSgjnmaC4Rfp2O_FSkGLw",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "33",
                "name" => "Jawa Tengah",
                "lat" => "-7.150975",
                "lng" => "110.1402594",
                "google_place_id" => "ChIJ3RjVnJt1ZS4RRrztj53Rd8M",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "34",
                "name" => "Daerah Istimewa Yogyakarta",
                "lat" => "-7.8753849",
                "lng" => "110.4262088",
                "google_place_id" => "ChIJxWtbvYdXei4R8LPIyrKSG20",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "35",
                "name" => "Jawa Timur",
                "lat" => "-7.5360639",
                "lng" => "112.2384017",
                "google_place_id" => "ChIJxbXun_eToy0RULh8yvsLAwE",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "36",
                "name" => "Banten",
                "lat" => "-6.4058172",
                "lng" => "106.0640179",
                "google_place_id" => "ChIJmbkNxNaKQS4R6bMai6ua074",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "51",
                "name" => "Bali",
                "lat" => "-8.4095178",
                "lng" => "115.188916",
                "google_place_id" => "ChIJoQ8Q6NNB0S0RkOYkS7EPkSQ",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "52",
                "name" => "Nusa Tenggara Barat",
                "lat" => "-8.6529334",
                "lng" => "117.3616476",
                "google_place_id" => "ChIJIe0SGpQNuC0RxXX30MzCZ2k",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "53",
                "name" => "Nusa Tenggara Timur",
                "lat" => "-8.6573819",
                "lng" => "121.0793705",
                "google_place_id" => "ChIJlzbpqE3yUiwR4Br3yvsLAwE",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "61",
                "name" => "Kalimantan Barat",
                "lat" => "-0.2787808",
                "lng" => "111.4752851",
                "google_place_id" => "ChIJu_7rjBcYBS4RoEghTO3sXM0",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "62",
                "name" => "Kalimantan Tengah",
                "lat" => "-1.6814878",
                "lng" => "113.3823545",
                "google_place_id" => "ChIJP5a8hrK_4i0Rrmv1g2fV288",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "63",
                "name" => "Kalimantan Selatan",
                "lat" => "-3.0926415",
                "lng" => "115.2837585",
                "google_place_id" => "ChIJRbTSvTm33S0RE8GXt1C2fhQ",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "64",
                "name" => "Kalimantan Timur",
                "lat" => "0.5386586",
                "lng" => "116.419389",
                "google_place_id" => "ChIJkZxNlhBH8S0R13bjLx2wq8Q",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "65",
                "name" => "Kalimantan Utara",
                "lat" => "3.0730929",
                "lng" => "116.0413889",
                "google_place_id" => "ChIJ9wvfNH0GDzIRiLlGaN3wERk",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "71",
                "name" => "Sulawesi Utara",
                "lat" => "0.6246932",
                "lng" => "123.9750018",
                "google_place_id" => "ChIJMZ4GcEJ1hzIRNbgMmBcWiUU",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "72",
                "name" => "Sulawesi Tengah",
                "lat" => "-1.4300254",
                "lng" => "121.4456179",
                "google_place_id" => "ChIJPS2aZckJiC0RmWLbjP0zbkM",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "73",
                "name" => "Sulawesi Selatan",
                "lat" => "-3.6687994",
                "lng" => "119.9740534",
                "google_place_id" => "ChIJi75r_YD6DC0R8Br3yvsLAwE",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "74",
                "name" => "Sulawesi Tenggara",
                "lat" => "-1.8479",
                "lng" => "120.5279",
                "google_place_id" => "ChIJMSoBqds3hS0RQnf0aNFRmrw",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "75",
                "name" => "Gorontalo",
                "lat" => "0.5435442",
                "lng" => "123.0567693",
                "google_place_id" => "ChIJXeflmUcreTIRZ1kVIwlNzG0",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "76",
                "name" => "Sulawesi Barat",
                "lat" => "-2.8441371",
                "lng" => "119.2320784",
                "google_place_id" => "ChIJCUS7VCTaki0R8nAzLyC_XOo",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "81",
                "name" => "Maluku",
                "lat" => "-3.2384616",
                "lng" => "130.1452734",
                "google_place_id" => "ChIJ36EccLq8ES0RUZpkBNvoMF4",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "82",
                "name" => "Maluku Utara",
                "lat" => "1.5709993",
                "lng" => "127.8087693",
                "google_place_id" => "ChIJszIkro6uni0RwBr3yvsLAwE",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "91",
                "name" => "Papua",
                "lat" => "-4.269928",
                "lng" => "138.0803529",
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "92",
                "name" => "Papua Barat",
                "lat" => "-1.3361154",
                "lng" => "133.1747162",
                "google_place_id" => "ChIJLQviub0KVC0RYsvHxfjBSVM",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "93",
                "name" => "Papua Selatan",
                "lat" => "-4.269928",
                "lng" => "138.0803529",
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "94",
                "name" => "Papua Tengah",
                "lat" => "-4.269928",
                "lng" => "138.0803529",
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "id" => "95",
                "name" => "Papua Pegunungan",
                "lat" => "-4.269928",
                "lng" => "138.0803529",
                "google_place_id" => "ChIJc5L_qgQsO2gRc-bvXpxOqes",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}

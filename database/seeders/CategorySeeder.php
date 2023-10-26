<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $categories = [
            ['Sports', 'खेल', '运动', 'الرياضة', 'sport', 'deportes', 'Sport', 'olahraga', 'スポーツ', 'sport', 'sport', 'খেলা', 'спорт', 'desportos','c6.png'],
            ['Education', 'शिक्षा', '教育', 'تعليم', 'éducation', 'educación', 'Bildung', 'pendidikan', '教育', 'istruzione', 'onderwijs', 'শিক্ষা', 'образование', 'educação','c19.png'],
            ['Technology', 'प्रौद्योगिकी', '技术', 'تكنولوجيا', 'technologie', 'tecnología', 'Technologie', 'teknologi', 'テクノロジー', 'tecnologia', 'technologie', 'প্রযুক্তি', 'технология', 'tecnologia','c10.png'],
            ['Health and Fitness', 'स्वास्थ्य और फिटनेस', '健康与健身', 'الصحة واللياقة البدنية', 'santé et forme', 'salud y fitness', 'Gesundheit und Fitness', 'kesehatan dan kebugaran', '健康とフィットネス', 'salute e fitness', 'gezondheid en fitness', 'স্বাস্থ্য এবং ফিটনেস', 'здоровье и фитнес', 'saúde e fitness','c1.png'],
            ['Travel and Tourism', 'यात्रा और पर्यटन', '旅游与旅行', 'السفر والسياحة', 'voyages et tourisme', 'viajes y turismo', 'Reisen und Tourismus', 'perjalanan dan pariwisata', '旅行と観光', 'viaggi e turismo', 'reizen en toerisme', 'ভ্রমণ এবং পর্যটন', 'путешествия и туризм', 'viagens e turismo','c16.png'],
            ['Entertainment and Recreation', 'मनोरंजन और मनोरंजन', '娱乐和休闲', 'ترفيه والتسلية', 'divertissement et loisirs', 'entretenimiento y recreación', 'Unterhaltung und Freizeit', 'hiburan dan rekreasi', 'エンターテイメントとレクリエーション', 'intrattenimento e svago', 'entertainment en recreatie', 'বিনোদন এবং আনন্দ', 'развлечения и отдых', 'entretenimento e lazer','c7.png'],
            ['News and Events', 'समाचार और घटनाएँ', '新闻和事件', 'الأخبار والأحداث', 'actualités et événements', 'noticias y eventos', 'Nachrichten und Veranstaltungen', 'berita dan acara', 'ニュースとイベント', 'notizie ed eventi', 'nieuws en evenementen', 'সংবাদ এবং ঘটনা', 'новости и события', 'notícias e eventos','c13.png'],
            ['Arts and Culture', 'कला और संस्कृति', '艺术与文化', 'فن وثقافة', 'arts et culture', 'arte y cultura', 'Kunst und Kultur', 'seni dan budaya', '芸術と文化', 'arte e cultura', 'kunst en cultuur', 'শিল্প ও সংস্কৃতি', 'искусство и культура', 'artes e cultura','c17.png'],
            ['E-commerce', 'ई-कॉमर्स', '电子商务', 'التجارة الإلكترونية', 'commerce électronique', 'comercio electrónico', 'E-Commerce', 'e-commerce', 'Eコマース', 'e-commerce', 'e-commerce', 'ই-কমার্স', 'электронная коммерция', 'comércio eletrônico','c9.png'],
            ['Jobs and Employment', 'नौकरियां और रोजगार', '工作和就业', 'وظائف وتوظيف', 'emplois et emploi', 'empleo y empleo', 'Jobs und Beschäftigung', 'pekerjaan dan ketenagakerjaan', '仕事と雇用', 'lavori e impiego', 'banen en werkgelegenheid', 'জবস এবং কর্ম', 'работа и занятость', 'empregos e emprego','c20.png'],
            ['Automobiles and Vehicles', 'ऑटोमोबाइल और वाहन', '汽车和交通工具', 'السيارات والمركبات', 'automobiles et véhicules', 'automóviles y vehículos', 'Autos und Fahrzeuge', 'mobil dan kendaraan', '自動車と乗り物', 'auto e veicoli', "auto's en voertuigen", 'গাড়ি এবং যান', 'автомобили и транспортные средства', 'automóveis e veículos','c8.png'],
            ['Design and Arts', 'डिज़ाइन और कला', '设计和艺术', 'التصميم والفنون', 'conception et arts', 'diseño y artes', 'Design und Kunst', 'desain dan seni', 'デザインとアート', 'design e arti', 'ontwerp en kunst', 'ডিজাইন এবং শিল্প', 'дизайн и искусство', 'design e artes','c5.png'],
            ['Motherhood and Children', 'मातृत्व और बच्चे', '母亲和孩子', 'الأمومة والأطفال', 'maternité et enfants', 'maternidad e hijos', 'Mutterschaft und Kinder', 'keibuan dan anak-anak', '母性と子供', 'maternità e bambini', 'moederschap en kinderen', 'মাতৃত্ব এবং শিশু', 'материнство и дети', 'maternidade e crianças','c4.png'],
            ['Religion and Spirituality', 'धर्म और आध्यात्मिकता', '宗教与灵性', 'الديانة والروحانية', 'religion et spiritualité', 'religión y espiritualidad', 'Religion und Spiritualität', 'agama dan spiritualitas', '宗教と霊性', 'religione e spiritualità', 'religie en spiritualiteit', 'ধর্ম এবং আধ্যাত্মিকতা', 'религия и духовность', 'religião e espiritualidade','c14.png'],
            ['Politics and Public Affairs', 'राजनीति और सार्वजनिक मामले', '政治和公共事务', 'سياسة وشؤون عامة', 'politique et affaires publiques', 'política y asuntos públicos', 'Politik und öffentliche Angelegenheiten', 'politik dan urusan publik', '政治と公共事務', 'politica e affari pubblici', 'politiek en openbare zaken', 'রাজনীতি এবং জনস্বাস্থ্য', 'политика и общественные вопросы', 'política e assuntos públicos','c3.png'],
            ['Games', 'खेल', '游戏', 'ألعاب', 'jeux', 'juegos', 'Spiele', 'permainan', 'ゲーム', 'giochi', 'spellen', 'খেল', 'игры', 'jogos','c11.png'],
            ['Bots', 'बोट्स', '机器人', 'الروبوتات', 'bots', 'bots', 'Bots', 'bots', 'ボット', 'bots', 'bots', 'বোট', 'боты', 'bots','c15.png'],
            ['Channels', 'चैनल्स', '渠道', 'قنوات', 'chaînes', 'canales', 'Kanäle', 'saluran', 'チャンネル', 'canali', 'kanalen', 'চ্যানেল', 'каналы', 'canais','c12.png'],
            ['Others', 'अन्य', '其他', 'اخر', 'autres', 'otros', 'andere', 'lainnya', 'その他', 'altre', 'anderen', 'অন্য', 'другие', 'outros','c18.png']
        ];

        for ($i = 0; $i < count($categories); $i++) {
            $category = Category::create([
                'name' => [
                    "en" => $categories[$i][0],
                    "hi" => $categories[$i][1],
                    "zh" => $categories[$i][2],
                    "ar" => $categories[$i][3],
                    "fr" => $categories[$i][4],
                    "es" => $categories[$i][5],
                    "de" => $categories[$i][6],
                    "id" => $categories[$i][7],
                    "ja" => $categories[$i][8],
                    "it" => $categories[$i][9],
                    "nl" => $categories[$i][10],
                    "bn" => $categories[$i][11],
                    "ru" => $categories[$i][12],
                    "pt" => $categories[$i][13],
                ]

            ]);
            $category ->addMedia(storage_path('images/categories/'.$categories[$i][14]))->preservingOriginal()->toMediaCollection('category');
        }
    }
}

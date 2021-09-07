<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 16:25:50',
                'updated_at' => '2021-03-23 17:28:10',
                'deleted_at' => '2021-03-23 17:28:10',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!',
                'created_at' => '2021-03-23 16:26:46',
                'updated_at' => '2021-03-23 17:28:33',
                'deleted_at' => '2021-03-23 17:28:33',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데12312',
                'created_at' => '2021-03-23 16:26:53',
                'updated_at' => '2021-03-23 18:57:55',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 16:36:14',
                'updated_at' => '2021-03-23 17:28:40',
                'deleted_at' => '2021-03-23 17:28:40',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 33,
                'inquiry_id' => 7,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 16:37:24',
                'updated_at' => '2021-03-23 16:37:24',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데33333',
                'created_at' => '2021-03-23 16:38:30',
                'updated_at' => '2021-03-23 18:58:05',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'user_id' => 33,
                'inquiry_id' => 7,
                'comment' => 'Product  register',
                'created_at' => '2021-03-23 16:41:31',
                'updated_at' => '2021-03-23 18:59:02',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'user_id' => 33,
                'inquiry_id' => 7,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 16:43:08',
                'updated_at' => '2021-03-23 16:43:08',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 16:56:21',
                'updated_at' => '2021-03-23 17:28:45',
                'deleted_at' => '2021-03-23 17:28:45',
            ),
            9 => 
            array (
                'id' => 11,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 17:00:06',
                'updated_at' => '2021-03-23 17:00:06',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => 'Product 4',
                'created_at' => '2021-03-23 17:05:39',
                'updated_at' => '2021-03-23 17:24:14',
                'deleted_at' => '2021-03-23 17:24:14',
            ),
            11 => 
            array (
                'id' => 13,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 17:05:48',
                'updated_at' => '2021-03-23 17:05:48',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 17:13:19',
                'updated_at' => '2021-03-23 17:13:19',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 17:16:57',
                'updated_at' => '2021-03-23 17:16:57',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 17:17:35',
                'updated_at' => '2021-03-23 17:17:35',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 17:27:33',
                'updated_at' => '2021-03-23 17:27:33',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'user_id' => 35,
                'inquiry_id' => 6,
                'comment' => '포인트 충전하면 5% 더 추가 지급!',
                'created_at' => '2021-03-23 17:33:18',
                'updated_at' => '2021-03-23 17:33:18',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'user_id' => 35,
                'inquiry_id' => 7,
                'comment' => '포인트 충전하면 5% 더 추가 지급!',
                'created_at' => '2021-03-23 17:34:27',
                'updated_at' => '2021-03-23 17:34:27',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'user_id' => 33,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-23 18:00:05',
                'updated_at' => '2021-03-23 18:00:05',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'user_id' => 35,
                'inquiry_id' => 10,
                'comment' => '포인트 충전하면 5% 더 추가 지급!',
                'created_at' => '2021-03-23 18:04:04',
                'updated_at' => '2021-03-23 18:04:04',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'user_id' => 33,
                'inquiry_id' => 7,
                'comment' => 'ádasdasd',
                'created_at' => '2021-03-23 18:27:49',
                'updated_at' => '2021-03-23 18:27:49',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'user_id' => 36,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-24 11:01:16',
                'updated_at' => '2021-03-24 11:01:16',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'user_id' => 36,
                'inquiry_id' => 6,
                'comment' => '저도',
                'created_at' => '2021-03-24 11:43:57',
                'updated_at' => '2021-03-24 11:50:09',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'user_id' => 36,
                'inquiry_id' => 6,
                'comment' => '저도 진짜 가지고싶었는데!!123',
                'created_at' => '2021-03-24 11:44:10',
                'updated_at' => '2021-03-24 11:49:54',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'user_id' => 36,
                'inquiry_id' => 6,
                'comment' => 'Product 4',
                'created_at' => '2021-03-24 11:50:40',
                'updated_at' => '2021-03-24 11:50:40',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'user_id' => 36,
                'inquiry_id' => 7,
                'comment' => '저도 진짜 가지고싶었는데!!1111333',
                'created_at' => '2021-03-24 11:51:44',
                'updated_at' => '2021-03-24 11:52:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'user_id' => 36,
                'inquiry_id' => 16,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-24 12:07:32',
                'updated_at' => '2021-03-24 12:07:32',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'user_id' => 36,
                'inquiry_id' => 7,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-25 10:48:12',
                'updated_at' => '2021-03-25 10:48:12',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'user_id' => 37,
                'inquiry_id' => 23,
                'comment' => '저도 진짜 가지고싶었는데!!',
                'created_at' => '2021-03-26 10:59:23',
                'updated_at' => '2021-03-26 10:59:23',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'user_id' => 37,
                'inquiry_id' => 30,
                'comment' => '저도 진짜 가지고싶었는데!!ăew',
                'created_at' => '2021-03-26 12:13:04',
                'updated_at' => '2021-03-26 12:13:09',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'user_id' => 36,
                'inquiry_id' => 30,
                'comment' => '제가좋아하는 방탄 오빠들! 오빠들 캐릭터로 된 지우개가 가지고... 싶어요! 저 그러면 여',
                'created_at' => '2021-03-26 16:35:15',
                'updated_at' => '2021-03-26 16:35:15',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'user_id' => 36,
                'inquiry_id' => 30,
                'comment' => 'đc',
                'created_at' => '2021-03-27 22:46:55',
                'updated_at' => '2021-03-27 22:46:59',
                'deleted_at' => '2021-03-27 22:46:59',
            ),
            32 => 
            array (
                'id' => 34,
                'user_id' => 36,
                'inquiry_id' => 30,
                'comment' => 'dc',
                'created_at' => '2021-03-27 22:47:20',
                'updated_at' => '2021-03-27 22:47:34',
                'deleted_at' => '2021-03-27 22:47:34',
            ),
            33 => 
            array (
                'id' => 35,
                'user_id' => 36,
                'inquiry_id' => 22,
                'comment' => 'hofjfjfjfjjfjff',
                'created_at' => '2021-03-27 22:48:36',
                'updated_at' => '2021-03-27 22:48:48',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'user_id' => 36,
                'inquiry_id' => 22,
                'comment' => '제가좋아하는 방탄 오빠들! 오빠들 캐릭터로 된 지우개가 가지고... 싶어요! 저 그러면 여',
                'created_at' => '2021-03-27 22:49:02',
                'updated_at' => '2021-03-27 22:49:02',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'user_id' => 36,
                'inquiry_id' => 22,
                'comment' => '제가좋아하는 방탄 오빠들! 오빠들 캐릭터로 된 지우개가 가지고... 싶어요! 저 그러면 여',
                'created_at' => '2021-03-27 22:49:09',
                'updated_at' => '2021-03-27 22:49:09',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'user_id' => 36,
                'inquiry_id' => 22,
                'comment' => '제가좋아하는 방탄 오빠들! 오빠들 캐릭터로 된 지우개가 가지고... 싶어요! 저 그러면 여',
                'created_at' => '2021-03-27 22:49:13',
                'updated_at' => '2021-03-27 22:49:13',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'user_id' => 36,
                'inquiry_id' => 27,
                'comment' => '제가좋아하는 방탄 오빠들! 오빠들 캐릭터로 된 지우개가 가지고... 싶어요! 저 그러면 여',
                'created_at' => '2021-03-27 22:52:19',
                'updated_at' => '2021-03-27 22:52:19',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'user_id' => 36,
                'inquiry_id' => 6,
                'comment' => 'de',
                'created_at' => '2021-03-27 22:52:50',
                'updated_at' => '2021-03-27 22:52:50',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'user_id' => 36,
                'inquiry_id' => 11,
                'comment' => '어몽어스 캐릭터 피규어요! 그거 요즘 다들 가방에 달고다닌단 말이에요!',
                'created_at' => '2021-03-29 16:03:55',
                'updated_at' => '2021-03-29 16:03:55',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'user_id' => 39,
                'inquiry_id' => 33,
                'comment' => '<a> con gà </a> đi chơi',
                'created_at' => '2021-03-30 16:15:01',
                'updated_at' => '2021-03-30 16:22:45',
                'deleted_at' => '2021-03-30 16:22:45',
            ),
            41 => 
            array (
                'id' => 43,
                'user_id' => 39,
                'inquiry_id' => 33,
            'comment' => '33*174386$763140982!@#&*^%&*%)_',
            'created_at' => '2021-03-30 16:21:35',
            'updated_at' => '2021-03-30 16:22:56',
            'deleted_at' => '2021-03-30 16:22:56',
        ),
        42 => 
        array (
            'id' => 44,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => 'fgd',
            'created_at' => '2021-03-30 16:22:52',
            'updated_at' => '2021-03-30 16:34:08',
            'deleted_at' => '2021-03-30 16:34:08',
        ),
        43 => 
        array (
            'id' => 45,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => 'sád',
            'created_at' => '2021-03-30 16:23:00',
            'updated_at' => '2021-03-30 16:23:00',
            'deleted_at' => NULL,
        ),
        44 => 
        array (
            'id' => 46,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => '11111111111111111111111111111111111111111111111111',
            'created_at' => '2021-03-30 16:23:04',
            'updated_at' => '2021-03-30 16:23:16',
            'deleted_at' => NULL,
        ),
        45 => 
        array (
            'id' => 47,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => '56',
            'created_at' => '2021-03-30 16:23:07',
            'updated_at' => '2021-03-30 16:23:07',
            'deleted_at' => NULL,
        ),
        46 => 
        array (
            'id' => 48,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => '11111111111111111111111111111111111111111111111111',
            'created_at' => '2021-03-30 16:33:00',
            'updated_at' => '2021-03-30 16:33:00',
            'deleted_at' => NULL,
        ),
        47 => 
        array (
            'id' => 49,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => '1111111111',
            'created_at' => '2021-03-30 16:33:06',
            'updated_at' => '2021-03-30 16:33:06',
            'deleted_at' => NULL,
        ),
        48 => 
        array (
            'id' => 50,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => '11111111111111111111111111111111111111111111111111',
            'created_at' => '2021-03-30 16:33:16',
            'updated_at' => '2021-03-30 16:34:00',
            'deleted_at' => NULL,
        ),
        49 => 
        array (
            'id' => 51,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => 'abc',
            'created_at' => '2021-03-30 16:33:29',
            'updated_at' => '2021-03-30 16:33:29',
            'deleted_at' => NULL,
        ),
        50 => 
        array (
            'id' => 52,
            'user_id' => 39,
            'inquiry_id' => 32,
            'comment' => 'fsdf',
            'created_at' => '2021-03-30 16:36:30',
            'updated_at' => '2021-03-30 16:36:30',
            'deleted_at' => NULL,
        ),
        51 => 
        array (
            'id' => 53,
            'user_id' => 39,
            'inquiry_id' => 32,
            'comment' => 'ads',
            'created_at' => '2021-03-30 16:36:32',
            'updated_at' => '2021-03-30 16:36:32',
            'deleted_at' => NULL,
        ),
        52 => 
        array (
            'id' => 54,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => '2222222',
            'created_at' => '2021-03-30 16:42:10',
            'updated_at' => '2021-03-30 16:42:10',
            'deleted_at' => NULL,
        ),
        53 => 
        array (
            'id' => 55,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => 'hello',
            'created_at' => '2021-03-30 16:42:47',
            'updated_at' => '2021-03-30 16:42:47',
            'deleted_at' => NULL,
        ),
        54 => 
        array (
            'id' => 56,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => 'xin chồ',
            'created_at' => '2021-03-30 16:42:58',
            'updated_at' => '2021-03-30 16:42:58',
            'deleted_at' => NULL,
        ),
        55 => 
        array (
            'id' => 57,
            'user_id' => 39,
            'inquiry_id' => 31,
            'comment' => 'dsfsdf',
            'created_at' => '2021-03-30 16:44:22',
            'updated_at' => '2021-03-30 16:44:22',
            'deleted_at' => NULL,
        ),
        56 => 
        array (
            'id' => 58,
            'user_id' => 39,
            'inquiry_id' => 31,
            'comment' => 'mnmbnm',
            'created_at' => '2021-03-30 16:44:28',
            'updated_at' => '2021-03-30 16:44:28',
            'deleted_at' => NULL,
        ),
        57 => 
        array (
            'id' => 59,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => 'rtr',
            'created_at' => '2021-03-30 16:45:41',
            'updated_at' => '2021-03-30 16:45:41',
            'deleted_at' => NULL,
        ),
        58 => 
        array (
            'id' => 60,
            'user_id' => 39,
            'inquiry_id' => 33,
            'comment' => '00000',
            'created_at' => '2021-03-30 16:51:42',
            'updated_at' => '2021-03-30 16:51:42',
            'deleted_at' => NULL,
        ),
        59 => 
        array (
            'id' => 61,
            'user_id' => 39,
            'inquiry_id' => 32,
            'comment' => 'sdf',
            'created_at' => '2021-03-30 17:09:13',
            'updated_at' => '2021-03-30 17:09:13',
            'deleted_at' => NULL,
        ),
        60 => 
        array (
            'id' => 62,
            'user_id' => 39,
            'inquiry_id' => 6,
            'comment' => 'kljkjk',
            'created_at' => '2021-03-30 17:31:26',
            'updated_at' => '2021-03-30 17:31:26',
            'deleted_at' => NULL,
        ),
        61 => 
        array (
            'id' => 63,
            'user_id' => 39,
            'inquiry_id' => 6,
            'comment' => 'huiui',
            'created_at' => '2021-03-30 17:31:29',
            'updated_at' => '2021-03-30 17:31:29',
            'deleted_at' => NULL,
        ),
        62 => 
        array (
            'id' => 64,
            'user_id' => 39,
            'inquiry_id' => 6,
            'comment' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaađ',
            'created_at' => '2021-03-30 17:31:39',
            'updated_at' => '2021-03-30 17:31:53',
            'deleted_at' => NULL,
        ),
        63 => 
        array (
            'id' => 65,
            'user_id' => 33,
            'inquiry_id' => 36,
            'comment' => '저도 진짜 가지고싶었는데!!!dd',
            'created_at' => '2021-03-31 18:22:36',
            'updated_at' => '2021-03-31 18:22:40',
            'deleted_at' => '2021-03-31 18:22:40',
        ),
        64 => 
        array (
            'id' => 66,
            'user_id' => 33,
            'inquiry_id' => 42,
            'comment' => '앜사라',
            'created_at' => '2021-04-01 09:45:23',
            'updated_at' => '2021-04-01 09:45:23',
            'deleted_at' => NULL,
        ),
        65 => 
        array (
            'id' => 67,
            'user_id' => 33,
            'inquiry_id' => 42,
            'comment' => '룰루',
            'created_at' => '2021-04-01 09:45:35',
            'updated_at' => '2021-04-01 09:45:35',
            'deleted_at' => NULL,
        ),
        66 => 
        array (
            'id' => 68,
            'user_id' => 33,
            'inquiry_id' => 43,
            'comment' => 'ㅗㅗㅗ',
            'created_at' => '2021-04-01 10:16:25',
            'updated_at' => '2021-04-01 10:16:25',
            'deleted_at' => NULL,
        ),
        67 => 
        array (
            'id' => 69,
            'user_id' => 33,
            'inquiry_id' => 43,
            'comment' => 'ㄱㅇㅇㅌㅇ',
            'created_at' => '2021-04-01 10:16:29',
            'updated_at' => '2021-04-01 10:16:29',
            'deleted_at' => NULL,
        ),
        68 => 
        array (
            'id' => 70,
            'user_id' => 33,
            'inquiry_id' => 43,
            'comment' => 'ㅅㅛㅕ호표',
            'created_at' => '2021-04-01 10:17:28',
            'updated_at' => '2021-04-01 10:17:38',
            'deleted_at' => NULL,
        ),
        69 => 
        array (
            'id' => 71,
            'user_id' => 37,
            'inquiry_id' => 44,
            'comment' => '저도 진짜 가지고싶었는데!!',
            'created_at' => '2021-04-01 19:04:09',
            'updated_at' => '2021-04-01 19:04:09',
            'deleted_at' => NULL,
        ),
        70 => 
        array (
            'id' => 72,
            'user_id' => 37,
            'inquiry_id' => 44,
            'comment' => '저도 진짜 가지고싶었는데!!ưeqweqw',
            'created_at' => '2021-04-01 19:06:26',
            'updated_at' => '2021-04-01 19:06:26',
            'deleted_at' => NULL,
        ),
        71 => 
        array (
            'id' => 73,
            'user_id' => 37,
            'inquiry_id' => 44,
            'comment' => 'Product 4232423',
            'created_at' => '2021-04-01 19:16:27',
            'updated_at' => '2021-04-01 19:18:02',
            'deleted_at' => NULL,
        ),
        72 => 
        array (
            'id' => 74,
            'user_id' => 42,
            'inquiry_id' => 45,
            'comment' => 'alo 1234',
            'created_at' => '2021-04-02 15:01:57',
            'updated_at' => '2021-04-02 15:06:05',
            'deleted_at' => '2021-04-02 15:06:05',
        ),
        73 => 
        array (
            'id' => 75,
            'user_id' => 42,
            'inquiry_id' => 45,
            'comment' => '122',
            'created_at' => '2021-04-02 15:06:20',
            'updated_at' => '2021-04-02 15:06:20',
            'deleted_at' => NULL,
        ),
        74 => 
        array (
            'id' => 76,
            'user_id' => 42,
            'inquiry_id' => 46,
            'comment' => 'usu',
            'created_at' => '2021-04-02 15:07:52',
            'updated_at' => '2021-04-02 15:07:52',
            'deleted_at' => NULL,
        ),
        75 => 
        array (
            'id' => 77,
            'user_id' => 37,
            'inquiry_id' => 47,
            'comment' => 'demon',
            'created_at' => '2021-04-02 16:52:09',
            'updated_at' => '2021-04-02 16:52:09',
            'deleted_at' => NULL,
        ),
        76 => 
        array (
            'id' => 78,
            'user_id' => 37,
            'inquiry_id' => 47,
            'comment' => 'good......',
            'created_at' => '2021-04-02 16:52:33',
            'updated_at' => '2021-04-02 16:52:33',
            'deleted_at' => NULL,
        ),
        77 => 
        array (
            'id' => 79,
            'user_id' => 37,
            'inquiry_id' => 38,
            'comment' => 'good...',
            'created_at' => '2021-04-02 18:37:39',
            'updated_at' => '2021-04-02 18:38:08',
            'deleted_at' => NULL,
        ),
        78 => 
        array (
            'id' => 80,
            'user_id' => 37,
            'inquiry_id' => 38,
            'comment' => 'không',
            'created_at' => '2021-04-02 18:38:21',
            'updated_at' => '2021-04-02 18:38:21',
            'deleted_at' => NULL,
        ),
        79 => 
        array (
            'id' => 81,
            'user_id' => 33,
            'inquiry_id' => 56,
            'comment' => '이거좋아요',
            'created_at' => '2021-04-06 11:45:38',
            'updated_at' => '2021-04-06 11:45:38',
            'deleted_at' => NULL,
        ),
        80 => 
        array (
            'id' => 82,
            'user_id' => 42,
            'inquiry_id' => 55,
            'comment' => 'tesr tesrt',
            'created_at' => '2021-04-06 12:40:10',
            'updated_at' => '2021-04-06 12:40:10',
            'deleted_at' => NULL,
        ),
        81 => 
        array (
            'id' => 83,
            'user_id' => 45,
            'inquiry_id' => 59,
            'comment' => 'zzz',
            'created_at' => '2021-04-07 11:39:11',
            'updated_at' => '2021-04-07 11:39:11',
            'deleted_at' => NULL,
        ),
        82 => 
        array (
            'id' => 84,
            'user_id' => 44,
            'inquiry_id' => 63,
            'comment' => '아이와 오리 눈사람을 만들고 싶어요.  상품 입고 시켜주세요!아이와 오리 눈사람을 만들고',
            'created_at' => '2021-04-07 11:54:04',
            'updated_at' => '2021-04-07 12:33:48',
            'deleted_at' => '2021-04-07 12:33:48',
        ),
        83 => 
        array (
            'id' => 85,
            'user_id' => 44,
            'inquiry_id' => 59,
            'comment' => '12121 test',
            'created_at' => '2021-04-07 12:14:45',
            'updated_at' => '2021-04-07 12:19:36',
            'deleted_at' => '2021-04-07 12:19:36',
        ),
        84 => 
        array (
            'id' => 86,
            'user_id' => 44,
            'inquiry_id' => 59,
            'comment' => '저도 이거 요청하려고 했는데!저도 이거 요청하려고 했는데!저도 이거 요청하려고 했는데!저도',
            'created_at' => '2021-04-07 12:15:01',
            'updated_at' => '2021-04-07 12:44:41',
            'deleted_at' => NULL,
        ),
        85 => 
        array (
            'id' => 87,
            'user_id' => 44,
            'inquiry_id' => 63,
            'comment' => 'test 12343434',
            'created_at' => '2021-04-07 12:16:58',
            'updated_at' => '2021-04-07 12:33:45',
            'deleted_at' => '2021-04-07 12:33:45',
        ),
        86 => 
        array (
            'id' => 88,
            'user_id' => 44,
            'inquiry_id' => 63,
            'comment' => '아이와 오리 눈사람을 만들고 싶어요.  상품 입고 시켜주세요!아이와 오리 눈사람을 만들고',
            'created_at' => '2021-04-07 12:20:45',
            'updated_at' => '2021-04-07 12:33:03',
            'deleted_at' => '2021-04-07 12:33:03',
        ),
        87 => 
        array (
            'id' => 89,
            'user_id' => 38,
            'inquiry_id' => 67,
            'comment' => '아이와 오리 눈사람을 만들고 싶어요.  상품 입고 시켜주세요!아이와 오리 눈사람을 만들고',
            'created_at' => '2021-04-07 13:20:45',
            'updated_at' => '2021-04-07 13:21:00',
            'deleted_at' => '2021-04-07 13:21:00',
        ),
        88 => 
        array (
            'id' => 90,
            'user_id' => 38,
            'inquiry_id' => 63,
            'comment' => 'test acc admin',
            'created_at' => '2021-04-07 13:21:32',
            'updated_at' => '2021-04-07 13:21:32',
            'deleted_at' => NULL,
        ),
        89 => 
        array (
            'id' => 91,
            'user_id' => 38,
            'inquiry_id' => 63,
            'comment' => '1',
            'created_at' => '2021-04-07 13:22:48',
            'updated_at' => '2021-04-07 13:22:48',
            'deleted_at' => NULL,
        ),
        90 => 
        array (
            'id' => 92,
            'user_id' => 39,
            'inquiry_id' => 67,
            'comment' => '저도 진짜 가지고싶었는데!!',
            'created_at' => '2021-04-07 14:49:08',
            'updated_at' => '2021-04-07 14:49:08',
            'deleted_at' => NULL,
        ),
        91 => 
        array (
            'id' => 93,
            'user_id' => 39,
            'inquiry_id' => 67,
            'comment' => 'jfjf',
            'created_at' => '2021-04-07 14:49:39',
            'updated_at' => '2021-04-07 14:49:39',
            'deleted_at' => NULL,
        ),
        92 => 
        array (
            'id' => 94,
            'user_id' => 39,
            'inquiry_id' => 67,
            'comment' => 'kfjjffg',
            'created_at' => '2021-04-07 14:51:06',
            'updated_at' => '2021-04-07 14:51:06',
            'deleted_at' => NULL,
        ),
        93 => 
        array (
            'id' => 95,
            'user_id' => 39,
            'inquiry_id' => 67,
            'comment' => 'demo',
            'created_at' => '2021-04-07 14:54:45',
            'updated_at' => '2021-04-07 14:54:45',
            'deleted_at' => NULL,
        ),
        94 => 
        array (
            'id' => 96,
            'user_id' => 38,
            'inquiry_id' => 67,
            'comment' => '저도 진짜 가지고싶었는데!!',
            'created_at' => '2021-04-07 15:11:17',
            'updated_at' => '2021-04-07 15:11:17',
            'deleted_at' => NULL,
        ),
        95 => 
        array (
            'id' => 97,
            'user_id' => 43,
            'inquiry_id' => 65,
            'comment' => '룰룰랑',
            'created_at' => '2021-04-07 15:26:41',
            'updated_at' => '2021-04-07 15:26:41',
            'deleted_at' => NULL,
        ),
        96 => 
        array (
            'id' => 98,
            'user_id' => 44,
            'inquiry_id' => 72,
            'comment' => '내용을 입력해주세요',
            'created_at' => '2021-04-08 12:51:59',
            'updated_at' => '2021-04-08 12:52:09',
            'deleted_at' => '2021-04-08 12:52:09',
        ),
        97 => 
        array (
            'id' => 99,
            'user_id' => 44,
            'inquiry_id' => 71,
            'comment' => '',
            'created_at' => '2021-04-12 18:49:16',
            'updated_at' => '2021-04-12 18:57:10',
            'deleted_at' => '2021-04-12 18:57:10',
        ),
        98 => 
        array (
            'id' => 100,
            'user_id' => 44,
            'inquiry_id' => 69,
            'comment' => '333333',
            'created_at' => '2021-04-12 18:56:52',
            'updated_at' => '2021-04-12 18:56:57',
            'deleted_at' => '2021-04-12 18:56:57',
        ),
        99 => 
        array (
            'id' => 101,
            'user_id' => 44,
            'inquiry_id' => 74,
            'comment' => 'testqqwe',
            'created_at' => '2021-04-13 11:59:13',
            'updated_at' => '2021-04-13 11:59:20',
            'deleted_at' => '2021-04-13 11:59:20',
        ),
        100 => 
        array (
            'id' => 102,
            'user_id' => 44,
            'inquiry_id' => 66,
            'comment' => '我还是我胡汉三为我的努力付出很多很多',
            'created_at' => '2021-04-13 12:00:02',
            'updated_at' => '2021-04-13 12:01:09',
            'deleted_at' => '2021-04-13 12:01:09',
        ),
        101 => 
        array (
            'id' => 103,
            'user_id' => 44,
            'inquiry_id' => 66,
            'comment' => '這裡就是這樣的關係吧⋯⋯這個月我可以·？你們的朋友有沒有那麼可愛怎麼玩',
            'created_at' => '2021-04-13 12:00:47',
            'updated_at' => '2021-04-13 16:07:45',
            'deleted_at' => '2021-04-13 16:07:45',
        ),
        102 => 
        array (
            'id' => 104,
            'user_id' => 37,
            'inquiry_id' => 74,
            'comment' => 'd',
            'created_at' => '2021-04-13 13:27:28',
            'updated_at' => '2021-04-13 13:27:28',
            'deleted_at' => NULL,
        ),
        103 => 
        array (
            'id' => 105,
            'user_id' => 44,
            'inquiry_id' => 74,
            'comment' => '1111111111111111111111111111',
            'created_at' => '2021-04-13 16:03:52',
            'updated_at' => '2021-04-13 16:03:59',
            'deleted_at' => '2021-04-13 16:03:59',
        ),
        104 => 
        array (
            'id' => 106,
            'user_id' => 44,
            'inquiry_id' => 71,
            'comment' => 'ưqqwrwr',
            'created_at' => '2021-04-15 13:21:35',
            'updated_at' => '2021-04-15 13:21:35',
            'deleted_at' => NULL,
        ),
        105 => 
        array (
            'id' => 107,
            'user_id' => 46,
            'inquiry_id' => 69,
            'comment' => '저도 진짜 가지고싶었는데!!',
            'created_at' => '2021-04-28 12:24:58',
            'updated_at' => '2021-04-28 12:24:58',
            'deleted_at' => NULL,
        ),
        106 => 
        array (
            'id' => 108,
            'user_id' => 37,
            'inquiry_id' => 74,
            'comment' => 'annhnnddd',
            'created_at' => '2021-04-29 16:21:02',
            'updated_at' => '2021-04-29 16:21:02',
            'deleted_at' => NULL,
        ),
        107 => 
        array (
            'id' => 109,
            'user_id' => 35,
            'inquiry_id' => 80,
            'comment' => '저도 진짜 가지고싶었는데!!',
            'created_at' => '2021-05-04 15:36:23',
            'updated_at' => '2021-05-04 15:36:23',
            'deleted_at' => NULL,
        ),
        108 => 
        array (
            'id' => 110,
            'user_id' => 37,
            'inquiry_id' => 62,
            'comment' => 'good',
            'created_at' => '2021-05-10 18:45:48',
            'updated_at' => '2021-05-10 18:45:48',
            'deleted_at' => NULL,
        ),
        109 => 
        array (
            'id' => 111,
            'user_id' => 37,
            'inquiry_id' => 80,
            'comment' => 'ㄹㅇ',
            'created_at' => '2021-05-11 15:18:26',
            'updated_at' => '2021-05-11 15:18:26',
            'deleted_at' => NULL,
        ),
        110 => 
        array (
            'id' => 112,
            'user_id' => 35,
            'inquiry_id' => 83,
            'comment' => '저도 진짜 가지고싶었는데!!',
            'created_at' => '2021-05-11 15:31:43',
            'updated_at' => '2021-05-11 15:31:43',
            'deleted_at' => NULL,
        ),
    ));
        
        
    }
}
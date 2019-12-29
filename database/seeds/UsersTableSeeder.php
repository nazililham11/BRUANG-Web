<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('87654321');

        DB::insert("INSERT INTO `users`
         (`user_id`, `name`, `password`, `created_at`, `updated_at`) VALUES
        ('190000001',	'Agus Purwanto, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190000002',	'Anggit Dwi Hartanto, M.Kom'                        , '$password', '2019-12-28 13:25:30', null),
        ('190000003',	'Bayu Setiaji, S.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190000004',	'Erni Seniwati, S.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190000005',	'Ferry Wahyu Wibowo, S.Si., M.Cs'                   , '$password', '2019-12-28 13:25:30', null),
        ('190000006',	'M. Agung Nugroho, S.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190000007',	'Naskan, S.Kom'     	                            , '$password', '2019-12-28 13:25:30', null),
        ('190000008',	'Rizqi Sukma Kharisma, M.Kom'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190000016',	'Robert Marco,MT'       	                        , '$password', '2019-12-28 13:25:30', null),
        ('190000017',	'Hartatik, M.Cs'        	                        , '$password', '2019-12-28 13:25:30', null),
        ('190000018',	'Sidiq Wahyu Surya W.,M.Kom'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302001',	'M. Suyanto, Prof., Dr., M.M.'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302004',	'Muhamad Idris Purwanto, Dr.,Drs., M.M.'        	, '$password', '2019-12-28 13:25:30', null),
        ('190302010',	'Abas Ali Pangera, Ir, M.Kom'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302011',	'Rum Mohamad Andri Kr, Ir, M.Kom'       	        , '$password', '2019-12-28 13:25:30', null),
        ('190302012',	'Agung Pambudi,ST, M.A'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302013',	'Rahma Widyawati, S.E., M.M.'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302016',	'Muhammad Maskuri, S.Sos.I, M.M.'       	        , '$password', '2019-12-28 13:25:30', null),
        ('190302017',	'Eny Nurnilawati, S.E., M.M.'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302018',	'Selamat, S.E, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302019',	'Suyatmi, S.E., M.M'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302021',	'Istiningsih, S.E, M.M'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302022',	'Achmad Fauzi, SE, M.M'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302024',	'Hanafi, S.Kom, M.Eng'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302027',	'Widiyanti Kurnianingsih, SE,Ak M.Akt, CA'      	, '$password', '2019-12-28 13:25:30', null),
        ('190302029',	'Bambang Sudaryatno, Drs, MM'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302031',	'Aryanto Yuniawan, S.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302034',	'Abidarin Rosidi, Dr, M.Ma.'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302035',	'Sudarmawan, S.T., M.T.'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302036',	'Arief Setyanto, Dr.,S.Si, MT'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302037',	'Ema Utami, Prof. Dr., S.Si., M.Kom.'       	    , '$password', '2019-12-28 13:25:30', null),
        ('190302038',	'Krisnawati, S.Si., M.T.'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302039',	'Yudi Sutanto, M. Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302041',	'Anik Sri Widawati, S.Sos.,M.M.'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302042',	'Mei Maemunah, SH, M.M'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302043',	'Susi Haryanti, S.Sos'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302047',	'Amir Fatah Sofyan, ST, M.Kom'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302052',	'Andi Sunyoto, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302057',	'Heri Sismoro, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302060',	'Sri Ngudi Wahyuni, S.T.,M.Kom.'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302061',	'Lya Renita Ika Putri, S.Kom'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302063',	'Armadyah Amborowati, S.Kom, M. Eng.'       	    , '$password', '2019-12-28 13:25:30', null),
        ('190302066',	'Nuraini, M.Kom'        	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302068',	'Jaeni, S.Kom, M.Eng'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302096',	'Hanif Al Fatta,S.Kom., M.Kom.'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302098',	'M. Rudyanto Arief, S.T, M.T'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302105',	'Melwin Syafrizal, S.Kom., M.Eng.'      	        , '$password', '2019-12-28 13:25:30', null),
        ('190302106',	'Kusrini, Dr., M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302107',	'Erik Hadi Saputra, S.Kom, M.Eng.'      	        , '$password', '2019-12-28 13:25:30', null),
        ('190302108',	'Mardhiya Hayaty, ST, M.Kom'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302109',	'Andika Agus Slameto, M.Kom'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302110',	'Tristanto Ari Aji, M.Kom'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302111',	'Fatkhurrohman Akhmad, A.Md'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302112',	'Kusnawi, S.Kom, M. Eng.'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302115',	'Tri Susanto, M.Kom'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302117',	'M. Piko Henry Widiarto, S.Kom'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302119',	'Ichsan Wiratama, ST, M.Cs'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302121',	'H. Tutus Alan Asoba Sarti, Drs, Ir, MM'        	, '$password', '2019-12-28 13:25:30', null),
        ('190302125',	'Emha Taufiq Luthfi, S.T., M.Kom'       	        , '$password', '2019-12-28 13:25:30', null),
        ('190302126',	'Barka Satya, M.Kom'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302128',	'Dony Ariyus, M.Kom'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302141',	'Rico Agung F, S.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302146',	'Yuli Astuti, M.Kom'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302148',	'Ahlihi Masruro, M.Kom'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302150',	'Arif Dwi Laksito, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302151',	'Lukman, M.Kom'     	                            , '$password', '2019-12-28 13:25:30', null),
        ('190302152',	'Asro Nasiri, Drs, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302156',	'Tahajudin Sudibyo, Drs. M.A'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302158',	'Ratno Kustiawan, S.Kom'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302159',	'Kamarudin, S.Kom'      	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302161',	'Nila Feby Puspitasari, S.Kom, M.Cs'        	    , '$password', '2019-12-28 13:25:30', null),
        ('190302163',	'Anggit Dwi Hartanto, M.Kom'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302164',	'Bhanu Sri Nugraha, M.Kom'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302174',	'Akhmad Dahlan, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302181',	'Joko Dwi Santoso, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302182',	'Tonny Hidayat, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302183',	'Moh. Fal Sadikin, Dr.,S.T., M.Eng'     	        , '$password', '2019-12-28 13:25:30', null),
        ('190302185',	'Windha Mega Pradnya D, M.Kom'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302187',	'Mei P Kurniawan, M.Kom'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302190',	'Pandan P Purwacandra, M.Kom'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302192',	'Ali Mustopa, M.Kom'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302197',	'Dhani Ariatmanto, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302214',	'Ayu Aprilia, S.Kom'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302215',	'Rizqi Sukma Kharisma, M.Kom'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302216',	'Bayu Setiaji, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302218',	'Puguh Hasta Gunawan, S.Kom'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302219',	'Bram Pratowo, S.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302223',	'Emilya Ully Artha, M.Kom'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302226',	'Emigawaty, M.Kom'      	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302227',	'Eli Pujastuti, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302228',	'Robert Marco, M.T.'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302229',	'Agus Purwanto, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302230',	'Hastari Utama, M.Cs'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302231',	'Erni Seniwati, S.Kom, M.Cs'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302232',	'Hartatik, ST, M.Cs'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302233',	'M. Agung Nugroho, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302234',	'Sidiq Wahyu Surya Wijaya, ST, M.Kom'       	    , '$password', '2019-12-28 13:25:30', null),
        ('190302235',	'Ferry Wahyu Wibowo, S.Si, M.Cs'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302236',	'Dwi Nurani, M.Kom'     	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302237',	'Ike Verawati, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302238',	'Acihmah Sidauruk, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302239',	'Supriatin, M.Kom'      	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302240',	'Alfie Nur Rahmi, M.Kom'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302241',	'Aullya Rachmawati, M.Kom'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302242',	'Agung Nugroho, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302243',	'Bernadhed, M.Kom'      	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302244',	'Hendra Kurniawan, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302245',	'Norhikmah, M.Kom'      	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302246',	'Rumini, M.Kom'     	                            , '$password', '2019-12-28 13:25:30', null),
        ('190302247',	'Rhomita Sari, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302248',	'Mulia Sulistiyono, M.Kom'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302249',	'Agus Fatkhurohman, M.Kom'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302250',	'Dina Maulina, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302253',	'Donni Prabowo, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302254',	'Bety Wulan Sari, M.Kom'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302255',	'Ainul Yaqin, M. Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302256',	'Sumarni Adi, S.Kom, M.Cs'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302257',	'Netci Heswindrati'     	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302258',	'Wiji Nurastuti, S.E., M.T.'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302259',	'Achmad Fauzan, Dr. M.M'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302260',	'Sri Mulyatun, Dra.,M.M'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302261',	'Suaidah Lubis, S.Psi, M.A.'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302262',	'Dadang Birowo, SP'     	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302263',	'Dadang Nugroho Darmawan, SE'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302264',	'Afif Bimantara, M.Kom'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302266',	'Rosyidah Jayanti Vijaya, SE, M.Hum'        	    , '$password', '2019-12-28 13:25:30', null),
        ('190302267',	'Anisah Aini'       	                            , '$password', '2019-12-28 13:25:30', null),
        ('190302268',	'Ika Nur Fajri, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302269',	'Vina Zahrotun Kamila, M.Kom'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302270',	'Andriyan Dwi Putra, M.Kom'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302271',	'Yogi Piskonata, S.S, M.Kom'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302272',	'Wiwi Widayani, M.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302273',	'Hafiz Ridha Pramudita, M.Kom'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302276',	'Ferian Fauzi Abdulloh, M.Kom'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302277',	'Rokhmatulloh B. Firmansyah, M.Kom'     	        , '$password', '2019-12-28 13:25:30', null),
        ('190302278',	'Nuri Cahyono, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302279',	'Mochammad Yusa, M.Kom'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302280',	'Salamah Permadyanti Putri, M.Kom'      	        , '$password', '2019-12-28 13:25:30', null),
        ('190302281',	'Muhammad Tofa Nurcholis, M.Kom'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302282',	'Ikmah, M.Kom'      	                            , '$password', '2019-12-28 13:25:30', null),
        ('190302284',	'Moch Farid Fauzi, M.Kom'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302285',	'Sharazita Dyah Anggita, M.Kom'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302286',	'Haryoko, S.Kom, M.Cs'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302287',	'Arif Akbarul Huda, S.Si, M.Eng'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302288',	'Lilis Dwi Farida, S.Kom, M.Eng'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302289',	'Arifiyanto Hadinegoro, S.Kom, MT'      	        , '$password', '2019-12-28 13:25:30', null),
        ('190302290',	'Anna Baita, M.Kom'     	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302291',	'Ahmad Sumiyanto, SE, M.Si'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302292',	'RR. Sophia Ratna Haryati, ST, M.Sc'        	    , '$password', '2019-12-28 13:25:30', null),
        ('190302293',	'Ismadiyanti, SE, M.Sc'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302294',	'Yoga Suharman, S.IP, MA'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302295',	'Fahrul Imam Santoso, SE, Akt, M.Akt'       	    , '$password', '2019-12-28 13:25:30', null),
        ('190302296',	'Lia Ayu Ivanjelita, M.Kom'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302297',	'Afrinia Lisditya Permatasari, S.Si, M.Sc'      	, '$password', '2019-12-28 13:25:30', null),
        ('190302298',	'Vidyana Arsanti, S.Si, M.Sc'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302299',	'Fitria Nucifera, S.Si, M.Sc'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302300',	'Ika Afianita Suherningtyas, S.Si, M.Sc'        	, '$password', '2019-12-28 13:25:30', null),
        ('190302301',	'Prasetyo Febriarto, ST, M.Sc'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302302',	'Sadewa Purba Sejati, S.Si, M.Sc'       	        , '$password', '2019-12-28 13:25:30', null),
        ('190302303',	'Tanti Prita Hapsari, SE, M.SI'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302304',	'Ardiyati, M.P.A'       	                        , '$password', '2019-12-28 13:25:30', null),
        ('190302305',	'Seftina Kuswardini, S.IP, M.A'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302306',	'Oki Arifin, S.Kom. M.Cs'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302307',	'Anggrismono, SE, M.Ec, Dev'        	            , '$password', '2019-12-28 13:25:30', null),
        ('190302308',	'Yusuf Amri Amrullah, SE, MM'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302309',	'Rhisa Aidilla Suprapto, ST, M.Sc'      	        , '$password', '2019-12-28 13:25:30', null),
        ('190302310',	'Septi Kurniawati Nurhadi, ST, MT'      	        , '$password', '2019-12-28 13:25:30', null),
        ('190302311',	'Rizky, M.Kom'      	                            , '$password', '2019-12-28 13:25:30', null),
        ('190302312',	'Senie Destya, M.Kom'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302313',	'Andika Drajat Murdani, S.IP, MA'       	        , '$password', '2019-12-28 13:25:30', null),
        ('190302314',	'Hasna Wijayati, S.IP, MA'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302315',	'Firman Asharudin, S.Kom, M.Kom'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302316',	'Hanantyo Sri Nugroho, S.IP, MA'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302317',	'Bagus Ramadhan, ST, M.Eng'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302318',	'Muhammad Zuhdan, S.IP, MA'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302319',	'Rivga Agusta, S.IP, MA'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302320',	'Fitria Nuraini Sekarsih, S.Si, M.Sc'       	    , '$password', '2019-12-28 13:25:30', null),
        ('190302321',	'Ferri Wicaksono, S.IP, MA'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302322',	'Khoirunnisa Cahya Firdani, SE, M.Si'       	    , '$password', '2019-12-28 13:25:30', null),
        ('190302323',	'Rezki Satris, S.IP, MA'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302324',	'Nurizka Fidali, ST, M.Sc'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302325',	'Decky Kuncoro S.IP., M.IP'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302326',	'Agustina Rahmawati, S.A.P, M.Si'       	        , '$password', '2019-12-28 13:25:30', null),
        ('190302327',	'Banu Santoso, S.T., M.Eng'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302328',	'Wahyu Sukestyastama Putra, S.T., M.Eng'        	, '$password', '2019-12-28 13:25:30', null),
        ('190302329',	'Irma Rofni Wulandari, S.Pd., M.Eng'        	    , '$password', '2019-12-28 13:25:30', null),
        ('190302330',	'Ninik Tri Hartanti, M.Kom'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302331',	'Popi Andiyansari, S.Sos, MA'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302332',	'M. Fairul Filza, S.Kom, M.Kom'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302333',	'Fitri Juniwati Ayuningtyas, SE, M.Ec.Dev'      	, '$password', '2019-12-28 13:25:30', null),
        ('190302334',	'Laksmindra Saptyawati, SE, MBA'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302335',	'Rina Pramitasari, S.Si., M.Cs'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302336',	'Angga Intueri Mahendra P., S.Sos, M.I.Kom'     	, '$password', '2019-12-28 13:25:30', null),
        ('190302337',	'Tanti Prita Hapsari, SE, M.Si'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302338',	'Widiyana Riasasi, S.Si, M.Sc'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302339',	'Angga Intueri Mahendra P., S.Sos, M.I.Kom'     	, '$password', '2019-12-28 13:25:30', null),
        ('190302340',	'Ani Hastuti Arthasari, S.T., M.Sc'     	        , '$password', '2019-12-28 13:25:30', null),
        ('190302345',	'Niken Larasati, S.Kom, M.Eng'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302346',	'Ganjar Widiatmansyah, S.Kom, M.Eng'        	    , '$password', '2019-12-28 13:25:30', null),
        ('190302347',	'Agung Budi Prasetio, S.Kom, M.Eng'     	        , '$password', '2019-12-28 13:25:30', null),
        ('190302348',	'Aditya Rizki Yudiantika, ST, M.Eng'        	    , '$password', '2019-12-28 13:25:30', null),
        ('190302349',	'Nur Faidati, S.IP., M.A'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302350',	'Dwi Miyanto, S.ST., M.T'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302351',	'Afrig Aminuddin, S.Kom., M.Eng'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302352',	'I Made Artha Agastya, S.T., M.Eng'     	        , '$password', '2019-12-28 13:25:30', null),
        ('190302353',	'Ryan Putranda Kristianto, S.Kom., M.Kom'       	, '$password', '2019-12-28 13:25:30', null),
        ('190302354',	'Atik Nurmasani, S.Kom., M.Kom'     	            , '$password', '2019-12-28 13:25:30', null),
        ('190302355',	'Rakhma Shafrida Kurnia, S.Kom., M.Kom'     	    , '$password', '2019-12-28 13:25:30', null),
        ('190302356',	'Agit Amrullah, S.Kom., M.Kom'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302357',	'Kalis Purwanto, Dr, MM'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302358',	'Drs. Audith M. Turmudhi, MM'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302359',	'Alfriadi Dwi Atmoko, SE., M.Si., Ak., CA.'     	, '$password', '2019-12-28 13:25:30', null),
        ('190302360',	'Dwi Pela Agustina, S.I.Kom., M.A'      	        , '$password', '2019-12-28 13:25:30', null),
        ('190302361',	'Erfina Nurussa`adah, M.I.Kom'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302362',	'Rivi Neritarani,S.Si., M.Eng'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302363',	'Nurbayti., S.IKom., M.A'       	                , '$password', '2019-12-28 13:25:30', null),
        ('190302364',	'Stara Asrita, S.I.Kom., M.A'       	            , '$password', '2019-12-28 13:25:30', null),
        ('190302365',	'Gardyas Bidari Adninda, S.T., M.A'     	        , '$password', '2019-12-28 13:25:30', null),
        ('190302366',	'Atika Fatimah, SE., M.Ec.Dev'      	            , '$password', '2019-12-28 13:25:30', null),
        ('190302367',	'Aditya Maulana Hasymi, S.IP., M.A'     	        , '$password', '2019-12-28 13:25:30', null),
        ('190302368',	'Citra Desy Aisyah Alkis, S.T., M.Eng'      	    , '$password', '2019-12-28 13:25:30', null),
        ('190302369',	'Jurni Hayati, S.E., M.Sc'      	                , '$password', '2019-12-28 13:25:30', null),
        ('190302370',	'Renindya Azizza Kartikakirana,ST., M.Eng'      	, '$password', '2019-12-28 13:25:30', null),
        ('190302375',	'Theopilus Bayu Sasongko, S.Kom, M.Eng'     	    , '$password', '2019-12-28 13:25:30', null),
        ('190302376',	'Afiuddin Ahmadi, S.T.'     	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302377',	'Ende Sumbogo Poncosono'        	                , '$password', '2019-12-28 13:25:30', null),
        ('190302378',	'Ahmad Taufiq Bagus Ramadhan, S. Sn'        	    , '$password', '2019-12-28 13:25:30', null),
        ('190302379',	'Heru Prasetia, S.IP'       	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302380',	'Ermambang Bendung Wijaya, S.Sn'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302381',	'Dida Kharisma, S.Kom'      	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302382',	'Edy Anan, S.E., M.Ak., Ak., CA'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302383',	'Nimah Mahnunah, S.T., M.T'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302384',	'Waryono, S.Pd'     	                            , '$password', '2019-12-28 13:25:30', null),
        ('190302385',	'Salsabila Bunga Sangsthita, S.S'       	        , '$password', '2019-12-28 13:25:30', null),
        ('190302386',	'S. L Harjanta, S.IP, M.Si'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302387',	'Raditya Maulana Anuraga, M.Kom'        	        , '$password', '2019-12-28 13:25:30', null),
        ('190302388',	'Elita Ariani, A.Md'        	                    , '$password', '2019-12-28 13:25:30', null),
        ('190302389',	'Drs. Dwiyono Iriyanto, MM'     	                , '$password', '2019-12-28 13:25:30', null),
        ('190302390',	'Ibnu Hadi Purwanto, M.Kom'     	                , '$password', '2019-12-28 13:25:30', null)
        ;");

    }
}

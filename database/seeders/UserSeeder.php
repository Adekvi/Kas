<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Kastomo', 'password' => '2002'],
            ['name' => 'Suwarto', 'password' => '1997'],
            ['name' => 'Sutrisno', 'password' => '1997'],
            ['name' => 'Suwito', 'password' => '1999'],
            ['name' => 'Kasiyan', 'password' => '1999'],
            ['name' => 'Sukarmin', 'password' => '1997'],
            ['name' => 'Darozin', 'password' => '2005'],
            ['name' => 'Ngadiru', 'password' => '2005'],
            ['name' => 'Mas Zudhi', 'password' => '2006'],
            ['name' => 'Eko Haryono', 'password' => '2006'],
            ['name' => 'Budi Prayogo', 'password' => '2006'],
            ['name' => 'Kuswoyo', 'password' => '2006'],
            ['name' => 'Supramono', 'password' => '2006'],
            ['name' => 'Ahmad Ngateno', 'password' => '2006'],
            ['name' => 'Jemuah Hariyanto', 'password' => '2006'],
            ['name' => 'Muhammad Maimun', 'password' => '2007'],
            ['name' => 'Puji Lestari', 'password' => '2007'],
            ['name' => 'Saeful Arifin', 'password' => '2007'],
            ['name' => 'Sugiyanto', 'password' => '2007'],
            ['name' => 'Dwi Abdul Rouf', 'password' => '2007'],
            ['name' => 'Moh. Irfan', 'password' => '2007'],
            ['name' => 'Feri Wahyu Saputra', 'password' => '2007'],
            ['name' => 'Imam Rohman', 'password' => '2007'],
            ['name' => 'Safi\'i', 'password' => '2008'],
            ['name' => 'Moh. Asrori', 'password' => '2008'],
            ['name' => 'Leo Adi Saputra', 'password' => '2008'],
            ['name' => 'Raeni', 'password' => '2008'],
            ['name' => 'Alex Safii', 'password' => '2008'],
            ['name' => 'Junaedi', 'password' => '2009'],
            ['name' => 'Nur Yanto', 'password' => '2009'],
            ['name' => 'Sonita', 'password' => '2009'],
            ['name' => 'Soni Hermanto', 'password' => '2009'],
            ['name' => 'Epik', 'password' => '2009'],
            ['name' => 'Pendi', 'password' => '2009'],
            ['name' => 'Topik', 'password' => '2009'],
            ['name' => 'Sofiani', 'password' => '2009'],
            ['name' => 'Dwi Asriani', 'password' => '2009'],
            ['name' => 'Haji', 'password' => '2009'],
            ['name' => 'Agus Sugiarto', 'password' => '2009'],
            ['name' => 'Aziz Purwanto', 'password' => '2009'],
            ['name' => 'Kasmito', 'password' => '2009'],
            ['name' => 'Mat Sholeh', 'password' => '2010'],
            ['name' => 'Suprawilo', 'password' => '2010'],
            ['name' => 'Arip', 'password' => '2010'],
            ['name' => 'Muhammad Rio', 'password' => '2010'],
            ['name' => 'Mukti', 'password' => '2010'],
            ['name' => 'Toni', 'password' => '2010'],
            ['name' => 'Dedek', 'password' => '2010'],
            ['name' => 'Lia Rahmawati', 'password' => '2010'],
            ['name' => 'Fifi Nuryani', 'password' => '2010'],
            ['name' => 'Khoirul Huda', 'password' => '2010'],
            ['name' => 'Jaya', 'password' => '2010'],
            ['name' => 'Pur', 'password' => '2010'],
            ['name' => 'Aji Frant Niago', 'password' => '2010'],
            ['name' => 'Setiawan', 'password' => '2010'],
            ['name' => 'Suyanto', 'password' => '2010'],
            ['name' => 'Nur Ching', 'password' => '2011'],
            ['name' => 'Danu', 'password' => '2011'],
            ['name' => 'Endri', 'password' => '2011'],
            ['name' => 'Kalim', 'password' => '2011'],
            ['name' => 'Probo Kuncoro', 'password' => '2011'],
            ['name' => 'Iseh', 'password' => '2011'],
            ['name' => 'Adi', 'password' => '2011'],
            ['name' => 'Arga', 'password' => '2011'],
            ['name' => 'Budi Cahyono', 'password' => '2011'],
            ['name' => 'Yahya', 'password' => '2012'],
            ['name' => 'Purna Irawan', 'password' => '2012'],
            ['name' => 'Dona', 'password' => '2012'],
            ['name' => 'Ricky', 'password' => '2012'],
            ['name' => 'Bidin', 'password' => '2012'],
            ['name' => 'Yogi Pradana', 'password' => '2014'],
            ['name' => 'Kliwon', 'password' => '2014'],
            ['name' => 'Meriko Ardi', 'password' => '2014'],
            ['name' => 'Adek Viki A', 'password' => '2018'],
            ['name' => 'Abdul Rohim', 'password' => '2018'],
            ['name' => 'Choirul Ridwan', 'password' => '2018'],
            ['name' => 'Rifky Andrean', 'password' => '2018'],
            ['name' => 'Dian Avrilia A', 'password' => '2018'],
            ['name' => 'Della Purnowati', 'password' => '2018'],
            ['name' => 'Nur Ali', 'password' => '2019'],
            ['name' => 'Rizky Adi N', 'password' => '2019'],
            ['name' => 'Widia', 'password' => '2020'],
            ['name' => 'Nanda', 'password' => '2020'],
            ['name' => 'Ari Yuni Awan', 'password' => '2021'],
            ['name' => 'Diaz Rasya', 'password' => '2021'],
            ['name' => 'Amirul Akmal', 'password' => '2021'],
            ['name' => 'Fio Firmansyah', 'password' => '2021'],
            ['name' => 'Faris Saputra', 'password' => '2021'],
            ['name' => 'Jingga Anggun', 'password' => '2021'],
            ['name' => 'Priyadi', 'password' => '2010'],
            ['name' => 'Abu Aksan', 'password' => '2008'],
            ['name' => 'Tomi', 'password' => '2014'],
            ['name' => 'Yuda T Andika', 'password' => '2023'],
            ['name' => 'Budi Cahyono', 'password' => '2023'],
            ['name' => 'Kundono', 'password' => '2024'],
            ['name' => 'Adi Kuryadi', 'password' => '2024'],
            ['name' => 'Andri', 'password' => '2024'],
            ['name' => 'Dabisa Dwi', 'password' => '2024'],
            ['name' => 'Imelia', 'password' => '2024'],
        ];

        foreach ($users as $user) {
            $email = Str::slug($user['name'], '_') . '@example.com';

            User::updateOrCreate(
                ['email' => $email], // gunakan email sebagai kunci unik
                [
                    'name' => $user['name'],
                    'password' => bcrypt($user['password']),
                    'role' => 'user',
                    'no_wa' => '',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}

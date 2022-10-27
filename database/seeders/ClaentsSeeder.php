<?php

namespace Database\Seeders;

use App\Models\Claent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClaentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Claent::create([
            'name' => 'Mayara Silva',
            'surname' => '',
            'cpf_cnpj' => '123.456.789-10',
            'phone' => '(12)34567-8910',
            'email' => 'mayara@email.com',
            'zip' => '12345678',
            'address' => 'Rua 7',
            'state' => 'GO',
            'complement' => '',
            'city' => 'Central',
            'num' => '25',
            'name_1' => 'mayara2',
            'phone_1' => '(12)34567-8910',
            'email_1' => 'mayara2@email.com',
            'name_2' => 'mayara3',
            'phone_2' => '(12)34567-8910',
            'email_2' => 'mayara3@email.com',
            'name_3' => 'mayara4',
            'phone_3' => '(12)34567-8910',
            'email_3' => 'mayara4@email.com'
        ]);

        Claent::create([
            'name' => 'Carlos Santos',
            'surname' => 'carlos',
            'cpf_cnpj' => '123.456.789-10',
            'phone' => '(12)34567-8910',
            'email' => 'carlos@email.com',
            'zip' => '12345678',
            'address' => 'Rua Central',
            'state' => 'SP',
            'complement' => '',
            'city' => 'Santos',
            'num' => '787',
            'name_1' => 'carlos2',
            'phone_1' => '(12)34567-8910',
            'email_1' => 'carlos2@email.com',
            'name_2' => 'carlos3',
            'phone_2' => '(12)34567-8910',
            'email_2' => 'carlos3@email.com',
            'name_3' => 'carlos4',
            'phone_3' => '(12)34567-8910',
            'email_3' => 'carlos4@email.com'
        ]);

        Claent::create([
            'name' => 'João Max',
            'surname' => 'joão',
            'cpf_cnpj' => '123.456.789-10',
            'phone' => '(12)34567-8910',
            'email' => 'joao@email.com',
            'zip' => '12345678',
            'address' => 'Rua 7',
            'state' => 'GO',
            'complement' => '',
            'city' => 'Central',
            'num' => '25',
            'name_1' => 'joao2',
            'phone_1' => '(12)34567-8910',
            'email_1' => 'joao2@email.com',
            'name_2' => 'joao3',
            'phone_2' => '(12)34567-8910',
            'email_2' => 'joao3@email.com',
            'name_3' => 'joao4',
            'phone_3' => '(12)34567-8910',
            'email_3' => 'joao4@email.com'
        ]);

        Claent::create([
            'name' => 'Maria Gomes',
            'surname' => 'maria',
            'cpf_cnpj' => '123.456.789-10',
            'phone' => '(12)34567-8910',
            'email' => 'maria@email.com',
            'zip' => '12345678',
            'address' => 'Rua 7',
            'state' => 'GO',
            'complement' => '',
            'city' => 'Central',
            'num' => '25',
            'name_1' => 'maria2',
            'phone_1' => '(12)34567-8910',
            'email_1' => 'maria2@email.com',
            'name_2' => 'maria3',
            'phone_2' => '(12)34567-8910',
            'email_2' => 'maria3@email.com',
            'name_3' => 'maria4',
            'phone_3' => '(12)34567-8910',
            'email_3' => 'maria4@email.com'
        ]);
    }
}

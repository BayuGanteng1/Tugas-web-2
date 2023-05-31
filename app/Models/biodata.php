<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    private static $biodata = [
        'name' => 'Bayu Aji Saputra',
        'nim' => '21103041061',
        'address' => "Sampangan",
        'hobby' => [
            [
                'name' => 'Main game',
                'url' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8R2FtaW5nfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'name' => 'Editing',
                'url' =>  'https://images.unsplash.com/photo-1551302175-952301267d19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8RWRpdGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'name' => 'Mendengarkan musik',
                'url' => 'https://plus.unsplash.com/premium_photo-1661775588902-81d8912e2da6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxpc3RlbmluZyUyMG11c2ljfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60'
            ]
        ]
    ];

    public static function getBiodata()
    {
        return self::$biodata;
    }
}

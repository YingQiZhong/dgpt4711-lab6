<?php
namespace App\Models;
use App\Models\Simple\CSVModel;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {
    protected $origin = WRITEPATH . 'data/placesData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Hongkong',
            'description' => '',
            'link' => 'https://baike.baidu.com/item/%E7%8A%AF%E7%BD%AA%E5%BF%83%E7%90%86/16916?fr=aladdin',
            'image' => 'hongkong.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Macau',
            'description' => 'A special administrative region on the western side of the Pearl River estuary in southern China.',
            'link' => 'http://en.macaotourism.gov.mo/index.php',
            'image' => 'macau.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Thailand',
            'description' => 'A country at the centre of the Southeast Asian Indochinese peninsula composed of 76 provinces.',
            'link' => 'http://www.tourismthailand.org/',
            'image' => 'thailand.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Japan',
            'description' => 'An island country in East Asia.',
            'link' => 'http://www.jnto.go.jp/eng/',
            'image' => 'japan.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Vietnam',
            'description' => 'The easternmost country on the Indochina Peninsula.',
            'link' => 'http://www.vietnamtourism.gov.vn/english/',
            'image' => 'vietnam.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}

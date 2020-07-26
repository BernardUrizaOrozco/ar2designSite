<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Proyecto extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'subtitle',
        'owner',
        'description',
        'publish_start_date',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'imagenDeProyecto' => [
            'HP_feature' => [
                [
                    'name' => 'HP_feature',
                    'ratio' => 16 / 9,
                ],
            ],
            'article_feature' => [
                [
                    'name' => 'article_feature',
                    'ratio' => 120 / 50,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 750 / 520,
                ],
            ],
            'phone' => [
                [
                    'name' => 'phone',
                    'ratio' => 470 / 400,
                ],
            ],
        ],
    ];
}

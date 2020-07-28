<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Project extends Model implements Sortable
{
    use HasPosition, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'subtitle',
        'owner',
        'description',
        'publish_start_date',
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

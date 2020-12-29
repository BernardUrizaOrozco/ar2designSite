<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleTags;
use App\Models\Project;

class ProjectRepository extends ModuleRepository
{
    use HandleMedias, HandleTags;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }
}

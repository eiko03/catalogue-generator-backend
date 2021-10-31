<?php

namespace App\Repository\Eloquent;

use App\Models\Catalogue;
use App\Repository\CatalogueRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CatalogueRepository extends BaseRepository implements CatalogueRepositoryInterface
{

    public function __construct(Catalogue $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function chunk($size): Collection
    {
        return $this->model->get()->chunk($size);
    }

    public function createWithPivot(array $attributes,array $products): string
    {
        $this->model->create(array_slice($attributes,0,count($attributes)-1))->products()->sync($products);
        return "Catalogue Created";
    }
}

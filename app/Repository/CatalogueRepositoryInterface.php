<?php
namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CatalogueRepositoryInterface
{
    public function all(): Collection;
    public function chunk($size): Collection;
    public function create(array $attributes):Model;
    public function createWithPivot(array $attributes,array $products):string;
}

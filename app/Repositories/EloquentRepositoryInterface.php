<?php

namespace App\Repositories;


use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface EloquentRepositoryInterface
{
    /**
     * @return Collection
     */
    public function baseApp(): Collection;

    public function baseCreate(array $attributes): Model;

    public function baseUpdate(array $attribute, Model $model): Model;

    public function baseDelete(Model $model);

    /**
     * @param $id
     * @return Model|null
     */
    public function find($id): ?Model;
}

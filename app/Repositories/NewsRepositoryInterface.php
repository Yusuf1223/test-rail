<?php


namespace App\Repositories;


use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NewsRepositoryInterface
{
    public function all(): Collection;

    public function create(array $attribute): Model;

    public function update(array $attribute, News $service): Model;

    public function delete(News $service);
}

<?php


namespace App\Repositories\Eloquent;


use App\Models\News;
use App\Repositories\NewsRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use function PHPUnit\Framework\at;

class NewsRepository extends BaseRepository implements NewsRepositoryInterface
{
    public function __construct(News $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->baseApp();
    }

    public function create(array $attribute): Model
    {
        return $this->baseCreate($attribute);
    }

    public function update(array $attribute, News $service): Model
    {
        return $this->baseUpdate($attribute, $service);
    }

    public function delete(News $service)
    {
        $this->baseDelete($service);
    }
}

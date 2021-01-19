<?php

namespace App\Repositories\Eloquent;

use App\Http\Controllers\ServiceController;
use App\Models\Image;
use App\Models\Service;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\ServiceRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
{
    /**
     * @var Image
     */
    protected $file;

    /**
     * UserRepository constructor.
     *
     * @param Service $model
     */
    public function __construct(Service $model)
    {
        parent::__construct($model);
        $this->file = new Image();
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->baseApp();
    }

    public function create(array $attribute): Model
    {
        return $this->baseCreate($attribute);
    }

    public function update(array $attribute, Service $service): Model
    {
        return $this->baseUpdate($attribute, $service);
    }

    public function delete(Service $service)
    {
        $this->baseDelete($service);
    }
}

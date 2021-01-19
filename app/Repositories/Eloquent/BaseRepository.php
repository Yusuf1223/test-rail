<?php

namespace App\Repositories\Eloquent;

use App\Http\Controllers\ServiceController;
use App\Models\Image;
use App\Models\Service;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    protected $file;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->file = new Image();
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function baseApp(): Collection
    {
        return $this->model->latest('id')
            ->get();
    }

    public function baseCreate(array $attributes): Model
    {
        $service = $this->model->create($attributes);

        if (array_key_exists('image', $attributes)) {
            $file = $this->file->uploadImage($attributes['image']);
            $service->image()->create([
                'url' => '/' . $file,
            ]);
        }
        return $service;
    }
    public function baseUpdate(array $attribute, Model $model): Model
    {
        $model->update($attribute);

        if (array_key_exists('image', $attribute)) {
            if ($model->image()->exists()) {
                $model->image->removeImage();
                $model->image()->delete();
            }
            $file = $this->file->uploadImage($attribute['image']);

            $model->image()->create([
                'url' => '/' . $file,
            ]);
        }
        return $model;
    }

    public function baseDelete(Model $model)
    {
        if ($model->image()->exists()) {
            $model->image->removeImage();
            $model->image()->delete();
        }
        $model->delete();
    }

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}

<?php
namespace App\Repositories;


use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ServiceRepositoryInterface
{
    public function all(): Collection;

    public function create(array $attribute): Model;

    public function update(array $attribute, Service $service): Model;

    public function delete(Service $service);
}

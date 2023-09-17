<?php

namespace App\Support;

use App\Support\StorageInterface;
use Illuminate\Database\Eloquent\Model;
use Session;

class StorageRepository implements StorageInterface
{
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

  
}
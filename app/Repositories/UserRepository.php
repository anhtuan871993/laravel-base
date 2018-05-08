<?php

namespace App\Repositories;

class UserRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return \App\Models\User::class;
    }

}

<?php

namespace Codiant\Todolist;

use Illuminate\Database\Eloquent\Model;

/**
 * Model of the table tasks.
 */
class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'name',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**

     * The table associated with the model.

     *

     * @var string

     */
    protected $table = 'songs';
    protected $primaryKey = 'id';
}

<?php

namespace Venturecraft\Revisionable\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Kangyasin\Revisionable\RevisionableTrait;

/**
 * Add a revisionable model for testing purposes
 * I've chosen User, purely because the migration will already exist
 *
 * Class User
 * @package Venturecraft\Revisionable\Tests\Models
 */
class User extends Model
{
    use RevisionableTrait;

    protected $guarded = [];
}

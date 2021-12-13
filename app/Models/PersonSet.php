<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\PersonSet
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property string $login
 * @property string $password_hash
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonSet wherePasswordHash($value)
 */
class PersonSet extends Model
{
    use HasFactory;
}

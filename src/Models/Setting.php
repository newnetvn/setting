<?php

namespace Newnet\Setting\Models;

use Illuminate\Database\Eloquent\Model;
use Newnet\Media\Traits\HasMediaTrait;

/**
 * Newnet\Setting\Models\Setting
 *
 * @property int $id
 * @property string $name
 * @property string|null $value
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Newnet\Media\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Newnet\Setting\Models\Setting whereValue($value)
 * @mixin \Eloquent
 */
class Setting extends Model
{
    use HasMediaTrait;

    protected $fillable = [
        'name',
        'value',
        'type',
    ];
}

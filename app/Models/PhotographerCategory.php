<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotographerCategory
 * 
 * @property int $id
 * @property string $name
 * @property int $photographer_ray_id
 * @property Carbon $created
 * @property Carbon $modified
 * 
 * @property PhotographerRay $photographer_ray
 *
 * @package App\Models
 */
class PhotographerCategory extends Model
{
	protected $table = 'photographer_categories';
	
	const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

	protected $casts = [
		'photographer_ray_id' => 'int'
	];

	protected $fillable = [
		'name',
		'photographer_ray_id',
	];

	public function photographer_ray()
	{
		return $this->belongsTo(PhotographerRay::class);
	}

	public function __toString()
    {
        return $this->name;
    }
}

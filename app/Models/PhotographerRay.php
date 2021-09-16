<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotographerRay
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $created
 * @property Carbon $modified
 * 
 * @property Collection|PhotographerCategory[] $photographer_categories
 *
 * @package App\Models
 */
class PhotographerRay extends Model
{
	protected $table = 'photographer_rays';
	
	const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

	protected $fillable = [
		'name',
	];

	public function photographer_categories()
	{
		return $this->hasMany(PhotographerCategory::class);
	}

    public function __toString()
    {
        return $this->name;
    }
}

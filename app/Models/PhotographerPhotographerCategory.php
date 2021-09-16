<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotographerPhotographerCategory
 * 
 * @property int $id
 * @property int $photographer_id
 * @property int $photographer_category_id
 * @property Carbon $created
 * @property Carbon $modified
 * 
 * @property Photographer $photographer
 * @property PhotographerCategory $photographer_category
 *
 * @package App\Models
 */
class PhotographerPhotographerCategory extends Model
{
	protected $table = 'photographer_photographer_category';

	const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

	protected $casts = [
		'id' => 'int',
		'photographer_id' => 'int',
		'photographer_category_id' => 'int'
	];

	protected $fillable = [
		'photographer_id',
		'photographer_category_id',
	];

	public function photographer()
	{
		return $this->belongsTo(Photographer::class);
	}

	public function photographer_category()
	{
		return $this->belongsTo(PhotographerCategory::class);
	}
}

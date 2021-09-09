<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $created
 * @property Carbon $modified
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Skill extends Model
{
	protected $table = 'skills';
	public $timestamps = false;

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'name',
		'created',
		'modified'
	];

	public function users()
	{
		return $this->belongsToMany(User::class)
					->withPivot('id', 'created', 'modified');
	}
}

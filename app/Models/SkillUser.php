<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SkillUser
 * 
 * @property int $id
 * @property int $skill_id
 * @property int $user_id
 * @property Carbon $created
 * @property Carbon $modified
 * 
 * @property Skill $skill
 * @property User $user
 *
 * @package App\Models
 */
class SkillUser extends Model
{
	protected $table = 'skill_user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'skill_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'id',
		'created',
		'modified'
	];

	public function skill()
	{
		return $this->belongsTo(Skill::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

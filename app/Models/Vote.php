<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vote
 * 
 * @property int $id
 * @property int $user_id
 * @property int $election_id
 * @property Carbon $created
 * @property Carbon $modified
 * 
 * @property User $user
 * @property Election $election
 *
 * @package App\Models
 */
class Vote extends Model
{
	protected $table = 'votes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'user_id' => 'int',
		'election_id' => 'int'
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

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function election()
	{
		return $this->belongsTo(Election::class);
	}
}

<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Quiz
 *
 * @package App
 * @property string $title
*/
class Quiz extends Model
{
    use SoftDeletes;

    protected $table = 'quizs';
    protected $fillable = ['title'];

    public static function boot()
    {
        parent::boot();
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'quiz_id')->withTrashed();
    }
}

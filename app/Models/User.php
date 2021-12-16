<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\Boolean;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'administrateur',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function comments() {
        return $this-> hasMany(Comment::class);
    }

    function seen() {
        return $this->belongsToMany(Episode::class, 'seen')
            ->as('when')
            ->withPivot('date_seen')
            ->get();
    }

    public function isSeenSerie($serie_id){
        $epsSerie = Serie::find($serie_id)->episodes();
        $epsSeen = $this->seen();
        $result = false;
        foreach ($epsSerie as $epSerie){
            $result = false;
            foreach ($epsSeen as $epSeen){
                if ($epSeen->id == $epSerie->id){
                    $result = true;
                    break;
                }
            }
            if (!$result) break;
        }
        return $result;
    }

    public function checkSeen($serie_id){
        $epsSerie = Serie::find($serie_id)->episodes();
        $epsSeen = $this->seen();
        foreach ($epsSerie as $epSerie){
            $find = false;
            foreach ($epsSeen as $epSeen){
                if ($epSeen->id == $epSerie->id){
                    $find = true;
                    break;
                }
            }
            if (!$find){
                DB::table('seen')->insert(['user_id' => $this->id, 'episode_id' => $epSerie->id, 'date_seen' => now()]);
            }
        }
    }
}

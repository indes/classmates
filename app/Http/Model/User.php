<?php

namespace Classmate\http\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Redis;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cm_user';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];
    public static function get($id)
    {
        $redis = new Redis();
        $redis_user = Redis::hGetAll("user:profile:" . $id);
        if ($redis_user) {
            $user = new User();
            foreach ($redis_user as $key=>$value){
                $user->$key = $value;
            }
//            $user->name = $redis_user['userName'];
            return $user;
        } else {
            $user = User::find($id);
            Redis::hmset("user:profile:" . $id,
                'id', $user->id,
                'userName', $user->userName,
                'stuName', $user->stuName,
                'stuSex', $user->stuSex,
                'stuImg', $user->stuImg,
                'stuQQ', $user->stuQQ,
                'stuPhone', $user->stuPhone,
                'stuBio', $user->stuBio,
                'stuClassId', $user->stuClassId,
                'email', $user->email
            );
            return $user;
        }

    }
}

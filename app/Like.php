<?php

namespace App;

use App\Models\PostForm;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // 配列内の要素を書き込み可能にする
    protected $fillable = ['post_id', 'user_id'];

    public function post()
    {
        return $this->belongsTo(PostForm::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

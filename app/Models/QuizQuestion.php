<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'openai_response'];

    // カスタムアクセサを定義して、openai_responseカラムのJSONを配列に変換
    public function getOpenaiResponseAttribute($value)
    {
        return json_decode($value, true);
    }

    // カスタムミューテタを定義して、openai_responseカラムにJSONを保存する際に配列からJSONに変換
    public function setOpenaiResponseAttribute($value)
    {
        $this->attributes['openai_response'] = json_encode($value);
    }
}
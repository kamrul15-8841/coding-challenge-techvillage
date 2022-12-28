<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'mark',
        'subject',
        'student_id',
    ];

    public static function createOrUpdateResult($request, $id = null)
    {
        Result::updateOrCreate(['id'=> $id], [
            'mark' => $request->mark,
            'subject' => $request->subject,
            'student_id' => $request->student_id,
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailReply extends Model
{
     protected $table = 'emailreplies';

    protected $fillable = ['contact_id', 'to', 'subject', 'message', 'attachment'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
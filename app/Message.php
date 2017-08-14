<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    // For allowing Mass Assignments. Like in Rails
    protected $fillable = ['user_id', 'title', 'body', 'to_id'];

    // Fields not allowed in Mass Assignment
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messageResponse() {
        return $this->hasMany(MessageResponse::class);
    }

    public static function getMessagesFrom($daysFromNow, $user_id, $solved = false)
    {
        $from = Carbon::now()->subDay($daysFromNow)->toDateTimeString(); // or ->format(..)
        $to = Carbon::now()->toDateTimeString();
        $messages = Message::
            whereBetween('updated_at', array($from, $to))
            ->where('solved', '=', $solved)
            ->where('user_id', '=', $user_id)
            ->orWhere('to_id', '=', $user_id)
            ->get();

        return $messages ? $messages : false;
    }

    public function addMessage($title, $body, $user_id)
    {
        if(Message::create([
            'id' => $this->id,
            'user_id' => $user_id,
            'title'    => $title,
            'body'    => $body
        ])) {
            return back()->with('status', 'Tak for kommentaren');
        } else {
            return back()->with('status', 'Noget gik sku galt!');
        }
    }

    public static function getMessages($user_id) {
            return DB::table('messages')
                ->select(DB::raw(' * '))
                ->where('user_id', '=', $user_id)
                ->orWhere('to_id', '=', $user_id)
                ->get();
    }
}

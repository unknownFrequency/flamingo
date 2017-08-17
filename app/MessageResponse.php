<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;
use App\User;

class MessageResponse extends Model
{
    // For allowing Mass Assignments. Like in Rails
    protected $fillable = ['user_id', 'title', 'body'];

    // Fields not allowed in Mass Assignment
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function message() {
        return $this->belongsTo(Message::class);
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

    public static function getLatestResponse($user_id) {
        if(User::find($user_id)->role_id == 1) {
            // Vi har en admin
            $messages = Message::with('MessageResponse')
                // alle beskeder som ikke er "solved"
                ->where('solved', '=', 0)
                ->get();

            foreach ($messages as $message) {
                // bliver en Collection med relations['MessageResponse'] array
                $responses[$message->id] = $message->relations['MessageResponse'];
            }
            foreach ($responses as $response) {
                if(last(last($response)) !== false) {
                    if( User::find(last(last($response))->responder_id)->role_id != 1 ) {
                        $lastResponses[] = last(last($response));
                    }
                }
            }
            if(isset($lastResponses) && !empty($lastResponses)){
                return $lastResponses;
            } else {
                return false;
            }


            // 

//            MessageResponse::all()
//                ->where('responder_id', '=', $user_id)

        }
    }

}






















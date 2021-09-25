<?php

namespace App\Jobs;

use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $id;
    public function __construct(array $id)
    {
        $this->id = $id;
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->id as $item){
            $order = Order::find($item);
            $user = User::find($order->userId);
            $user_mail = $user->email;
            $user_name = $user->first_name . ' ' . $user->last_name;
            Mail::send('mails.mail',['order' => $order , 'user' => $user],function ($message) use($user_mail, $user_name){
                $message->from('phuonghdth2009010@outlook.com.vn','Cơm chay');
                $message->to($user_mail,$user_name);
                $message->subject('Cơm chay - Đơn hàng mới');
            });
        }
        //
    }
}

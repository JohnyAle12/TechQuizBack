<?php

declare(strict_types=1);

namespace App\Observers;

use App\Mail\AdminNotification;
use App\Mail\Model\AdminModel;
use App\Mail\UserNotification;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user): void
    {
        Mail::to($user)->send(new UserNotification($user));

        $adminEmail = config('mail.sysadmin.email');
        $adminModel = new AdminModel(new UserService);
        Mail::to($adminEmail)->send(new AdminNotification($adminModel));
    }
}

<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Event;
use Illuminate\Auth\Access\Response;

class EventPolicy
{
    public function show(User $user, Event $event): response
    {
        return ($user->id === $event->users_id or $user->id===1)
            ? Response::allow()
            : Response::denyAsNotFound();
    }
    
    public function add(User $user, Event $event): response
    {
        return ($user->id === $event->users_id or $user->id===1)
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    public function edit(User $user, Event $event): response
    {
        return ($user->id === $event->users_id or $user->id===1)
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    public function delete(User $user, Event $event): response
    {
        return ($user->id === $event->users_id or $user->id===1)
            ? Response::allow()
            : Response::denyAsNotFound();
    }
}

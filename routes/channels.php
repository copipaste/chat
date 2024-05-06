<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('messages', function ($user) {
    return true;

    // if (auth()->id() === 2) {
    //     return true;
    // }else{
    //     return false;
    // }
});

<?php

namespace App\Http\Controllers;


use App\Jobs\ExampleJob;
use Illuminate\Support\Facades\Queue;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function testConnection()
    {
        Queue::push(new ExampleJob());
        return 'Test Connection';
    }

    //
}

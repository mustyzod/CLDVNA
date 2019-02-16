<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Browser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;

    /**
     * All functions will be here and called from the controller and serve as a central function file
     * e.g get productName() etc, and let other team members be informed about the creted function and its usage
     * this is to enable that we dont have multiple functions doing the same thing and if one team member needs
     * a function that is existing before, all he will need is just to call it.
     *
     * when creating our controller we will call this file with
     * "use App\Http\myFunctions;" at the top
     * @return void
     */
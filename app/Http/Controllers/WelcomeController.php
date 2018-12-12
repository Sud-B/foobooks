<?php
/**
 * Created by PhpStorm.
 * User: s999b
 * Date: 12/5/2018
 * Time: 6:32 PM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}

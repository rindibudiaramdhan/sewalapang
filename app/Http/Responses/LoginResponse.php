<?php
 
namespace App\Http\Responses;
 
use Filament\Http\Responses\Auth\Contracts\LoginResponse as FilamentLoginResponseContract;
 
class LoginResponse implements FilamentLoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        // return whatever you want as url
        $url = 'blabla';
 
        return redirect()->intended($url);
    }
}
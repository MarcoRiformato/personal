<?php

namespace App\Http\Middleware;

use App\Models\Housing;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\ElseIf_;

class CheckHousingAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $housing = Housing::findOrFail($request->route('id'));
        
        if (Auth::user() && Auth::user()->is_admin){
            return $next($request);
        }
        elseif ($housing->user_id == auth()->id()) {
            return $next($request);
        }
        else{
            return redirect()->route('HousingIndex');
        }
    
    }
}

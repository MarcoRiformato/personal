<?php

namespace App\Http\Middleware;

use App\Models\Housing;
use Closure;
use Illuminate\Http\Request;

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
        
        if ($housing->user_id !== auth()->id()) {
            return redirect()->route('HousingIndex')->with('message', 'Non hai il permesso');
        }
        
        return $next($request);
    }
}

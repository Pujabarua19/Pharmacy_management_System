<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class IsloggIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
                if(!Session::has('u_email')){
           return redirect('/login');
        }
        return $next($request);
    }
// }
 // if(!$request->Session()->exists('useremail')){
 //    return redirect('/login');
        
 //        }
  
 //        return $next($request);    
 //    }

// if((Session::has('Admin'))==false){

//     return redirect('/login');
// }


// return $next($request);
// }
}
















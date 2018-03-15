<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('homepage');
Route::view('massive-tpl','layout.massive'); 
/*Route::get('/','HomeController@news')->name('news');*/
Route::get(App\Category::CATE_URL.'{cateSlug}','HomeController@cate')->name('cate.detail'); 
// Auth route
Route::get('cp-login','Auth\LoginController@login')->name('login');
Route::post('cp-login','Auth\LoginController@postLogin');
Route::any('logout',function(){
	Auth::logout(); 
	return redirect(route('login'));
})->name('logout');
use Illuminate\Support\Facades\Mail;
Route::get('send-mail',function(){
	$username='thangpq';
	Mail::send('mail_template.test-send-mail', compact($username), function ($message) {
	    $message->to('phanthang230696hn@gmail.com', 'Phan Thang');
	
	    //$message->cc('author@gmail.com', 'Author');
	
	    //$message->replyTo('thangpq@hiworld.com.vn', 'Thang Phan');
	
	    $message->subject('Test send mail');
	});
	return 'done!';
});
use Illuminate\Http\Request;
use App\PasswordReset;
use Carbon\Carbon;
use App\User;
Route::post('forget-pwd-email',function(Request $request){
	$email=$request->email;
	$user= App\User::where('email',$email)->first();
	if(!$user)
	{
		return 'Không có user';
	}
	$pwdReset= PasswordReset::where('email',$request->email)->delete();
	$token= str_random(20);
	$now=Carbon::now();
	$pwdReset = new PasswordReset();
	$pwdReset->email=$request->email;
	$pwdReset->token=$token;
	$pwdReset->created_at=$now;
	$pwdReset->save();
	$url=url('/reset-pwd/'.$token);
	//send email
	//Forget Password
	Mail::send('mail_template.reset-password-mail', compact('url','user'), function ($message) use ($user){
	    $message->to($user->email, $user->name);
	
	    //$message->cc('author@gmail.com', 'Author');
	
	    //$message->replyTo('thangpq@hiworld.com.vn', 'Thang Phan');
	
	    $message->subject('Yêu cầu cấp lại mật khẩu');
	});
	return 'done';
})->name('forget-pwd.email');
Route::get('reset-pwd/{token}',function($token){
	//check token co hop le hay khong?
	$pwdReset=PasswordReset::where('token',$token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay= Carbon::createFromFormat('Y-m-d h:i:s',$pwdReset->created_at);
	$now=Carbon::now();
	$dif= $now->diffInHours($thatDay);
	if($dif>24){
		DB::table('password_resets')->where('token',$token)->delete();
		//$pwdReset->delete();
		return "error! invalid token";
	}
	return view('auth.reset-pwd',compact('token'));
});
Route::post('auth-forget-password',function(Request $request){
	$pwdReset=PasswordReset::where('token',$request->token)->first();
	if(!$pwdReset){
		return "error! invalid token";
	}
	$thatDay= Carbon::createFromFormat('Y-m-d h:i:s',$pwdReset->created_at);
	$now=Carbon::now();
	$dif= $now->diffInHours($thatDay);
	if($dif>24){
		DB::table('password_resets')->where('token',$token)->delete();
		//$pwdReset->delete();
		return "error! invalid token";
	}
	if($request->password==""||$request->password==null){
		return 'Mật khẩu không đúng định dạng';
	}
	$user=User::where('email',$pwdReset->email)->first();
	$user->password=Hash::make($request->password);
	if($user->password==""||$user->password==null){
		return 'Mật khẩu không đúng định dạng';
	}
	$user->save();
	return 'done!';
})->name('auth.reset-pwd');
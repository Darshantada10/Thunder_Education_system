<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ToppersController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Zoom\MeetingController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginWithGoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('mail', [MailController::class, 'index']);

Route::middleware(['loggedin'])->group(function() {
    Route::get('/courses/{name}',[CourseController::class,'index']);

    
Route::get('/discussion',[DiscussionController::class,'index']);
Route::post('/discussion',[DiscussionController::class,'savediscussionmessage'])->name('discussion.save');

Route::get('/new-discussion',[DiscussionController::class,'new']);
Route::post('/new-discussion',[DiscussionController::class,'savediscussion']);

Route::get('/write-review',[ReviewController::class,'write']);
Route::post('/write-review',[ReviewController::class,'save']);


Route::get('/material/{name}',[MaterialController::class,'index']);
Route::get('/materials/{material}',[MaterialController::class,'download']);


Route::get('/exams/{id}',[ExamController::class,'index']);
Route::get('/exam/{id}',[ExamController::class,'exam']);

Route::post('/exam',[ExamController::class,'save'])->name('question.save');

Route::get('/result',[ExamController::class,'result']);
// Route::get('/result/{id}',[ExamController::class,'result'])->name('result.show');

Route::get('/profile',[HomeController::class,'profile']);
Route::post('/profile',[HomeController::class,'save']);

Route::get('/zoomstart/{record}',[MeetingController::class ,'zoomstart'])->name('zoom.start');

});
Route::get('google/translate/change',[LanguageController::class,'googleTranslateChange'])->name('google.translate.change');

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);

Route::post('/inquire',[HomeController::class,'inquire']);


Route::get('/reviews',[ReviewController::class,'index']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'validate_login']);
Route::get('/logout',[LoginController::class,'logout']);


Route::get('/authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('/authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'validate_registration']);



Route::get('/courses',[CourseController::class,'course']);

Route::get('/toppers',[ToppersController::class,'index']);

Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);



  
Route::get('forget', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');








  
Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
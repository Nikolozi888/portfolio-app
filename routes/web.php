<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\PartnersController as AdminPartnersController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\InformationController as AdminInformationController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\PasswordController as AdminPasswordController;
use App\Http\Controllers\Admin\PartnerMultiImagesController;
use App\Http\Controllers\Admin\AboutMultiImagesController;
use App\Http\Controllers\Admin\AddressInfoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactInfoController;
use App\Http\Controllers\Admin\MessageInfoController;
use App\Http\Controllers\Admin\SocialInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MultiImageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TagController;
use App\Http\Requests\AdminPasswordRequest;
use App\Models\Information;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service_show');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('categories/{slug}', [CategoryController::class, 'index'])->name('categories.index');
Route::get('tags/{slug}', [TagController::class, 'index'])->name('tags.index');

Route::get('/login', [SessionsController::class, 'create'])->name('login');
Route::post('/login/store', [SessionsController::class, 'store'])->name('login.store');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/download/resume', [ResumeController::class, 'download'])->name('download.resume');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::prefix('/dashboard')->name('admin.')->group(function () {

        Route::get('/', [AdminHomeController::class, 'index'])->name('index');


        Route::resource('/messageInfo', MessageInfoController::class)->names('messageInfo')->except('show');
        Route::resource('/socialInfo', SocialInfoController::class)->names('socialInfo')->except('show');
        Route::resource('/contactInfo', ContactInfoController::class)->names('contactInfo')->except('show');
        Route::resource('/AddressInfo', AddressInfoController::class)->names('addressInfo')->except('show');

        Route::get('/profile/edit', [AdminProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile/update/{id}', [AdminProfileController::class, 'update'])->name('profile.update');

        Route::get('/profile/password/edit', [AdminPasswordController::class, 'edit'])->name('profile.password.edit');
        Route::patch('/profile/password/update/{id}', [AdminPasswordController::class, 'update'])->name('profile.password.update');

        Route::get('/emails/index', [AdminContactController::class, 'index'])->name('emails.index');
        Route::get('/emails/replied', [AdminContactController::class, 'replied'])->name('emails.replied');
        Route::get('/emails/show/{id}', [AdminContactController::class, 'show'])->name('emails.show');
        Route::post('/emails/email/send/{id}', [EmailController::class, 'store'])->name('emails.send');

        Route::resource('/multiImage', MultiImageController::class)->names('feedbacks.multiImage')->except('show');
        Route::resource('/about/multiImage', AboutMultiImagesController::class)->names('about.multiImage')->except('show');
        Route::resource('/partners/multiImage', PartnerMultiImagesController::class)->names('partners.multiImage')->except('show');

        Route::resource('/about', AdminAboutController::class)->names('about')->except('show');
        Route::resource('/information', AdminInformationController::class)->names('informations')->except('show');
        Route::resource('/tags', AdminTagController::class)->names('tags')->except('show');
        Route::resource('/categories', AdminCategoryController::class)->names('categories')->except('show');
        Route::resource('/blogs', AdminBlogController::class)->names('blogs')->except('show');
        Route::resource('/services', AdminServiceController::class)->names('services')->except('show');
        Route::resource('/feedbacks', AdminFeedbackController::class)->names('feedbacks')->except('show');
        Route::resource('/partners', AdminPartnersController::class)->names('partners')->except('show');
        Route::resource('/portfolios', AdminPortfolioController::class)->names('portfolios')->except('show');

    });

});

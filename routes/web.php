<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\AwardSectionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanySectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactSectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialSectionController;
use App\Models\Template;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/projects', [SiteController::class, 'projects'])->name('projects.all');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/thank-you', function () {
    $HomeBackground = Template::where('name', 'HomeBackground')->first();
    return view(
        'site.thank',
        [
            "HomeBackground" => $HomeBackground["value"]
        ]
    );
})->name('thankYou');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/', [DashboardController::class, 'update'])->name('dashboard.update');
    Route::post('/links-update', [DashboardController::class, 'linksUpdate'])->name('dashboard.linksUpdate');

    //Home section
    Route::get('/home', [HomeController::class, 'edit'])->name('dashboard.home');
    Route::post('/home', [HomeController::class, 'update'])->name('dashboard.home.update');

    //Portfolio section
    Route::get('/portfolio', [PortfolioController::class, 'edit'])->name('dashboard.portfolio');
    Route::post('/portfolio', [PortfolioController::class, 'update'])->name('dashboard.portfolio.update');

    //Services section
    Route::get('/service/{id}', [ServiceController::class, 'edit'])->name('dashboard.service');
    Route::post('/service/{id}', [ServiceController::class, 'update'])->name('dashboard.service.update');

    //Statistics section
    Route::get('/statistic', [StatisticsController::class, 'edit'])->name('dashboard.statistic');
    Route::post('/statistic', [StatisticsController::class, 'update'])->name('dashboard.statistic.update');

    // Testimonial section
    Route::get('/testimonial-section', [TestimonialSectionController::class, 'edit'])->name('dashboard.testimonialSection');
    Route::post('/testimonial-section', [TestimonialSectionController::class, 'update'])->name('dashboard.testimonialSection.update');

    // Company section
    Route::get('/company-section', [CompanySectionController::class, 'edit'])->name('dashboard.companySection');
    Route::post('/company-section', [CompanySectionController::class, 'update'])->name('dashboard.companySection.update');

    // Award section
    Route::get('/award-section', [AwardSectionController::class, 'edit'])->name('dashboard.awardSection');
    Route::post('/award-section', [AwardSectionController::class, 'update'])->name('dashboard.awardSection.update');

    // Contact section
    Route::get('/contact-section', [ContactSectionController::class, 'edit'])->name('dashboard.contactSection');
    Route::post('/contact-section', [ContactSectionController::class, 'update'])->name('dashboard.contactSection.update');

    //Skills
    Route::get('/skill', [SkillController::class, 'create'])->name('dashboard.skill');
    Route::post('/skill', [SkillController::class, 'store'])->name('dashboard.skill');
    Route::get('/skill/{id}', [SkillController::class, 'edit'])->name('dashboard.skill.edit');
    Route::put('/skill', [SkillController::class, 'update'])->name('dashboard.skill.update');

    // Project
    Route::resource('/project', ProjectController::class);
    // Testimonial
    Route::resource('/testimonial', TestimonialController::class);
    // Company
    Route::resource('/company', CompanyController::class);
    // Story
    Route::resource('/story', StoryController::class);
    //Awards
    Route::resource('/award', AwardController::class);

    //contact
    Route::get('/contact', [ContactController::class, 'index'])->name('dashboard.contact.index');
    Route::get('/contact/{id}', [ContactController::class, 'show'])->name('dashboard.contact.show');
});


require __DIR__ . '/auth.php';

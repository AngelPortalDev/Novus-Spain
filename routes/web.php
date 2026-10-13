<?php

use App\Http\Controllers\NovusController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Preserve the supplied template URLs and their original page designs.
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/index-two', [PageController::class, 'indexTwo'])->name('index-two');
Route::get('/index-three', [PageController::class, 'indexThree'])->name('index-three');
Route::get('/index-four', [PageController::class, 'indexFour'])->name('index-four');
Route::get('/index-five', [PageController::class, 'indexFive'])->name('index-five');
Route::get('/index-sc', [PageController::class, 'indexSc'])->name('index-sc');
Route::get('/about-sc', [PageController::class, 'aboutSc'])->name('about-sc');
Route::get('/admission-sc', [PageController::class, 'admissionSc'])->name('admission-sc');
Route::get('/campus-life-sc', [PageController::class, 'campusLifeSc'])->name('campuslife-sc');
Route::get('/tution-fee-sc', [PageController::class, 'tutionFeeSc'])->name('tutionfee-sc');
Route::get('/six-form', [PageController::class, 'sixFormSc'])->name('six-form');
Route::get('/single-resource', [PageController::class, 'singleResourceSc'])->name('single-resource');
Route::get('/senior-school', [PageController::class, 'seniorSchool'])->name('senior-school');
Route::get('/primary-school', [PageController::class, 'primarySchool'])->name('primary-school');
Route::get('/middle-school', [PageController::class, 'middleSchool'])->name('middle-school');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/academic-area', [PageController::class, 'academicArea'])->name('academic-area');
Route::get('/academic', [PageController::class, 'academic'])->name('academic');
Route::get('/admission', [PageController::class, 'admission'])->name('admission');
Route::get('/alumni', [PageController::class, 'alumni'])->name('alumni');
Route::get('/athletics', [PageController::class, 'athletics'])->name('athletics');
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blog-details');
Route::get('/blog-grid', [PageController::class, 'blogGrid'])->name('blog-grid');
Route::get('/blog-list', [PageController::class, 'blogList'])->name('blog-list');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/scholarship', [PageController::class, 'scholarship'])->name('scholarship');
Route::get('/program-single', [PageController::class, 'programSingle'])->name('program-single');
Route::get('/notice-details', [PageController::class, 'noticeDetails'])->name('notice-details');
Route::get('/campus-life', [PageController::class, 'campusLife'])->name('campus-life');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/department-details', [PageController::class, 'departmentDetails'])->name('department-details');
Route::get('/event-details', [PageController::class, 'eventDetails'])->name('event-details');
Route::get('/event', [PageController::class, 'event'])->name('event');
Route::get('/faculty-details', [PageController::class, 'facultyDetails'])->name('faculty-details');
Route::get('/faculty-sub-details', [PageController::class, 'facultySubDetails'])->name('faculty-sub-details');
Route::get('/faculty-sub', [PageController::class, 'facultySub'])->name('faculty-sub');
Route::get('/faculty', [PageController::class, 'faculty'])->name('faculty');
Route::get('/tution-fee', [PageController::class, 'tutionFee'])->name('tution-fee');
Route::get('/business-english-course', [PageController::class, 'businessEnglishCourse'])->name('business-english-course');
Route::get('/visa-requirement', [PageController::class, 'visaRequirements'])->name('visa-requirement');
Route::get('/diploma-spanish-language', [PageController::class, 'diplomaSpanishLanguage'])->name('diploma-spanish-language');
Route::get('/general-english-course', [PageController::class, 'generalEnglishCourse'])->name('general-english-course');

Route::get('/research', [NovusController::class, 'catalogue'])->defaults('category', 'dba-degrees')->name('research');
Route::get('/programmes', [NovusController::class, 'catalogue'])->name('programmes');
Route::get('/english-school/{slug?}', [NovusController::class, 'english'])->name('english');
Route::post('/enquiries', [NovusController::class, 'enquire'])->middleware('throttle:5,1')->name('enquiries');
foreach (array_keys(config('novus.pages')) as $page) {
    if (in_array($page, ['about', 'contact'], true)) {
        continue;
    }
    Route::get('/'.$page, [NovusController::class, 'page'])->defaults('page', $page)->name($page);
}
foreach (array_keys(config('novus.categories')) as $category) {
    Route::get('/'.$category, [NovusController::class, 'catalogue'])->defaults('category', $category)->name($category);
    Route::get('/'.$category.'/{slug}', [NovusController::class, 'programme'])->defaults('category', $category);
}
Route::get('/enrol-form', [NovusController::class, 'page'])->defaults('page', 'study-with-us');

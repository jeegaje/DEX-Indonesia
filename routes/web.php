<?php

use App\Models\MediaDocument;
use App\Http\Controllers\FileUploadController as ControllersFileUploadController;
use App\Http\Controllers\MaintenanceController;
use App\Models\Blog;
use App\Models\BlogCategory;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\FileUploadController;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;

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



Route::get('/maintenance/create', [MaintenanceController::class, 'create'])->name('maintenance.create');
Route::post('/maintenance/store', [MaintenanceController::class, 'store'])->name('maintenance.store');

Route::post('/maintenance/store/upload', [MaintenanceController::class, 'testUpload'])->name('maintenance.upload');


Route::get('/', function () {
    $newest_blogs = Blog::orderBy('published_at', 'desc')->limit(4)->get();
    $hero_image = MediaDocument::where('type', 'Hero Section')->first();
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    $galery_dex = MediaDocument::where('type', 'Galery Dex')->limit(8)->get();

    // dd($hero_image);
    return view('company-profile.homepage', ['newest_blogs' => $newest_blogs, 'hero_image' => $hero_image, 'company_profile' => $company_profile, 'galery_dex' => $galery_dex]);
});

Route::get('/about', function () {
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    $galery_dex = MediaDocument::where('type', 'Galery Dex')->limit(8)->get();

    return view('company-profile.about', ['company_profile' => $company_profile, 'galery_dex' => $galery_dex]);
})->name('about');

Route::get('/product', function () {
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    $flyer_product = MediaDocument::where('type', 'Flyer Product')->get();
    $documentation_product_axial_flow_pump = MediaDocument::where('type', 'Documentation Product Axial Flow Pump')->limit(8)->get();
    $documentation_product_sewage_centrifugal_pump = MediaDocument::where('type', 'Documentation Product Sewage Centrifugal Pump')->limit(8)->get();

    return view('company-profile.product', ['company_profile' => $company_profile, 'flyer_product' => $flyer_product, 'documentation_product_sewage_centrifugal_pump' => $documentation_product_sewage_centrifugal_pump, 'documentation_product_axial_flow_pump' => $documentation_product_axial_flow_pump]);
})->name('product');

Route::get('/project', function () {
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    $galery_dex = MediaDocument::where('type', 'Galery Dex')->limit(8)->get();

    return view('company-profile.project', ['company_profile' => $company_profile, 'galery_dex' => $galery_dex]);
})->name('project');

Route::get('/articles-and-events', function () {
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    $blog_categories = BlogCategory::limit(3)->get();
    $newest_blogs = Blog::orderBy('published_at', 'desc')->get();

    return view('company-profile.articles-and-events', [
        'blog_categories' => $blog_categories,
        'newest_blogs' => $newest_blogs,
        'company_profile' => $company_profile
    ]);
})->name('articles-and-events');

Route::get('/articles-and-events-all', function () {
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    $blog_categories = BlogCategory::limit(3)->get();

    return view('company-profile.articles-and-events-all', [
        'blog_categories' => $blog_categories,
        'company_profile' => $company_profile
    ]);
});

Route::get('/articles-and-events/{slug}', function (Request $request, $slug) {
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    $blog_categories = BlogCategory::limit(3)->get();
    $newest_blogs = Blog::orderBy('published_at', 'desc')->get();

    $blog = Blog::where('slug', $slug)->first();
    return view('company-profile.articles-and-events-detail', [
        'blog' => $blog,
        'blog_categories' => $blog_categories,
        'newest_blogs' => $newest_blogs,
        'company_profile' => $company_profile
    ]);
})->name('article.show');

Route::get('/contact', function () {
    $company_profile = MediaDocument::where('type', 'Company Profile')->first();
    return view('company-profile.contact', ['company_profile' => $company_profile]);
})->name('contact');

Route::get('/send-to-gmail', function (Request $request) {
    // Ambil data dari form
    $name = $request->input('name');
    $instance = $request->input('instance');
    $message = $request->input('message');
    // dd($name);
    // Siapkan URL untuk halaman Gmail dengan parameter
    $gmailUrl = 'https://mail.google.com/mail/?view=cm&fs=1&to='
        . 'customer@dex.co.id'
        . '&su=' . urlencode('Contact from ' . $name . " " . $instance)
        . '&body=' . urlencode($message);

    // Redirect ke halaman Gmail
    return redirect()->away($gmailUrl);
})->name('sendToGmail');

Route::get('/pdf-web', function () {
    return view('company-profile.pdf',  [
        'invoiceNumber' => '1234',
        'customerName' => 'Grumpy Cat',
    ]);
});

Route::get('/download', function() {

    $filename = request()->query('path');
    $filename = $filename;

    if (Storage::disk('public')->exists($filename)) {
        return Storage::download('public/' . $filename);
    }
    
    return abort(404);
})->name('file.download');


Route::get('/maintenance/generate-report/{id}', [MaintenanceController::class, 'generateReport'])->name('generateReport');

Route::post('/maintenance/uploads/process', [ControllersFileUploadController::class, 'process'])->name('uploads.process');

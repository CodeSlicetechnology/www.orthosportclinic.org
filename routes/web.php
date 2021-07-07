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

Route::get('/', 'Website\WebsiteController@index')->name('/');
Route::get('about', 'Website\WebsiteController@about')->name('about');
Route::get('conditions-and-treatments', 'Website\WebsiteController@conditionsAndTreatments')->name('conditions-and-treatments');
Route::get('gallery/images', 'Website\WebsiteController@galleryImagesView')->name('gallery/images');
Route::get('gallery/videos', 'Website\WebsiteController@galleryVideosView')->name('gallery/videos');
Route::get('clinical-images', 'Website\WebsiteController@clinicalImages')->name('clinical-images');
Route::get('blogs', 'Website\WebsiteController@blogs')->name('blogs');
Route::get('blog-details/{id}', 'Website\WebsiteController@blogDetails');
Route::get('contact', 'Website\WebsiteController@contact')->name('contact');
Route::post('contact', 'Website\WebsiteController@saveContact')->name('contact');

Auth::routes();

Route::get('register', function () {
    return abort(404);
})->name('register');

// Route::get('login', function () {
//     return abort(404);
// })->name('login');




// routes for admin login
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('/home');
    Route::post('update-banner', 'HomeController@bannerUpdate')->name('update-banner');
    Route::get('about-landing', 'HomeController@aboutLanding')->name('about-landing');
    Route::post('update-landing-about', 'HomeController@landingAboutUpdate')->name('update-landing-about');
    Route::get('common-procedures', 'HomeController@commonProcedures')->name('common-procedures');
    Route::get('common-procedures', 'HomeController@commonProcedures')->name('common-procedures');
    Route::post('common-procedures', 'HomeController@commonProceduresUpdate')->name('common-procedures');
    Route::get('common-procedures/{id}', 'HomeController@commonProceduresEdit');
    
    Route::get('conditions-treatments-list', 'HomeController@conditionsTreatmentsList')->name('conditions-treatments-list');
    Route::get('conditions-treatments-list/{id}', 'HomeController@conditionsTreatmentsEdit');
    Route::post('conditions-treatments-list', 'HomeController@conditionsTreatmentsUpdate')->name('conditions-treatments-list');

    Route::get('about-first-section', 'HomeController@aboutFirstSection')->name('about-first-section');
    Route::post('about-first-section', 'HomeController@aboutFirstSectionUpdate')->name('about-first-section');
    Route::get('about-second-section', 'HomeController@aboutSecondSection')->name('about-second-section');
    Route::get('about-second-section/{id}', 'HomeController@aboutSecondSectionEdit');
    Route::post('about-second-section', 'HomeController@aboutSecondSectionUpdate')->name('about-second-section');
    
    Route::get('association-images', 'HomeController@associationImages')->name('association-images');
    Route::post('upload-association-images', 'HomeController@associationImageUpload')->name('upload-association-images');
    Route::get('delete-association-images/{id}', 'HomeController@associationImageDelete');

    Route::get('rp-screenshots', 'HomeController@rpScreenshots')->name('rp-screenshots');
    Route::post('upload-rp-screenshots', 'HomeController@rpScreenshotsUpload')->name('upload-rp-screenshots');
    Route::get('delete-rp-screenshots/{id}', 'HomeController@rpScreenshotsDelete');


    Route::get('view-clinical-images', 'HomeController@clinicalImages')->name('view-clinical-images');
    Route::post('upload-clinical-images', 'HomeController@clinicalImagesUpload')->name('upload-clinical-images');
    Route::get('delete-clinical-images/{id}', 'HomeController@clinicalImagesDelete');

    Route::get('gallery-images', 'HomeController@galleryImages')->name('gallery-images');
    Route::post('upload-gallery-images', 'HomeController@galleryImagesUpload')->name('upload-gallery-images');
    Route::get('delete-gallery-images/{id}', 'HomeController@galleryImagesDelete');

    Route::get('gallery-videos', 'HomeController@galleryVideos')->name('gallery-videos');
    Route::post('upload-gallery-videos', 'HomeController@galleryVideosUpload')->name('upload-gallery-videos');
    Route::get('delete-gallery-videos/{id}', 'HomeController@galleryVideosDelete');

    
    Route::get('blogs-list', 'HomeController@blogsList')->name('blogs-list');
    Route::get('blogs-add', 'HomeController@newBlog')->name('blogs-add');
    Route::get('blogs-edit/{id}', 'HomeController@blogsEdit');
    Route::post('save-blogs', 'HomeController@blogsSave')->name('save-blogs');
    Route::post('update-blogs', 'HomeController@blogsUpdate')->name('update-blogs');
    Route::get('blogs-delete/{id}', 'HomeController@blogsDelete');

    
    Route::get('update-contact','HomeController@updateContactPage')->name('update-contact');
    Route::post('update-contact','HomeController@updateContact')->name('update-contact');
    
    Route::get('contacted-users','HomeController@contactedUsers')->name('contacted-users');

    Route::get('manage-address', 'HomeController@manageAddressList')->name('manage-address');
    Route::post('manage-address', 'HomeController@manageAddressSave')->name('manage-address');
    Route::post('update-address', 'HomeController@manageAddressUpdate')->name('update-address');
    Route::get('delete-address/{id}', 'HomeController@manageAddressDelete');

    // change password
    Route::get('/change-password','HomeController@showChangePasswordForm')->name('change-password');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
});
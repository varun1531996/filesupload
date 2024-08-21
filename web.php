<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/


Route::group(['namespace' => 'FrontController'], function () {

    Route::get('/', 'IndexController@get_index');

    Route::get('category/{slug}', 'CategoryController@get_level_two')->name('category.get.level-two');

    Route::get('category/{slug}/{slug_2}/{slug_3}', 'CategoryController@get_level_three')->name('category.get.level-three');

	Route::post('contact', 'ContactController@store')->name('contact-enquiry');

	Route::get('about', 'IndexController@get_about')->name('abt');
	Route::get('events', 'IndexController@events')->name('events');
    // Route::get('events', function(){
    //     return view('adminlte::frontweb.pages.events');
    // });

//    Route::get('news', function(){
//        return view('adminlte::frontweb.pages.news');
//    });
//
//    Route::get('news-inside', function(){
//        return view('adminlte::frontweb.pages.news-inside');
//    });
    Route::get('contact-us', 'IndexController@get_contact');
    
    // Route::get('contact-us', function(){
    //     return view('adminlte::frontweb.pages.contact');
    // });

    Route::get('career', 'JobApplicationController@get_career');

    Route::post('career', 'JobApplicationController@post_career')->name('post.career');

    Route::get('thank-you', 'IndexController@get_thank_you')->name('thank-you-page');

    Route::post('/subscribe', 'IndexController@post_subscribe');

    Route::get('/news-room', 'NewsRoomController@GetNewsRoom');

    Route::get('/blogs', 'NewsRoomController@GetBlogs')->name('blogs');

    Route::get('/blog/{slug}', 'NewsRoomController@GetBlogInside')->name('blogs.inside');

    Route::get('/news-list', 'NewsRoomController@GetNews')->name('news-list');

    Route::get('/news/{slug}', 'NewsRoomController@GetNewsInside');

    Route::get('/webinars', 'NewsRoomController@GetWebinars')->name('webinars');

    Route::get('/dummy', 'DummyController@dummy');

    Route::get('/the-pulse', 'ContactController@getNewContact')->name('contact.new');
    Route::get('/ThePulseQ1_2019', 'ContactController@getNewPulse')->name('contact.new-pulse');
    Route::get('/ThePulseQatarQ1_2019', 'ContactController@getPulseQatar')->name('contact.pulse.qatar');

    Route::get('/blockchain', 'ContactController@blockchain')->name('blockchain');
    Route::get('/uae', 'ContactController@uae')->name('uae');
    Route::get('/hct', 'ContactController@hct')->name('hct');
    Route::get('/great-teachers', 'ContactController@great_teachers')->name('great_teachers');

//	Route::get('download/card/{slug}', 'ContactController@download_card')->name('download-card');

Route::get('category/industry-main/{slug}', 'IndustryCategoryController@industryMain')->name('category.industrial.main');

Route::get('category/industry/{slug}', 'IndustryCategoryController@cards')->name('category.industrial.card');



Route::get('search-query', 'SearchController@search_query')->name('search.query');

});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get(config('constants.admin_page'), 'HomeController@index');

Route::group(['middleware' => 'auth', 'prefix' => config('constants.admin_page'), 'namespace' => 'AdminController'], function () {

    

    Route::resource('homepage-banner', 'HomepageBannerController');

    Route::resource('level-one-category', 'LevelOneController');

    Route::resource('level-two-category', 'LevelTwoController');

    Route::resource('level-three-category', 'LevelThreeController');

    Route::post('api/get-level-two-category/{id}', 'LevelThreeController@get_level_two_category')->name('api-get-level-two-category');

    Route::post('api/get-level-three-category/{id}', 'LevelThreeController@get_level_three_category')->name('api-get-level-three-category');

    Route::resource('cards', 'CardsController');

    Route::resource('blogs', 'BlogController');

    Route::resource('news-room', 'NewsControllers');

    Route::resource('webinar', 'WebinarController');

    Route::get('api', function () {
        return response()->json([
            'ac' => 'ac'
        ]);
    })->name('api');

	Route::get('/contact', 'ContactController@index')->name('contact-list');
	
	Route::get('/news', 'NewsController@index')->name('admin-news');
	
	Route::get('/news/create', 'NewsController@create')->name('news-create');
	
	Route::post('/news/store', 'NewsController@store')->name('news-store');
	
	Route::get('/news/edit/{id}', 'NewsController@edit')->name('news-edit');
	
	Route::post('/news/update/{id}', 'NewsController@update')->name('news-update');
	
	Route::post('/news/destroy/{id}', 'NewsController@destroy')->name('news-destroy');
	
	Route::post('/events/image_delete/{id}', 'EventsController@image_delete')->name('events-image-delete');
	
	Route::post('/events/image_position/{id}', 'EventsController@image_position')->name('events-image-position');
	
	Route::post('/events/image_status/{id}', 'EventsController@image_status')->name('events-image-status');
	
	Route::resource('events', 'EventsController');
	
	Route::get('/subscribe', 'SubscribeController@index')->name('subscribe-list');
	
	Route::post('/search_subscribers', 'SubscribeController@search')->name('search-subscribers-by-date');
	
	Route::get('downloadExcel/{type}/{min}/{max}', 'ExportController@downloadExcel')->name('export-subscribers');
	
	
	
	Route::post('/search_contacts', 'ContactController@search')->name('search-contacts-by-date');
	
	Route::get('enquiryExcel/{type}/{min}/{max}', 'ExportController@enquiryExcel')->name('export-enquiries');
	
	
	Route::get('/testimonial', 'TestimonialController@index')->name('admin-testimonial');
	
	Route::get('/testimonial/create', 'TestimonialController@create')->name('testimonial-create');
	
	Route::post('/testimonial/store', 'TestimonialController@store')->name('testimonial-store');
	
	Route::get('/testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonial-edit');
	
	Route::post('/testimonial/update/{id}', 'TestimonialController@update')->name('testimonial-update');
	
	Route::post('/testimonial/destroy/{id}', 'TestimonialController@destroy')->name('testimonial-destroy');
	
	
	
	Route::get('/career', 'CareersController@index')->name('admin-career');
	
	Route::get('/career/create', 'CareersController@create')->name('career-create');
	
	Route::post('/career/store', 'CareersController@store')->name('career-store');
	
	Route::get('/career/edit/{id}', 'CareersController@edit')->name('career-edit');
	
	Route::post('/career/update/{id}', 'CareersController@update')->name('career-update');
	
	Route::post('/career/destroy/{id}', 'CareersController@destroy')->name('career-destroy');
	
	
	Route::get('/partners', 'PartnersController@index')->name('admin-partners');
	
	Route::post('/partners/update', 'PartnersController@update')->name('partners-update');
	
	Route::post('/partners/image_delete/{id}', 'PartnersController@image_delete')->name('partners-image-delete');
	
	Route::post('/partners/image_position/{id}', 'PartnersController@image_position')->name('partners-image-position');
	
	Route::post('/partners/image_status/{id}', 'PartnersController@image_status')->name('partners-image-status');

	Route::get('/job-application', 'JobApplicationController@index');

	Route::get('/db-backup', 'DBBackupController@index');

	Route::get('/create-backup', 'DBBackupController@create_backup')->name('create.backup');

    Route::get('/download-backup', 'DBBackupController@download_backup')->name('download.backup');
    
        // Industrial
        Route::resource('industrial-category', 'IndustrialCategoryController');
        Route::resource('industrial-main-category', 'IndustrialMainCategoryController');
        Route::resource('industrial-card', 'IndustrialCardController');

    //about Us
    Route::get('/about', 'AboutUsController@index')->name('admin-about');
    Route::get('/about/create', 'AboutUsController@create')->name('about-create');
    Route::post('/about/store', 'AboutUsController@store')->name('about-store');
    Route::delete('/about/destroy/{id}', 'AboutUsController@destroy')->name('about-destroy');
    Route::get('/about/edit/{id}', 'AboutUsController@edit')->name('about-edit');
    Route::post('/about/update/{id}', 'AboutUsController@update')->name('about-update');

});

<?php


Auth::routes();
// Route::get('/dashboard', 'HomeController@index');
Route::get('/', 'Frontend\MainController@index')->name('home');
Route::get('/about', 'Frontend\MainController@about')->name('about');
Route::get('/contact', 'Frontend\MainController@contact')->name('contact');
Route::get('/portfolio', 'Frontend\MainController@portfolio')->name('portfolio');
Route::get('/service', 'Frontend\MainController@services')->name('services');
Route::get('/news_events', 'Frontend\MainController@news')->name('news');
Route::get('/jobs', 'Frontend\MainController@jobs')->name('jobs');
Route::get('/jobs/{id}', 'Frontend\MainController@showJob')->name('job.show');
Route::post('/jobs/apply/{id}', 'Frontend\MainController@apply')->name('job.apply');

Route::get('/case_study', 'Frontend\MainController@case_study')->name('case_study');
Route::get('/service/{id}', 'Frontend\MainController@showService')->name('service.show');
Route::get('/portfolio/{id}', 'Frontend\MainController@showPortfolio')->name('portfolio.show');
Route::get('/portfolio/{id}', 'Frontend\MainController@showPortfolio')->name('portfolio.show');
Route::post('/contact/send', 'Backend\ContactController@store')->name('contact.store');
Route::get('/news_events/{id}', 'Frontend\MainController@showNews')->name('new_events.show');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::prefix('roles')->group(function () {
        Route::resource('/menu', 'Roles\MenuController');
        Route::get('/menu/menuControllerChangeStatus/{id}', 'Roles\MenuController@changeStatus');
        Route::resource('/group', 'Roles\UserGroupController');
        Route::get('/roleAccessIndex', 'Roles\RoleAccessController@index');
        Route::get('roleChangeAccess/{allowId}/{id}', 'Roles\RoleAccessController@changeAccess');
    });

    Route::resource('/user', 'UserController');
    Route::resource('/clients', 'Backend\ClientsController');
    Route::resource('/slider', 'Backend\SliderController');
    Route::resource('/projects', 'Backend\ProjectsController');
    Route::resource('/board_members', 'Backend\BoardMemberController');
    Route::resource('/whyWe', 'Backend\WhyWeController');
    Route::resource('/news', 'Backend\NewsController');
    Route::resource('/portfolios', 'Backend\PortfolioController');
    Route::resource('/careers', 'Backend\CareerController');
    Route::resource('/map', 'Backend\MapController');
    Route::resource('/mission', 'Backend\MissionController');


    Route::resource('/services', 'Backend\ServicesController');

    Route::get('/queries', 'Backend\ContactController@show')->name('contact.show');
    Route::get('/applicants', 'Backend\ApplicantController@index')->name('application.index');

    Route::get('/about_us', 'Backend\AboutController@index')->name('about.index');
    Route::get('/about_us/{id}/edit', 'Backend\AboutController@edit')->name('about.edit');
    Route::post('/about_us/{id}/update', 'Backend\AboutController@update')->name('about.update');

Route::get('/settings', 'Backend\SettingsController@index')->name('settings.index');
    Route::get('/settings/{id}/edit', 'Backend\SettingsController@edit')->name('settings.edit');
    Route::post('/settings/{id}/update', 'Backend\SettingsController@update')->name('settings.update');
   


    Route::get('/user/status/{id}', 'UserController@status');
    Route::get('/slider/status/{id}', 'Backend\SliderController@status');
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::post('profile/profilePic', 'UserController@profilePic');
    Route::post('/profile/password', 'UserController@password');

    Route::prefix('configurations')->group(function () {
        Route::resource('/designation', 'Configurations\DesignationController');
        Route::resource('/department', 'Configurations\DepartmentController');
        Route::resource('/fiscalYear', 'Configurations\FiscalYearController');
        Route::get('/fiscalYear/status/{id}', 'Configurations\FiscalYearController@status');
        Route::resource('/country', 'Configurations\CountryController');
        Route::get('/country/status/{id}', 'Configurations\CountryController@status');
        Route::resource('/pradesh', 'Configurations\PradeshController');
        Route::resource('/muniType', 'Configurations\MuniTypeController');
        Route::resource('/district', 'Configurations\DistrictController');
        Route::resource('/municipality', 'Configurations\MunicipalityController');
        Route::resource('/officeType', 'Configurations\OfficeTypeController');

        Route::resource('/office', 'Configurations\OfficeController');
        Route::get('/office/status/{id}', 'Configurations\OfficeController@status');


    });

    Route::prefix('logs')->group(function () {
        Route::get('/loginLogs', 'LogController@loginLogs');
        Route::get('/failLoginLogs', 'LogController@failLogin');
    });

    Route::resource('feedback','FeedbackController');

});

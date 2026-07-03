<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VehicleTypeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['checkRole:admin,maintainer,super-admin']], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(UserController::class)->group(function () {
        // Users
        Route::name('users.')->group(function () {
            Route::group(['middleware' => ['role_or_permission:super-admin']], function () {
                Route::get('/users', 'users')->name('index');
                Route::post('/get-users', 'getUsers')->name('get');
                Route::post('/change-role', 'changeUserRole')->name('role.change');
                Route::post('/delete-users', 'deleteUser')->name('delete');

                Route::get('/users/roles', 'userRoles')->name('roles');
                Route::post('/users/get-roles', 'getUserRole')->name('get.role');
                Route::get('/users/create-roles', 'createRole')->name('role.create');
                Route::post('/users/save-roles', 'saveRole')->name('role.save');
                Route::get('/users/update-roles/{id}', 'updateRole')->name('role.update');
                Route::post('/users/edit-roles', 'editRole')->name('role.edit');
                Route::post('/users/delete-role', 'deleteRole')->name('role.delete');

                Route::get('/users/permissions', 'userPermission')->name('permission');
                Route::post('/users/get-permissions', 'getUserPermissions')->name('get.permissions');
                Route::get('/users/create-permissions', 'createPermissions')->name('permissions.create');
                Route::post('/users/save-permissions', 'savePermissions')->name('permissions.save');
                Route::get('/users/update-permissions/{id}', 'updatePermissions')->name('permissions.update');
                Route::post('/users/edit-permissions', 'editPermissions')->name('permissions.edit');
                Route::post('/users/delete-permissions', 'deletePermissions')->name('permissions.delete');
            });
        });
    });

    Route::controller(VehicleTypeController::class)->group(function () {
        // Vehicle type
        Route::name('vehicle-types.')->group(function () {
            Route::get('/vehicle-types', 'index')->name('index');
            Route::post('/show-vehicle-types', 'show')->name('show');
            Route::get('/create-vehicle-types', 'create')->name('create');
            Route::post('/store-vehicle-types', 'store')->name('store');
            Route::get('/edit-vehicle-types/{id}', 'edit')->name('edit');
            Route::post('/update-vehicle-types', 'update')->name('update');
            Route::post('/destroy-vehicle-types/', 'destroy')->name('destroy');
            Route::get('/active-vehicle-type', 'activeVehicle')->name('active');
            Route::post('/get-vehicle-detail', 'getVehicleDetail')->name('detail');
        });
    });

    Route::controller(BlogController::class)->group(function () {
        // Vehicle type
        Route::name('blogs.')->group(function () {
            Route::get('/blogs', 'index')->name('index');
            Route::get('/create-blogs', 'create')->name('create');
            
            Route::post('/store-blogs', 'store')->name('store');
        Route::post('/show-blogs', 'show')->name('show');
        Route::post('/destroy-blog', 'destroy')->name('destroy');
        Route::get('/edit-blog/{id}', 'edit')->name('edit');
        Route::post('/update-blog', 'update')->name('update');
        
        });
    });

    Route::controller(ReservationController::class)->group(function () {
        // Reservations
        Route::name('reservations.')->group(function () {
            Route::get('/reservations', 'index')->name('index');
            Route::post('/show-reservations', 'show')->name('show');
            Route::get('/create-reservations', 'create')->name('create');
            Route::post('/store-reservations', 'store')->name('store');
            Route::get('/edit-reservations/{id}', 'edit')->name('edit');
            Route::post('/update-reservations', 'update')->name('update');
            Route::post('/destroy-reservations', 'destroy')->name('destroy');
            Route::get('/all-passenger', 'allPassenger')->name('passenger.all');
            Route::post('/calculate-price', 'calculatePrice')->name('calculate.price');
        });
    });

    Route::controller(ServiceTypeController::class)->group(function () {
        // Service  type
        Route::name('service-types.')->group(function () {
            Route::get('/service-types', 'index')->name('index');
            Route::post('/show-service-types', 'show')->name('show');
            Route::post('/store-service-types', 'store')->name('store');
            Route::post('/update-service-types', 'update')->name('update');
            Route::post('/destroy-service-types', 'destroy')->name('destroy');
        });
    });

    Route::controller(ContactController::class)->group(function () {
        Route::name('user-contacts.')->group(function () {
            Route::get('/user-contacts', 'index')->name('index');
            Route::post('/show-user-contacts', 'show')->name('show');
            Route::get('/view-user-contacts/{id}', 'viewContact')->name('view');
            Route::post('/read-user-contacts', 'readContact')->name('read');
            Route::post('/reply-user-contacts', 'replyContact')->name('reply');
            Route::post('/destroy-user-contacts', 'destroy')->name('destroy');
        });
    });

    Route::controller(AirportController::class)->group(function () {
        Route::name('air-ports.')->group(function () {
            Route::get('/air-ports', 'index')->name('index');
            Route::post('/show-air-ports', 'show')->name('show');
            Route::post('/store-air-ports', 'store')->name('store');
            Route::post('/update-air-ports', 'update')->name('update');
            Route::post('/destroy-air-ports', 'destroy')->name('destroy');
        });
    });

    Route::controller(SettingController::class)->group(function () {
        Route::name('theme-options.')->group(function () {
            Route::get('/theme-options', 'index')->name('index');
            Route::post('/store-theme-options', 'store')->name('store');
            Route::post('/update-theme-options', 'update')->name('update');
        });
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::name('payments.')->group(function () {
            Route::get('/payments', 'index')->name('index');
            Route::post('/show-payments', 'show')->name('show');
        });
    });
});

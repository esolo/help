Route::controller(\App\Http\Controllers\PostController::class)
    ->as('posts.')
    ->prefix('posts')
    ->group(function (){;
            Route::match(['get'],'/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{post}', 'show')->name('show');
            Route::match(['put', 'patch'],'/{post}', 'update')->name('update');
            Route::delete('/{post}', 'destroy')->name('destroy');
            Route::get('/{post}/edit', 'edit')->name('edit');
    });

Route::group(['prefix'=>'posts', 'as'=>'posts.'], function (){
    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\PostController::class, 'store'])->name('store');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('create');
    Route::get('/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('show');
    Route::match(['put', 'patch'], '/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('update');
    Route::delete('/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('destroy');
    Route::get('/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('edit');
});

Route::prefix('posts')->group(function (){
    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::post('/', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
    Route::get('/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    Route::match(['put', 'patch'], '/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
    Route::delete('/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
});

Route::resource('/posts', \App\Http\Controllers\PostController::class);

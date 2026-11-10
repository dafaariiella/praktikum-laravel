<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Hanya petugas yang boleh mengelola (tambah, edit, hapus) surat.
        Gate::define('manage-letters', function (User $user): bool {
            return $user->role === 'petugas';
        });
    }
}

<?php

declare(strict_types = 1);

namespace App\Infrastructure\Providers;

use App\Infrastructure\Interface\RepositoryInterface;
use App\Infrastructure\Repository\BaseRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class BaseRepositoryServiceProvider
 *
 * @package App\Core\Providers
 */
class BaseRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, BaseRepository::class);
    }
}

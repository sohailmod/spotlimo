<?php

namespace App\Providers;

use App\Enums\ReservationStatusEnum;
use App\Models\Contact;
use App\Models\Reservation;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $count = Reservation::where('status', [ReservationStatusEnum::PENDING, ReservationStatusEnum::PROCESSING])->count();
            if ($count > 0) {
                $count = $count;
            } else {
                $count = null;
            }

            $countContact = Contact::where('is_read', false)->count();
            if ($countContact > 0) {
                $countContact = $countContact;
            } else {
                $countContact = null;
            }

            $event->menu->addAfter('vehicle_type', [
                'text' => 'Reservations',
                'url' => 'admin/reservations',
                'icon' => 'fas fa-clipboard-check',
                'label' => $count,
                'label_color' => 'success',
            ]);

            $event->menu->addAfter('service-type', [
                'text' => 'User Contracts',
                'url' => 'admin/user-contacts',
                'icon' => 'fas fa-comment-alt',
                'label' => $countContact,
                'label_color' => 'success',
            ]);


            $event->menu->addBefore('vehicle_type', [
                'text' => 'Blogs',
                'url' => 'admin/blogs',
                'icon' => 'fas fa-star',
            
            ]);
        });
    }
}
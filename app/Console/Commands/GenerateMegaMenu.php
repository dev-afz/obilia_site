<?php

namespace App\Console\Commands;

use App\Models\Industry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateMegaMenu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:megaMenu';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will generate mega menu for the website.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $menu_content = Industry::with(['categories' => function ($q) {
            $q->active()
                ->with([
                    'sub_categories' => fn ($q) => $q->active()->select('id', 'name', 'slug', 'category_id')
                ])
                ->select('id', 'name', 'slug', 'industry_id');
        }])
            ->active()
            ->get(['id', 'name', 'slug', 'image'])->toArray();


        $menu_content = json_encode($menu_content, true);


        // put the menu content in a json file

        File::put(base_path('resources/data/mega-menu.json'), $menu_content);

        $this->info('Mega-menu  generated');

        return Command::SUCCESS;
    }
}

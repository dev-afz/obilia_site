<?php

namespace App\Http\Livewire\Tables;

use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class JobDataTable extends DataTableComponent
{
    protected $model = Job::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Title")
                ->format(function ($job, $c) {
                    $link = '#';
                    if (auth()->user()->isProvider()) {
                        $link = '<a target="_blank" href="' . route('service-provider.job.show', $c->slug) . '">' . $c->title . '</a>';
                    } elseif (auth()->user()->isClient()) {
                        $link = '<a target="_blank" href="' . route('client.job.show', $c->slug) . '">' . $c->title . '</a>';
                    }

                    return $link;
                })
                ->searchable()

                ->sortable()

                ->html(),
            Column::make("Banner")
                ->format(function ($v, $c, $r) {
                    return '<div data-view-onclick class="dashboard-message-avatar"><img src="' . (($v) ? asset($v) : 'https://via.placeholder.com/200') . '" alt=""></div>';
                })
                ->html(),
            Column::make("Description")

                ->format(function ($v, $c, $r) {
                    return view('components.helper.description-viewer', ['body' => $v]);
                })
                ->collapseOnMobile()
                ->sortable()
                ->html(),
            Column::make("Payment Type")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Size")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Rate from")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Rate to")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Created at", "created_at")
                ->collapseOnMobile()
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->collapseOnMobile()
                ->sortable(),
        ];
    }
    public function builder(): Builder
    {
        return Job::query()
            ->where('user_id', auth()->user()->id)
            ->withCount(['applications']);
    }
}

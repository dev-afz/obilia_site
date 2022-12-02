<?php

namespace App\Http\Livewire\Tables\ServiceProvider;

use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class LikedJobDataTable extends DataTableComponent
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
            Column::make("Title", "title")
                ->format(fn ($value, $column, $row) => '<a target="blank" href="' . route('jobs.show', $column->slug) . '">' . $value . '</a>')
                ->searchable()
                ->sortable()
                ->html(),

            Column::make("Banner", "banner")
                ->format(function ($v, $c, $r) {
                    return '<div data-view-onclick class="dashboard-message-avtar"><img  src="' . (($v) ? asset($v) : 'https://via.placeholder.com/200') . '" alt=""></div>';
                })
                ->html(),
            Column::make("Description", "description")

                ->format(function ($v, $c, $r) {
                    return view('components.helper.description-viewer', ['body' => $v]);
                })
                ->sortable()
                ->html(),
            Column::make("Payment Type", "payment_type")
                ->sortable(),
            Column::make("Size", "size")
                ->sortable(),
            Column::make("Rate from", "rate_from")
                ->format(fn ($v, $c, $r) => '₹' . $v)
                ->sortable(),
            Column::make("Rate to", "rate_to")
                ->format(fn ($v, $c, $r) => '₹' . $v)
                ->sortable(),
            Column::make("Created at", "created_at")
                ->format(fn ($v, $c, $r) => $v->format('H:i a , d M y'))
                ->sortable(),
        ];
    }

    public function builder(): Builder
    {
        return Job::query()
            ->select('jobs.*')
            ->whereHas('likes', function ($q) {
                $q->where('user_id', auth()->id());
            })
            ->with(['likes']);
    }
}

<?php

namespace App\Http\Livewire\Tables\ServiceProvider;

use App\Models\JobApplication;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class JobApplicationDataTable extends DataTableComponent
{
    protected $model = JobApplication::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Title", "job.title")
                ->searchable()
                ->sortable(),

            Column::make("Banner", "job.banner")
                ->format(function ($v, $c, $r) {
                    return '<div data-view-onclick class="dashboard-message-avtar"><img  src="' . (($v) ? asset($v) : 'https://via.placeholder.com/200') . '" alt=""></div>';
                })
                ->html(),
            Column::make("Description", "job.description")

                ->format(function ($v, $c, $r) {
                    return view('components.helper.description-viewer', ['body' => $v]);
                })
                ->sortable()
                ->html(),
            Column::make("Payment Type", "job.payment_type")
                ->sortable(),
            Column::make("Size", "job.size")
                ->sortable(),
            Column::make("Rate from", "job.rate_from")
                ->format(fn ($v, $c, $r) => '₹' . $v)
                ->sortable(),
            Column::make("Rate to", "job.rate_to")
                ->format(fn ($v, $c, $r) => '₹' . $v)
                ->sortable(),

            Column::make("Bid", "bid_price")
                ->format(fn ($v, $c, $r) => '₹' . $v)
                ->sortable(),
            Column::make("Work letter", "work_letter")
                ->format(function ($v, $c, $r) {
                    return view('components.helper.description-viewer', ['body' => $v, 'title' => 'Work letter']);
                })
                ->sortable(),

            Column::make("Status", "status")
                ->format(function ($v, $c, $r) {
                    ($v == 'pending') ? $class = 'bg-warning' : (($v == 'accepted') ? $class = 'bg-success' : $class = 'bg-danger');
                    return '<span class="badge text-capitalize ' . $class . '">' . $v . '</span>';
                })
                ->sortable()
                ->html(),


            Column::make("Created at", "created_at")
                ->format(fn ($v, $c, $r) => $v->format('H:i a, d M y'))
                ->sortable(),
        ];
    }

    public function builder(): Builder
    {
        return JobApplication::query()
            ->where('job_applications.user_id', auth()->user()->id)
            ->with(['job']);
    }
}

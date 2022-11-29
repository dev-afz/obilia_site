<x-layout>

    <x-slot:title>Job - {{ $job->title }} </x-slot>

        <div class="page-content">
            <div class="section-full job__section p-t50 p-b90 bg-white">
                <x-section.job-details :job="$job" />
            </div>
        </div>
</x-layout>

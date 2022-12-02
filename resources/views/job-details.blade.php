<x-layout>

    <x-slot:title>Job - {{ $job->title }} </x-slot>

        <div class="section-full job__section p-b90 bg-white">
            <x-section.job-details :job="$job" />
        </div>
</x-layout>

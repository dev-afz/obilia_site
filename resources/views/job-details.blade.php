<x-layout>

    <x-slot:title>Job - {{ $job->title }} </x-slot>

        <div class="section-full job__section mt-0 p-b90 bg-white">
            <x-section.job-details :job="$job" :applyBtn="false" />
        </div>
</x-layout>

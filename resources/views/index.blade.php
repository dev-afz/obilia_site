<x-layout>

    <x-slot:title> Home </x-slot>

        <x-section.hero />

        <!-- JOBS CATEGORIES SECTION START -->
        <x-section.category :categories="$categories" />
        <!-- JOBS CATEGORIES SECTION END -->

        <!-- ABOUT SECTION START -->
        <x-section.about />
        <!-- ABOUT SECTION END -->

        <!-- How It Work START -->
        <x-section.how-it-works />
        <!-- How It Work END -->

        <!-- JOB POST START -->
        <x-section.jobs :jobs="$jobs" />
        <!-- JOB POST END -->

        <!-- EXPLORE NEW LIFE START -->
        <x-section.explore />
        <!-- EXPLORE NEW LIFE END -->


        <!-- PRICING TABLE SECTION START -->
        <x-section.plan :packages="$packages" />
        <!-- PRICING TABLE SECTION END -->


        <!-- TESTIMONIAL SECTION START -->
        <x-section.testimonials />
        <!-- TESTIMONIAL SECTION END -->




        <x-slot:scripts>

        </x-slot:scripts>
</x-layout>

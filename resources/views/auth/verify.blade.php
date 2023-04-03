<x-layout>

    <x-slot name="title">
        Verify Email
    </x-slot>


    <div class="container">
        <div style="height:100vh" class="row justify-content-center align-items-center">
            <div class="col-md-6 text-ceter">
                <div class="card">
                    <div class="card-header">
                        Verify Email
                    </div>
                    <div class="card-body">
                        <h4>
                            Hi {{ auth()->user()->name }},
                            <br>
                            <br>
                            Please verify your email address.

                            @if (session('status') == 'verification-link-sent')
                                <br>
                                <br>
                                A new verification link has been sent to the email address you provided during
                                registration.
                            @endif

                            <br>

                            <form class="text-center" method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <button type="submit" class="btn btn-primary mt-5">Resend verification
                                    email</button>.
                            </form>



                        </h4>
                    </div>
                </div>
            </div>
        </div>


</x-layout>

@for ($i = 0; $i < $count; $i++)
    <div class="{{ $class ?? 'col-lg-4 col-md-6' }}">
        <div class="twm-candidates-grid-style1  skeleton mb-5">
            <div class="twm-media d-flex flex-column align-items-center">
                <div class="twm-media-pic p-0">
                    <div class="square"></div>
                </div>
                <div class="twm-candidates-tag  ">
                    <div class="line w125 w-25 h10"></div>
                </div>
            </div>
            <div class="twm-mid-content">
                <a href="candidate-detail.html" class="twm-job-title">
                    <h4>
                        <div class="line w125 h30"></div>
                    </h4>
                </a>
                <p>
                <div class="line w125 h20"></div>
                </p>
                <a href="candidate-detail.html" class="twm-view-prifile site-text-primary">
                    <div class="line w125 h30"></div>
                </a>

                <div class="twm-fot-content">
                    <div class="twm-left-info">

                        <div class="line w100 h30"></div>


                        <div class="line w100 h30"></div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endfor

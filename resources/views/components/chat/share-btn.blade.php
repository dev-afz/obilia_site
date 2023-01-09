<div class="share">
    <button id="share-btn" class="share__btn" type="button" title="Share">
        <svg class="share__btn-icon" width="24px" height="24px" viewBox="0 0 24 24" aria-hidden="true" disabled="false">
            <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                disabled="false">
                <g disabled="false">
                    <polyline class="share__btn-icon-1a" points="8,7 12,3" stroke-dasharray="5.7 5.7"
                        stroke-dashoffset="0" disabled="false">
                    </polyline>
                    <polyline class="share__btn-icon-1b" points="12,3 16,7" stroke-dasharray="5.7 5.7"
                        stroke-dashoffset="0" disabled="false">
                    </polyline>
                    <polyline class="share__btn-icon-1c" points="12,-0.73 12,24" stroke-dasharray="12 12"
                        stroke-dashoffset="-3.73" disabled="false">
                    </polyline>
                </g>
                <g disabled="false">
                    <polyline class="share__btn-icon-2a" points="4,15 4,21" stroke-dasharray="6 6" stroke-dashoffset="0"
                        disabled="false">
                    </polyline>
                    <polyline class="share__btn-icon-2b" points="20,15 20,21" stroke-dasharray="6 6"
                        stroke-dashoffset="0" disabled="false">
                    </polyline>
                    <polyline class="share__btn-icon-2c" points="-4.46,21 21,21" stroke-dasharray="16 16"
                        stroke-dashoffset="-8.46" disabled="false">
                    </polyline>
                </g>
            </g>
        </svg>
    </button>
    <ul class="share__links">
        <li class="share__link-item">
            <a class="share__link" href="#" title="Image">
                <label for="images">
                    <svg aria-hidden="true" focusable="false" data-prefix="fa-light" data-icon="image"
                        class="svg-inline--fa fa-image fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path
                            d="M324.9 157.8c-11.38-17.38-39.89-17.31-51.23-.0625L200.5 268.5L184.1 245.9C172.7 229.1 145.9 229.9 134.4 245.9l-64.52 89.16c-6.797 9.406-7.75 21.72-2.547 32C72.53 377.5 83.05 384 94.75 384h322.5c11.41 0 21.8-6.281 27.14-16.38c5.312-10 4.734-22.09-1.516-31.56L324.9 157.8zM95.8 352l62.39-87.38l29.91 41.34C191.2 310.2 196.4 313.2 201.4 312.6c5.25-.125 10.12-2.781 13.02-7.188l83.83-129.9L415 352H95.8zM447.1 32h-384C28.65 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM480 416c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V96c0-17.64 14.36-32 32-32h384c17.64 0 32 14.36 32 32V416zM144 192C170.5 192 192 170.5 192 144S170.5 96 144 96S96 117.5 96 144S117.5 192 144 192zM144 128c8.822 0 15.1 7.178 15.1 16S152.8 160 144 160S128 152.8 128 144S135.2 128 144 128z"
                            fill="currentColor" />
                    </svg>
                    <input type="file" accept="image/*" name="images[]" id="images" hidden="">
                </label>
            </a>
        </li>
        {{-- <li class="share__link-item">
            <a class="share__link" href="#" title="Video">
                <label for="videos">
                    <svg aria-hidden="true" focusable="false" data-prefix="fa-light" data-icon="video"
                        class="svg-inline--fa fa-video fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path
                            d="M558.8 99.64c-10.59-5.484-23.37-4.76-33.15 2.099l-102.8 72.04c-7.25 5.062-9 15.05-3.938 22.28C423.1 203.3 433.9 205 441.2 200L544 128v255.9L441.2 312c-7.266-5.047-17.22-3.312-22.28 3.938c-5.062 7.234-3.312 17.22 3.938 22.28l102.8 71.98c5.5 3.844 11.94 5.786 18.38 5.786c5.047 0 10.12-1.203 14.78-3.625C569.4 406.8 576 395.1 576 383.1V128C576 116 569.4 105.2 558.8 99.64zM320 64H64C28.65 64 0 92.65 0 128v256c0 35.35 28.65 64 64 64h256c35.35 0 64-28.65 64-64V128C384 92.65 355.3 64 320 64zM352 384c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V128c0-17.64 14.36-32 32-32h256c17.64 0 32 14.36 32 32V384z"
                            fill="currentColor" />
                    </svg>
                    <input type="file" accept="video/*" name="videos[]" multiple id="videos" hidden="">
                </label>
            </a>
        </li>
        <li class="share__link-item">
            <a class="share__link" href="#" title="File">
                <label for="files">
                    <svg aria-hidden="true" focusable="false" data-prefix="fa-light" data-icon="paperclip"
                        class="svg-inline--fa fa-paperclip fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512">
                        <path
                            d="M352 112V352c0 88.22-71.78 160-160 160s-160-71.78-160-160V208C32 199.2 39.16 192 48 192S64 199.2 64 208V352c0 70.58 57.42 128 128 128s128-57.42 128-128V112C320 67.89 284.1 32 240 32S160 67.89 160 112V320c0 17.64 14.36 32 32 32s32-14.36 32-32V144C224 135.2 231.2 128 240 128S256 135.2 256 144V320c0 35.3-28.7 64-64 64s-64-28.7-64-64V112C128 50.25 178.3 0 240 0S352 50.25 352 112z"
                            fill="currentColor" />
                    </svg>
                    <input type="file" accept="application/pdf,application/vnd.ms-excel" name="files[]"
                        id="file" hidden="">
                </label>
            </a>
        </li> --}}
    </ul>
</div>

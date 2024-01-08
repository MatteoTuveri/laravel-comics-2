<div class="bg-footer py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex">
            @foreach ($store['footer_lists'] as $item)
                <ul class="list-unstyled mx-3">
                    <li class="fw-bold text-white text-uppercase title-list mb-2">{{ $item['title'] }}</li>
                    @foreach ($item['list'] as $dot)
                        <li class="text-white">{{ $dot }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
    <div>
        <img class="position-absolute logo-bg" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="bg-logo">
    </div>
</div>
<div class="call-to-action py-4">
    <div class="container d-flex justify-content-between">
        <div class="border border-3 border-primary p-3 ">
            <h3 class="text-white mb-0">SIGN UP NOW</h2>
        </div>
        <div class="d-flex align-items-center">
            <h3 class="text-primary mb-0 fw-bold">FOLLOW US</h3>
            <div>
                @foreach ($store['socials'] as $item)
                    <img class="ms-2" src="{{ Vite::asset($item['img']) }}" alt="{{ $item['title'] }}">
                @endforeach
            </div>
        </div>
    </div>
</div>
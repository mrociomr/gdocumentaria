<div class="header pb-1 pt-2 pt-lg-6 d-flex align-items-center" style=" background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-4 text-white">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <p class="text-white m-0 mb-5">{{ $description }}</p>
                @endif
            </div>
        </div>
    </div>
</div> 
<x-app-layout>
    <div class="pagetitle">
        <h1>{{ __('Post') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">{{__('Dashboard')}}</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('post.index') }}">{{ __('Resource') }}</a></li>
                <li class="breadcrumb-item active">{{__('Post')}}</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-5">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary float-end" ><i class="bi bi-file-earmark-plus-fill me-1 "></i> Add a New Options</a>
                    </div>
                    <div class="card-body">
                        <h4>Subject: {{ $post->subjects }}</h4>
                        <p><small class="text-lead">Status: {{ $post->status }}</small></p>
                        <p>{{ $post->post }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

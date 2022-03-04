@section('title', __("Register Company"))

@section('title', __("Control Panel"))

<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="h4 font-weight-bold">
                    {{  __("Register Company") }}
                </h2>
            </div>
            <div class="col-sm-6">
                {{ Breadcrumbs::render('tenantsCreate') }}
            </div>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('tenants.store') }}" method="POST" class="form" enctype="multipart/form-data">
                @include('admin.pages.tenants._partials.form')
            </form>
        </div>
    </div>
</x-app-layout>

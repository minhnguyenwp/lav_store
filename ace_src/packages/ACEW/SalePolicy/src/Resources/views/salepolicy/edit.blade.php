@extends('admin::layouts.content')

@section('page_title')
    {{ __('salepolicy::app.sale-policy.edittitle') }}
@stop

@section('content')
<div class="content">
<form method="POST" action="{{ route('salepolicy.admin.update', $content->id) }}" @submit.prevent="onSubmit" enctype="multipart/form-data">
    <div class="page-header">
        <div class="page-title">
        <i class="icon angle-left-icon back-link" 
            onclick="history.length > 1 ? history.go(-1) : window.location = '{{ url('/admin/dashboard') }}';"></i>
            <h1>{{ __('salepolicy::app.sale-policy.edittitle') }}</h1>
            <p>{{ __('salepolicy::app.sale-policy.subtitlepage') }}</p>
        </div>

        <div class="page-action">
            <button type="submit" class="btn btn-lg btn-primary">
                Save
            </button>
        </div>
    </div>

    <div class="page-content">
        @csrf()
        <input name="_method" type="hidden" value="POST">

        <div class="control-group" :class="[errors.has('type') ? 'has-error' : '']">
            <label for="type" class="required">
                Type of setting
            </label>
            <input 
                type="text" 
                v-validate="'required|max:100'" 
                class="control" 
                id="type" 
                name="type" 
                value="{{ $content->type }}" 
                data-vv-as="&quot;Type&quot;">

            <span class="control-error" v-if="errors.has('type')">@{{ errors.first('type') }}</span>
        </div>
        <?php 
            $jsonData = json_decode($content->json_content); 
            
            //:images='"{{ Storage::url($slider->path) }}"'
        ?>

        <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
            <label class="required">{{ __('admin::app.catalog.categories.image') }}</label>

            <image-wrapper 
                :button-label="'Upload Image'" 
                input-name="image" 
                :multiple="false" 
                :images='"{{ Storage::url($jsonData->icon_path) }}"'
                

                ></image-wrapper>

            <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                @foreach ($errors->get('image.*') as $key => $message)
                    @php echo str_replace($key, 'Image', $message[0]); @endphp
                @endforeach
            </span>
        </div>
        <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
            <label for="title" class="required">
                Title of Policy
            </label>
            <input 
                type="text" 
                v-validate="'required'" 
                class="control" 
                id="title" 
                name="title" 
                value="{{ $jsonData->title ? $jsonData->title : ''}}" 
                data-vv-as="&quot;Title&quot;">

            <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
        </div>

        <div class="control-group" :class="[errors.has('desc') ? 'has-error' : '']">
            <label for="desc" class="required">
                Content of Policy
            </label>
            <textarea 
                id="desc" 
                name="desc" 
                rows="10" 
                v-validate="'max:250'" 
                class="control" 
                cols="30"
                data-vv-as="&quot;Content&quot;">{{ $jsonData->desc ? $jsonData->desc : ''}}</textarea>
            <span class="control-error" v-if="errors.has('desc')">@{{ errors.first('desc') }}</span>
        </div>

        
    </div>
</form>
</div>


@stop
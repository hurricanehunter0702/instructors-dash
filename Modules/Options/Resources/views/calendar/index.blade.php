@extends('core::layouts.app')
@section('title', __('Events'))
@push('head')
@endpush
@section('content')
<div class="container">
  <form id="form_create" method="post" action="{{ route('options.calendar-setting.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="form-label">@lang('Calendar Color')</label>
      <div class="input-group">
        <input type="color" name="calendar_color" class="form-control" value="{{ is_null($calendarSetting) ? '': $calendarSetting->bg_color }}" />
      </div>
    </div>
    <div class="seo-content">
      <div class="form-group">
          <label class="form-label">@lang('SEO Title')</label>
          <input type="text" name="seo_title" value="{{ is_null($calendarSetting) ? '' : $calendarSetting->title }}"
              class="form-control">
      </div>
      <div class="form-group">
          <label class="form-label">@lang('SEO Description')</label>
          <textarea name="seo_description" rows="3" class="form-control">{{ is_null($calendarSetting) ? '' : $calendarSetting->description }}</textarea>
      </div>
      <div class="form-group">
          <label class="form-label">@lang('SEO Keywords')</label>
          <textarea name="seo_keywords" rows="3" class="form-control">{{ is_null($calendarSetting) ? '' : $calendarSetting->description }}</textarea>
      </div>
    </div>
    <div class="card-footer">
      <div class="d-flex">
        <a href="{{ route('options.calendar-setting.index') }}" class="btn btn-secondary">@lang('Cancel')</a>
        <button type="submit" class="btn btn-success ml-auto">@lang('Save')</button>
      </div>
    </div>  
  </form>
</div>
@endsection
@push('scripts')
@endpush
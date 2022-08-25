<!-- <div class="job mt-4">
    <h3>{{ __('locale.Find A Job') }}</h3>
    <form>
        <label>
            <i class="flaticon-send"></i>
        </label>
        <input type="email" class="form-control" placeholder="{{ __('locale.Email address') }}">
        <button type="submit" class="btn">{{ __('locale.Get A Job Alert') }}</button>
    </form>
</div> -->

<div class="job widget-item {{ $class }}">
    <h3>{{ __('locale.Find A Job') }}</h3>
    <form>
        <label>
            <i class="flaticon-send"></i>
        </label>
        <input type="text" class="form-control" placeholder="{{ __('locale.Email address') }}">
        <button type="submit" class="btn">{{ __('locale.Get A Job Alert') }}</button>
    </form>
</div>
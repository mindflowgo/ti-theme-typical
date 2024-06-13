@if ($showLocalThumb)
    <img
        class="img-fluid pull-left"
        src="{{ $locationCurrent->getThumb(['width' => $localThumbWidth, 'height' => $localThumbHeight]) }}"
    />
@endif
<dl class="no-spacing">
    <dd><h1 class="h1">{{ $locationCurrent->getName() }}</h1></dd>
    <dd class="text-muted d-flex">

        <div class="rating rating-sm">
        @if ($showReviews)           
                @php $reviewScore = $locationCurrent->reviews_score() @endphp 
                @if ($reviewScore > 0)
                <span class="text-start small"><i class="fs-5 bi bi-hand-thumbs-up"></i>&nbsp;{{round(($reviewScore * (100/5)), 0) }}%&nbsp;&nbsp;({{ $locationCurrent->reviews_count ?? 0 }})</span>
                @endif       
        @endif 
        &nbsp; 
        @php
            $openingTime = make_carbon($locationCurrentSchedule->getOpenTime());
        @endphp
            <span class="small bi bi-clock"></span>
            @if ($locationCurrentSchedule->isOpen())
                <span>@lang('igniter.local::default.text_is_opened')</span>
            @elseif ($locationCurrentSchedule->isOpening())
                <span class="text-muted">{!! sprintf(lang('igniter.local::default.text_opening_time'), $openingTime->isoFormat($openingTimeFormat)) !!}</span>
            @else
                <span class="text-muted">@lang('igniter.local::default.text_closed')</span>
            @endif
            <span display="block">•</span>
        @if ($openingTime->isToday() && $locationCurrentSchedule->getPeriod($openingTime)->opensAllDay())
            <span>@lang('igniter.local::default.text_24_7_hour')</span>
        @elseif ($openingHours = $__SELF__->getOpeningHours($localBoxTimeFormat))
            {!! implode(', ', $openingHours) !!}
        @endif
        </div>

        <button
        type="button"
        class="badge badge-secondary text-black text-truncate" style='background-color: transparent; border: 0px;' 
        data-bs-toggle="modal"
        data-bs-target="#infoModal"
        >
            <i class="bi bi-info-circle-fill"></i>
        </button>
    </dd>
    <dd>
        <span class="text-muted">{!! format_address($locationCurrent->getAddress(), FALSE) !!}</span>
    </dd>
</dl>

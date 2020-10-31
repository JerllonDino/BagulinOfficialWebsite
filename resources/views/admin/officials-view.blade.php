<div class="container">
    @php
    $count = $officials ? count($officials) : 0;
    @endphp
    @if ($count < $max)
    <button class="btn btn-primary indi-officials" id="add-official">Add Official</button>
    @endif
        <div class="row">
            @foreach ($officials as $official)
            <div class="col col-lg-3 col-sm-6 col-12">
                <div class="card mt-3 indi-officials" data-position="{{$official->position}}" data-id="{{ $official->id }}">
                    <button type="button" class="close text-right delete-official" data-id="{{ $official->id }}" data-name='{{ $official->first_name." ".$official->middle_name." ".$official->last_name }}'>
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="card-body text-center">
                        <img src="{{ $official->welcome_image ? '/storage/officials/'.$official->position.'/'.$official->welcome_image : asset('img/official.png') }}"
                             class="rounded-circle img-thumbnail multiple" alt="">
                        <h6 class="mt-3 small">
                            {{ $official->first_name." ".$official->middle_name." ".$official->last_name }}</h6>
                            <i class="small">{{$official->location}}</i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>


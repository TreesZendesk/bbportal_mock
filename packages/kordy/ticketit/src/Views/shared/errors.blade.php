@if($errors->first() != '')
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">{{ trans('ticketit::lang.flash-x') }}</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('warning'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">{{ trans('ticketit::lang.flash-x') }}</button>
        {{ session('warning') }}
    </div>
@endif
@if(Session::has('status'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">{{ trans('ticketit::lang.flash-x') }}</button>
        {{ session('status') }}
    </div>
@endif
@if(Session::has('changed_fields'))
  <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">{{ trans('ticketit::lang.flash-x') }}</button>
    <p>These fields will be synchronized to the Zendesk Support:</p>
    <ul>
      @if (session('changed_fields') && count(session('changed_fields') > 0))
        @foreach (session('changed_fields') as $type => $fields)
          {{--*/ $numOfFields = count($fields) /*--}}
          <?php $numOfFields = count($fields); ?>

          @if ($fields && $numOfFields > 0)
            @if ($type == "customFields")
              Updated {!! $numOfFields !!} <b>{!!($numOfFields > 1) ? " Custom Fields" : "Custom Field" !!}</b>
            @elseif ($type == "comments")
              Added {!! $numOfFields !!} <b>{!!($numOfFields > 1) ? " Comments" : "Comment" !!}</b>
            @endif
            <ul>
            @foreach ($fields as $key => $field)
              <li>{!! $field !!}</li>
            @endforeach
            </ul>
          @endif
        @endforeach
      @endif
    </ul>
  </div>
@endif

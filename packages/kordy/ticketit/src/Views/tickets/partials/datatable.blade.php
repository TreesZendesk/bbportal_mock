<table class="table table-condensed table-stripe ddt-responsive" class="ticketit-table">
    <thead>
        <tr>
            <td>{{ trans('ticketit::lang.table-id') }}</td>
            <td>{{ trans('ticketit::lang.table-subject') }}</td>
            <td>{{ trans('ticketit::lang.table-status') }}</td>
            <td>{{ trans('ticketit::lang.table-last-updated') }}</td>
            <td>{{ trans('ticketit::lang.table-agent') }}</td>
          @if( $u->isAgent() || $u->isAdmin() )
            <td>{{ trans('ticketit::lang.table-priority') }}</td>
            {{-- <td>{{ trans('ticketit::lang.table-owner') }}</td> --}}
            <td>{{ trans('ticketit::lang.table-requester_email') }}</td>
            <td>{{ trans('ticketit::lang.table-category') }}</td>
          @endif
        </tr>
    </thead>
</table>

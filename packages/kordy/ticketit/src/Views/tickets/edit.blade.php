<div class="modal fade" id="ticket-edit-modal" tabindex="-1" role="dialog" aria-labelledby="ticket-edit-modal-Label">
    <div class="modal-dialog model-lg" role="document">
        <div class="modal-content">
            {!! CollectiveForm::model($ticket, [
                 'route' => [$setting->grab('main_route').'.update', $ticket->id],
                 'method' => 'PATCH',
                 'class' => 'form-horizontal'
             ]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">{{ trans('ticketit::lang.flash-x') }}</span></button>
                <h4 class="modal-title" id="ticket-edit-modal-Label">{{ $ticket->subject }}</h4>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">


                    {{--@if($u->isAdmin())--}}
                    {{-- <div class="form-group col-lg-12">
                        {!! CollectiveForm::text('subject', $ticket->subject, ['class' => 'form-control', 'required']) !!}
                    </div> --}}
                    {{-- <div class="form-group col-lg-12">
                      {!! CollectiveForm::label('subject', "Isi Komplain", [
                        'class' => 'formGroupExampleInput'
                      ]) !!}

                      <div class="form-group">
                        {!! CollectiveForm::textarea('content', $ticket->html, [
                          'class' => 'form-control summernote-editor', 'rows' => '5', 'required'
                          ]) !!}
                      </div>
                    </div> --}}
                    <div class="form-group col-lg-6">
                        {!! CollectiveForm::label('NIK', "NIK" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                          {!! CollectiveForm::text('NIK', $ticket->NIK, [
                              'class' => 'form-control'
                          ]) !!}
                        </div>
                    </div>

                    <div class="form-group col-lg-6">
                        {!! CollectiveForm::label('nomer_mobil', "Nomer Mobil" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                          {!! CollectiveForm::text('nomer_mobil', $ticket->nomer_mobil, [
                              'class' => 'form-control'
                          ]) !!}
                        </div>
                    </div>

                    <div class="form-group col-lg-12">
                        {!! CollectiveForm::label('penegemudi', "Pengemudi" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                          {!! CollectiveForm::text('pengemudi', $ticket->pengemudi, [
                              'class' => 'form-control'
                          ]) !!}
                        </div>
                    </div>

                    <div class="form-group col-lg-12">
                        <hr class="half-rule"/>

                        {!! CollectiveForm::label('subject', "Isi Komplain" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                          {!! CollectiveForm::textarea('content', $ticket->html, [
                              'class' => 'form-control summernote-editor', 'rows' => '5'
                          ]) !!}
                        </div>
                    </div>
                    {{--@endif--}}
                    <div class="form-group col-lg-12">
                        {!! CollectiveForm::label('penyelesaian_tamu', "Penyelesaian Tamu" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                          {!! CollectiveForm::textarea('penyelesaian_tamu', $ticket->penyelesaian_tamu, [
                              'class' => 'form-control summernote-editor', 'rows' => '5'
                          ]) !!}
                        </div>
                    </div>

                    <div class="form-group col-lg-12">
                        {!! CollectiveForm::label('kesimpulan', "Kesimpulan" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                          {!! CollectiveForm::textarea('kesimpulan', $ticket->kesimpulan, [
                              'class' => 'form-control summernote-editor', 'rows' => '5'
                          ]) !!}
                        </div>
                    </div>

                    <div class="form-group col-lg-9">
                        {!! CollectiveForm::label('hasil_proses', "Hasil Proses" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                            {!! CollectiveForm::select('hasil_proses', ['ditangguhkan' => "Ditangguhkan", 'dipercepat' => "Dipercepat", 'ditunda' => "Ditunda", null => "BELUM"], $ticket->hasil_proses, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group col-lg-9">
                        {!! CollectiveForm::label('sanksi', "Sanksi" . trans('ticketit::lang.colon'), [
                            'class' => 'formGroupExampleInput col-lg-12'
                        ]) !!}
                        <div class="col-lg-12">
                            {!! CollectiveForm::select('sanksi', ['peringati' => "Peringati", 'pecat_hormat' => "Pecat (terhormat)", 'pecat_tidak_hormat' => "Pecat (tidak terhormat)", 'jeblosin' => "Jeblosin Ke Penjara", null => "TIDAK ADA"], $ticket->sanksi, ['class' => 'form-control']) !!}
                        </div>
                    </div>


                    <div class="clearfix"></div>

                    <hr class="half-rule"/>
                    <div class="form-group col-lg-6">
                        {!! CollectiveForm::label('priority_id', trans('ticketit::lang.priority') . trans('ticketit::lang.colon'), ['class' => 'col-lg-4 control-label']) !!}
                        <div class="col-lg-8">
                            {!! CollectiveForm::select('priority_id', $priority_lists, $ticket->priority_id, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        {!! CollectiveForm::label('agent_id', trans('ticketit::lang.agent') . trans('ticketit::lang.colon'), [
                            'class' => 'col-lg-4 control-label'
                        ]) !!}
                        <div class="col-lg-8">
                            {!! CollectiveForm::select(
                                'agent_id',
                                $agent_lists,
                                $ticket->agent_id,
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-12">
                        {!! CollectiveForm::label('category_id',  trans('ticketit::lang.category') . trans('ticketit::lang.colon'), [
                            'class' => 'col-lg-6 control-label'
                        ]) !!}
                        <div class="col-lg-6">
                            {!! CollectiveForm::select('category_id', $category_lists, $ticket->category_id, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-lg-12">
                        {!! CollectiveForm::label('status_id', trans('ticketit::lang.status') . trans('ticketit::lang.colon'), [
                            'class' => 'col-lg-6 control-label'
                        ]) !!}
                        <div class="col-lg-6">
                            {!! CollectiveForm::select('status_id', $status_lists, $ticket->status_id, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('ticketit::lang.btn-close') }}</button>
                        {!! CollectiveForm::submit(trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! CollectiveForm::close() !!}
                </div>
            </div>
        </div>

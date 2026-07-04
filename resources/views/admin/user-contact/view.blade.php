@extends('adminlte::page')

@section('title', 'User Contacts View')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{  route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">User Contact View</li>
                </ol>
            </div>
        </div>
    </div>  
@stop

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Received Message</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body card-comments">
                                <div class="card-comment">
                                    <div class="comment-text mt-2">
                                        <span class="username">
                                            Subject :-
                                        </span>
                                        {{ $contact->subject }}
                                    </div>

                                    <div class="comment-text mt-2">
                                        <span class="username">
                                            Name :-
                                            <span
                                                class="text-muted float-right">{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</span>
                                        </span>
                                        {{ $contact->name }}
                                    </div>
                                    <div class="comment-text mt-2">
                                        <span class="username">
                                            Email :-
                                        </span>
                                        <a href="mailto:{{ $contact->email }}"> {{ $contact->email }}</a>
                                    </div>
                                    @if ($contact->phone_no)
                                        <div class="comment-text mt-2">
                                            <span class="username">
                                                Phone Number :-
                                            </span>
                                            {{ $contact->phone_no }}
                                        </div>
                                    @endif

                                    <div class="comment-text mt-2">
                                        <span class="username">
                                            Message :-
                                        </span>
                                        {{ $contact->message }}
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                @if (!$replyContact)
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#replyContact"><i class="fas fa-share"></i>
                                        Reply</button>
                                @endif
                            </div>

                        </div>
                    </div>
                    @if ($replyContact)
                        <div class="col-md-12">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Reply Message</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body card-comments">
                                    <div class="card-comment">
                                        <div class="comment-text mt-2">
                                            <span class="username">
                                                Subject :-
                                                <span
                                                    class="text-muted float-right">{{ \Carbon\Carbon::parse($replyContact->created_at)->diffForHumans() }}</span>
                                            </span>
                                            {{ $replyContact->subject }}
                                        </div>
                                        <div class="comment-text mt-4">
                                            <span class="username">
                                                Message :-

                                            </span>
                                            {!! $replyContact->message !!}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Read</h3>
                        </div>
                        <form action="{{  route('admin.user-contacts.read') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $contact->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Status">Status *</label>
                                    <select class="form-control " name="is_read" id="is_read">
                                        <option value="1" {{ $contact->is_read == 1 ? 'selected' : '' }}>Read</option>
                                        <option value="0" {{ $contact->is_read == 0 ? 'selected' : '' }}>Unread
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>


    </section>

    <!-- Modal -->
    <div class="modal fade" id="replyContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compose New Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{  route('admin.user-contacts.reply') }}">
                        @csrf
                        <input type="hidden" class="form-control" value="{{ $contact->id }}" name="id">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="To:"
                                value="{{ $contact->email }}" readonly required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Subject:" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control ckeditor" rows="4" id="message" name="message" placeholder="Enter ..."
                                required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@stop

@section('js')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        CKEDITOR.replace('message');
    </script>

@stop

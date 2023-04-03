@extends('layouts.master')
@section('title') Papers | ICoSTEIS 2023 @endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/gridjs/gridjs.min.css') }}">
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Papers @endslot
        @slot('title') ICoSTEIS 2023 @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                        <i class="mdi mdi-check-all label-icon"></i><strong>Success</strong> - New paper successfully submitted
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session('deleted'))
                        <div class="alert alert-info alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                            <i class="mdi mdi-alert-circle-outline label-icon"></i><strong>Info</strong> - Paper successfully deleted
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex flex-wrap align-items-center">
                        <h4 class="card-title">
                            INTERNATIONAL CONFERENCE ON SCIENCES, TECHNOLOGY, ENGINEERING, AND INFORMATION SYSTEM 2023 (ICoSTEIS 2023)
                        </h4>
                        <p class="card-title-desc">
                            Theme: Innovation through sciences, technology, engineering, and information system for SDGs implementations
                            <br>
                            Bandung, Indonesia, August 5th, 2023 (Online Conference by Zoom)
                            <br>
                            <strong><u>Selected paper will be published on Proceeding Indexed Scopus</u></strong>
                        </p>
                    </div>


                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h4 class="card-title mb-0">Submitted Papers</h4>
                                        <div class="ms-auto">
                                            <div>
                                                <button type="button" class="btn btn-soft-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#paperModal">
                                                    <i class="bx bx-plus"></i>
                                                </button>

                                                <!-- sample modal content -->
                                                <div id="paperModal" class="modal fade" tabindex="-1" aria-labelledby="paperModalLabel" data-bs-scroll="true" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="paperModalLabel">Add New Paper</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            {!! Form::open(['route' => 'admin.add.paper', 'files' => true]) !!}
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Title</label>
                                                                            {!! Form::text('title', old('title'), ['id'=>'title', 'class'=>'form-control', 'id'=>'title', 'placeholder'=>'Enter title', 'required']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Author</label>
                                                                            {!! Form::text('author', old('author'), ['id'=>'author', 'class'=>'form-control', 'id'=>'author', 'placeholder'=>'Enter author', 'required']) !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">File</label>
                                                                            {!! Form::file('file', ['id'=>'file', 'class'=>'form-control', 'id'=>'title', 'required']) !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div id="table-gridjs"></div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/gridjs/gridjs.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        // Get the papers data from Laravel and store it in a variable
        const papersData = {!! json_encode($papers) !!};

        // Use Array.map() to rename the 'path' key to 'file'
        const renamedData = papersData.map((paper, index) => {
            return {
                id: paper.id,
                "#": index + 1, // Add an index to the data
                title: paper.title,
                author: paper.author,
                file: paper.path // Rename the 'path' key to 'file'
            };
        });
        console.log(renamedData);

        const actionColumn = {
            name: 'Action',
            formatter: (_, row) => {
                const paperId = row.cells[0].data;

                return gridjs.h('div', { className: 'd-flex flex-wrap gap-2' }, [
                    gridjs.h('a', {
                        className: 'btn btn-soft-primary waves-effect waves-light',
                        href: row.cells[4].data, // Replace with your desired link
                        target: '_blank', // Open link in new tab
                    }, gridjs.html('<i class="bx bxs-show"></i>')),
                    gridjs.h('button', {
                        className: 'btn btn-soft-danger waves-effect waves-light',
                        onclick: () => {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You will not be able to recover paper with title '" + row.cells[2].data + "'!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor:"#3980c0",
                                cancelButtonColor:"#f34e4e",
                                confirmButtonText: 'Yes, delete it!',
                                cancelButtonText: 'Cancel'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{route('admin.delete.paper', '')}}"+"/"+paperId;;
                                }
                            });
                        }
                    }, gridjs.html('<i class="bx bx-trash"></i>'))
                ]);
            }
        };

        // Create a new Grid instance with the renamed data
        new gridjs.Grid({
            columns: [
                {name:'Id', hidden: true},
                '#',
                'Title',
                'Author',
                {name:'file', hidden: true},
                actionColumn
            ],
            pagination: { limit: 5 },
            sort: true,
            search: true,
            data: renamedData
        }).render(document.getElementById("table-gridjs"));
    </script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

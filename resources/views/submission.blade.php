@extends('layouts.master')
@section('title') Submission | ICoSTEIS 2023 @endsection

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/gridjs/gridjs.min.css') }}">
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Submission @endslot
        @slot('title') ICoSTEIS 2023 @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
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
                                                <a href="https://www.google.com/" target="_blank" class="btn btn-soft-primary waves-effect waves-light">
                                                    Register
                                                </a>
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
    <script>
        // Get the papers data from Laravel and store it in a variable
        const papersData = {!! json_encode($papers) !!};

        // Use Array.map() to rename the 'path' key to 'file'
        const renamedData = papersData.map((paper, index) => {
            return {
                '#': index + 1, // Add an index to the data
                title: paper.title,
                author: paper.author,
                file: paper.path // Rename the 'path' key to 'file'
            };
        });

        const actionColumn = {
            name: 'Action',
            formatter: (_, row) => {
                return gridjs.h('div', { className: 'd-flex flex-wrap gap-2' }, [
                    gridjs.h('a', {
                        className: 'btn btn-soft-primary waves-effect waves-light',
                        href: row.cells[3].data, // Replace with your desired link
                        target: '_blank', // Open link in new tab
                    }, gridjs.html('<i class="bx bxs-show"></i>'))
                ]);
            }
        };

        // Create a new Grid instance with the renamed data
        new gridjs.Grid({
            columns: ['#', 'Title', 'Author', {name:'file', hidden: true}, actionColumn],
            pagination: { limit: 5 },
            sort: true,
            search: true,
            data: renamedData
        }).render(document.getElementById("table-gridjs"));
    </script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

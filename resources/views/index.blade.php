@extends('layouts.master')
@section('title') Info | ICoSTEIS 2023 @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Info @endslot
        @slot('title') ICoSTEIS 2023 @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
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
                </div><!-- end card header -->

                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Home</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#aboutus-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-info-circle"></i></span>
                                <span class="d-none d-sm-block">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#committee-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-user-friends"></i></span>
                                <span class="d-none d-sm-block">Committee</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#callpapers-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-file-upload"></i></span>
                                <span class="d-none d-sm-block">Call for Papers</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#downloads-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-download"></i></span>
                                <span class="d-none d-sm-block">Downloads</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home-1" role="tabpanel">
                            <div>
                                <img src="{{ URL::asset('assets/images/poster_icosteis.png') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="tab-pane" id="aboutus-1" role="tabpanel">
                            <div class="accordion" id="accordionOne">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="conference">
                                        <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Conference
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="conference" data-bs-parent="#accordionOne">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                International Conference On Sciences, Technology, Engineering, And Information System 2023 (ICoSTEIS 2023)
                                                is an excellent communication forum for discussion and exchange of ideas for researchers and practitioners
                                                in the field of sciences, technology, engineering, and information system from around the world. This conference
                                                was organized by Research Collaborations Community (RCC) and was supported by several Universities in the World.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="partner_or">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Partner Organizations
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="partner_or" data-bs-parent="#accordionOne">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered border-primary mb-0">

                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Organization Name</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Universitas Informatika Dan Bisnis Indonesia</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Indonesian Academic Research Society</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="con_scope">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Conference Scope
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="con_scope" data-bs-parent="#accordionOne">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                The conference covers areas such as sciences, technology, engineering, and information system, and other following scopes: <br><br>
                                                <div class="table-responsive">
                                                    <table class="table mb-0 table-bordered">

                                                        <thead class="table-light">
                                                        <tr>
                                                            <th>Sciences</th>
                                                            <th>Technology</th>
                                                            <th>Engineering</th>
                                                            <th>Information</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Natural Sciences</td>
                                                            <td>Innovation Technology and Management</td>
                                                            <td>Civil and Environmental Engineering</td>
                                                            <td>Information systems and applications</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mathematics</td>
                                                            <td>Internet Technologies</td>
                                                            <td>Manufacturing Engineering</td>
                                                            <td>Information and data security</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Statistics</td>
                                                            <td>E-Business and/or E-Commerce</td>
                                                            <td>Software Engineering</td>
                                                            <td>Cryptography</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Physics</td>
                                                            <td>Start-up Technology</td>
                                                            <td>Electrical</td>
                                                            <td>Computational intelligence</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Biology</td>
                                                            <td>Biotechnology</td>
                                                            <td>Machine Engineering</td>
                                                            <td>Computer Business</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chemistry</td>
                                                            <td>Education Technology</td>
                                                            <td>CAD/CAM/CAT/CIM</td>
                                                            <td>Data Mining</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Environment</td>
                                                            <td>Block-chain Technology</td>
                                                            <td>Robotics and Mechatronics</td>
                                                            <td>Machine Learning</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ecology</td>
                                                            <td>Networking Technology</td>
                                                            <td>Engineering Mathematics</td>
                                                            <td>Human Computer Interaction</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Operation Research</td>
                                                            <td>Social Media</td>
                                                            <td>Aerospace Engineering</td>
                                                            <td>Green Computing</td>
                                                        </tr>
                                                        <tr>
                                                            <td>and so on.</td>
                                                            <td>and so on.</td>
                                                            <td>and so on.</td>
                                                            <td>and so on.</td>
                                                        </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="committee-1" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered">

                                    <thead>
                                    <tr>
                                        <th colspan="3" class="text-center table-light">Scientific Committee</th>
                                    </tr>
                                    <tr>
                                        <th>Scopus ID</th>
                                        <th>Name</th>
                                        <th>Organization Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>35761412000</td>
                                        <td>Prof. Dr. Mustafa Mamat</td>
                                        <td>Faculty of Informatics and Computing, Universiti Sultan Zainal Abidin, Kuala Terengganu, Malaysia</td>
                                    </tr>
                                    <tr>
                                        <td>57191607340</td>
                                        <td>Prof. Dr. Sundarapandian Vaidyanathan</td>
                                        <td>Research and Development Centre, Vel Tech University, Avadi, Chennai, India</td>
                                    </tr>
                                    <tr>
                                        <td>6603675420</td>
                                        <td>Prof. Dr. Abdul Talib Bon</td>
                                        <td>Department of Production and Operations, University Tun Hussein Onn Malaysia, Malaysia</td>
                                    </tr>
                                    <tr>
                                        <td>35186223500</td>
                                        <td>Prof. Dr. Hafizan Juahir</td>
                                        <td>East Coast Environmental Research Institute (ESERI), Universiti Sultan Zainal Abidin, Malaysia</td>
                                    </tr>
                                    <tr>
                                        <td>54396989700</td>
                                        <td>Assoc. Prof. Dr. Puspa Liza Ghazali</td>
                                        <td>Faculty of Business and Management, Universiti Sultan Zainal Abidin, Terengganu, Malaysia</td>
                                    </tr>
                                    <tr>
                                        <td>55437842400</td>
                                        <td>Yasir Salih, Ph.D</td>
                                        <td>Faculty of Education, Red Sea University, Sudan</td>
                                    </tr>
                                    <tr>
                                        <td>57210816271</td>
                                        <td>Prof. Dr. Bob Foster</td>
                                        <td>Universitas Informatika dan Bisnis Indonesia, Bandung, Indonesia</td>
                                    </tr>
                                    <tr>
                                        <td>57211939846</td>
                                        <td>Dr. Muhamad Deni Johansyah</td>
                                        <td>Universitas Padjadjaran, Bandung, Indonesia</td>
                                    </tr>
                                    <tr>
                                        <td>55953834100</td>
                                        <td>Prof. Yuyun Hidayat, Ph.D</td>
                                        <td>Universitas Padjadjaran, Bandung, Indonesia</td>
                                    </tr>
                                    <tr>
                                        <td>36490483100</td>
                                        <td>Mohammed Yusuf Waziri, Ph.D</td>
                                        <td>Bayero University, Nigeria</td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered">

                                    <thead>
                                    <tr>
                                        <th colspan="2" class="text-center table-light">Organizing Committee</th>
                                    </tr>
                                    <tr>
                                        <th>Position</th>
                                        <th>Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Chairman</td>
                                        <td>Prof. Dr. Sukono, MM., M.Si.</td>
                                    </tr>
                                    <tr>
                                        <td>Vice Chairman</td>
                                        <td>Jumadil Saputra, Ph.D.</td>
                                    </tr>
                                    <tr>
                                        <td>Secretary</td>
                                        <td>Siti Hadiyati Yuningsih, M.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td>Vice Secretary</td>
                                        <td>Rizki Apriva Hidayana, M.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td>Treasurer</td>
                                        <td>Riza Andrian Ibrahim, M.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td>Vice Treasurer</td>
                                        <td>Dhika Surya, M.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td>Chief of Secretarial and Information Team</td>
                                        <td>Moch Panji Agung Saputra, M.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" style="vertical-align:middle;">Team Members of Secretarial and Information Team</td>
                                        <td>Grida Saktian Laksito, S.Si.</td>
                                    </tr>
                                    <tr>
                                        <td>M. Herlambang Prakarsa Yudha, M,Mat.</td>
                                    </tr>
                                    <tr>
                                        <td>Chief of Events and Equipment Team</td>
                                        <td>Dr. Kalfin, M.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" style="vertical-align:middle;">Team Members of Events and Equipment Team</td>
                                        <td>Hilda Azkiyah, M.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td>Sarah Sutisna, S.Mat.</td>
                                    </tr>
                                    <tr>
                                        <td>Chief of Output Paper Publication Team</td>
                                        <td>Aceng Sambas, Ph.D.</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" style="vertical-align:middle;">Team Members of Output Paper Publication Team</td>
                                        <td>Fahmi Sidiq, S.Farm.</td>
                                    </tr>
                                    <tr>
                                        <td>Ira Sumiati, M.Mat.</td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="callpapers-1" role="tabpanel">
                            <div class="accordion" id="accordionTwo">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="important_date">
                                        <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Important Date
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="important_date" data-bs-parent="#accordionTwo">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <div class="">
                                                    <ul class="verti-timeline list-unstyled">
                                                        <li class="event-list">
                                                            <div class="event-date text-primar">01 Jan</div>
                                                            <h5 class="font-size-17">Conference Announcement </h5>
                                                        </li>
                                                        <li class="event-list">
                                                            <div class="event-date text-primar">30 May</div>
                                                            <h5 class="font-size-17">Last Abstract Submission  </h5>
                                                        </li>
                                                        <li class="event-list">
                                                            <div class="event-date text-primar">14 Jun</div>
                                                            <h5 class="font-size-17">Last Abstract Acceptance Notification </h5>
                                                        </li>
                                                        <li class="event-list">
                                                            <div class="event-date text-primar">28 Jun</div>
                                                            <h5 class="font-size-17">Last Registration and Payment </h5>
                                                        </li>
                                                        <li class="event-list">
                                                            <div class="event-date text-primar">02 Jul</div>
                                                            <h5 class="font-size-17">Workshop (Writing of Scientific Paper)</h5>
                                                        </li>
                                                        <li class="event-list">
                                                            <div class="event-date text-primar">29 Jul</div>
                                                            <h5 class="font-size-17">Last Full Paper Submission(s) </h5>
                                                        </li>
                                                        <li class="event-list">
                                                            <div class="event-date text-primar">05 Aug</div>
                                                            <h5 class="font-size-17">Conference Dates </h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="conf_fee">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Conference Participant Fee
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="conf_fee" data-bs-parent="#accordionTwo">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered border-primary mb-0">

                                                        <thead>
                                                        <tr>
                                                            <th>Participant</th>
                                                            <th>Conference Fee</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Presenter Participant (Professional/General)</td>
                                                            <td>*IDR 200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Presenter Participant (Undergraduate Student)</td>
                                                            <td>*IDR 100,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Non-Speakers Participants</td>
                                                            <td>IDR 50,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Additional Paper</td>
                                                            <td>IDR 100,000.00</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                *RCC Members discount 25%. Registration fee for membership of RCC: IDR 150,000.00 / Year
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="publication">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Publication
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="publication" data-bs-parent="#accordionTwo">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <ul>
                                                    <li>All selected papers will be published in Proceedings Indexed by Scopus.</li>
                                                    <li>The publication fee will be notified later via email or WhatsApp Group.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bank_payment">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Bank Account for Payment
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="bank_payment" data-bs-parent="#accordionTwo">
                                        <div class="accordion-body">
                                            <div class="text-muted">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered border-primary mb-0">

                                                        <thead>
                                                        <tr>
                                                            <th colspan="2">Bank Account for Payment</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Bank Name</td>
                                                            <td>BRI</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Account No.</td>
                                                            <td>0893-01-019821-53-1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Account Name</td>
                                                            <td>F SUKONO</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Swift Code</td>
                                                            <td>BRINIDJA</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bank address</td>
                                                            <td>BRI UNIT UNPAD</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                Please send proof of payment to the committee via WhatsApp: +62 898-7058-643 (Moch Panji)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="downloads-1" role="tabpanel">
                            <p class="mb-0">
                                For those who choose to publish in AIP proceedings, please prepare the full paper following the <strong>AIPCP Article Template</strong> , others use the <strong>Full Paper General Template</strong>.
                                <br><br>
                                <div class="table-responsive">
                                <table class="table mb-0 table-bordered">

                                    <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>File Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">Abstract Template</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <a class="btn btn-soft-primary waves-effect waves-light" target="_blank" href="{{ url('/uploads/admin/icosteis-2023/Abstract Template for ICoETESAH-2022.docx') }}">
                                                    <i class="bx bx-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">2</td>
                                        <td class="align-middle">Full Paper Template</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <a class="btn btn-soft-primary waves-effect waves-light" target="_blank" href="{{ url('/') }}">
                                                    <i class="bx bx-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle">AIPCP Article Template</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <a class="btn btn-soft-primary waves-effect waves-light" target="_blank" href="{{ url('/') }}">
                                                    <i class="bx bx-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">4</td>
                                        <td class="align-middle">Guideline Presenter</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <a class="btn btn-soft-primary waves-effect waves-light" target="_blank" href="{{ url('/') }}">
                                                    <i class="bx bx-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">5</td>
                                        <td class="align-middle">Presentation Template</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <a class="btn btn-soft-primary waves-effect waves-light" target="_blank" href="{{ url('/') }}">
                                                    <i class="bx bx-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">6</td>
                                        <td class="align-middle">Virtual Background Zoom</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <a class="btn btn-soft-primary waves-effect waves-light" target="_blank" href="{{ url('/') }}">
                                                    <i class="bx bx-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">7</td>
                                        <td class="align-middle">Rundown Schedule</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <a class="btn btn-soft-primary waves-effect waves-light" target="_blank" href="{{ url('/') }}">
                                                    <i class="bx bx-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                            </p>
                        </div>
                    </div>
                </div><!-- end card-body -->

            </div><!-- end card -->
        </div><!-- end col -->
    </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

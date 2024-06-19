@if (Route::current()->getName() === 'user.index')
    <div class="mt-3 mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Add User
        </button>
    </div>
@endif
<div class="row">
    <div class="col-lg-8">
        @hasSection('user-management')
            @yield('user-management')
        @else
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="ps-3">
                            <h6>
                                000
                            </h6>
                            <span class="text-muted small pt-2 ps-1">total</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="ps-3">
                            <h6>
                                000
                            </h6>
                            <span class="text-muted small pt-2 ps-1">total</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="ps-3">
                            <h6>
                                000
                            </h6>
                            <span class="text-muted small pt-2 ps-1">total</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>{{-- End Left side columns --}}

    {{-- Right side columns --}}
    <div class="col-lg-4">

        {{-- Recent Activity --}}
        <div class="card">
            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                <div class="activity">

                    <div class="activity-item d-flex">
                        <div class="activite-label">32 min</div>
                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                        <div class="activity-content">
                            Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo
                                officiis</a> beatae
                        </div>
                    </div>{{-- End activity item --}}

                    <div class="activity-item d-flex">
                        <div class="activite-label">56 min</div>
                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                        <div class="activity-content">
                            Voluptatem blanditiis blanditiis eveniet
                        </div>
                    </div>{{-- End activity item --}}

                    <div class="activity-item d-flex">
                        <div class="activite-label">2 hrs</div>
                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                        <div class="activity-content">
                            Voluptates corrupti molestias voluptatem
                        </div>
                    </div>{{-- End activity item --}}

                    <div class="activity-item d-flex">
                        <div class="activite-label">1 day</div>
                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                        <div class="activity-content">
                            Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                                voluptatem</a> tempore
                        </div>
                    </div>{{-- End activity item --}}

                    <div class="activity-item d-flex">
                        <div class="activite-label">2 days</div>
                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                        <div class="activity-content">
                            Est sit eum reiciendis exercitationem
                        </div>
                    </div>{{-- End activity item --}}

                    <div class="activity-item d-flex">
                        <div class="activite-label">4 weeks</div>
                        <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                        <div class="activity-content">
                            Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                        </div>
                    </div>{{-- End activity item --}}

                </div>

            </div>
        </div>{{-- End Recent Activity --}}
    </div>{{-- End Right side columns --}}
</div>

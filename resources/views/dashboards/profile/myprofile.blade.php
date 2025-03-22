@extends('layout.layout')
@section('content')
    <body class="bg-secondary">
        <div class=" container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">
                @include('dashboards._sidebar')
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h1 class="h2 mb-4 mb-sm-0 me-4">Parametre du profil  </h1>

                    </div>
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                          <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                            <i class="ai-user text-primary lead pe-1 me-2"></i>
                            <h2 class="h4 mb-0">Basic info</h2>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="dropdown">
                              <a class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="width: 80px; height: 80px; background-image: url(assets/img/avatar/02.jpg);" aria-label="Upload picture">
                                <span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)">
                                  <i class="ai-camera"></i>
                                </span>
                              </a>
                              <div class="dropdown-menu my-1">
                                <a class="dropdown-item fw-normal" href="#">
                                  <i class="ai-camera fs-base opacity-70 me-2"></i>
                                  Upload new photo
                                </a>
                                <a class="dropdown-item text-danger fw-normal" href="#">
                                  <i class="ai-trash fs-base me-2"></i>
                                  Delete photo
                                </a>
                              </div>
                            </div>
                            <div class="ps-3">
                              <h3 class="h6 mb-1">Profile picture</h3>
                              <p class="fs-sm text-body-secondary mb-0">PNG or JPG no bigger than 1000px wide and tall.</p>
                            </div>
                          </div>
                          <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                            <div class="col-sm-6">
                              <label class="form-label" for="fn">First name</label>
                              <input class="form-control" type="text" value="Isabella" id="fn">
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="ln">Last name</label>
                              <input class="form-control" type="text" value="Bocouse" id="ln">
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="email">Email address</label>
                              <input class="form-control" type="email" value="bocouse@example.com" id="email">
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="phone">Phone <span class="text-body-secondary">(optional)</span></label>
                              <input class="form-control" type="tel" data-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}" placeholder="+1 ___ ___ __" id="phone">
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="country">Country</label>
                              <select class="form-select" id="country">
                                <option value="" selected="" disabled="">Select country</option>
                                <option value="Australia">Australia</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Canada">Canada</option>
                                <option value="Denmark">Denmark</option>
                                <option value="USA">USA</option>
                              </select>
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="language">Language</label>
                              <select class="form-select" id="language">
                                <option value="" selected="" disabled="">Select language</option>
                                <option value="English">English</option>
                                <option value="Français">Français</option>
                                <option value="Deutsch">Deutsch</option>
                                <option value="Italiano">Italiano</option>
                              </select>
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="timezone">Time zone</label>
                              <select class="form-select" id="timezone">
                                <option value="" selected="" disabled="">Select time zone</option>
                                <option value="AST">Atlantic Standard Time (AST)</option>
                                <option value="EST">Eastern Standard Time (EST)</option>
                                <option value="CST">Central Standard Time (CST)</option>
                                <option value="MST">Mountain Standard Time (MST)</option>
                                <option value="PST">Pacific Standard Time (PST)</option>
                                <option value="AKST">Alaskan Standard Time (AKST)</option>
                                <option value="HST">Hawaii-Aleutian Standard Time (HST)</option>
                              </select>
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="currency">Currency</label>
                              <select class="form-select" id="currency">
                                <option value="" selected="" disabled="">Select currency</option>
                                <option value="usd">$ USD</option>
                                <option value="eur">€ EUR</option>
                                <option value="ukp">£ UKP</option>
                                <option value="jpy">¥ JPY</option>
                              </select>
                            </div>


                            
                            <div class="col-12 d-flex justify-content-end pt-3">
                              <button class="btn btn-secondary" type="button">Cancel</button>
                              <button class="btn btn-primary ms-3" type="button">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
        @include('dashboards.sidebarbuttonresponsive')
    </body>
@endsection

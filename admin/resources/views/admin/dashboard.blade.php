@extends('layouts.admin.dashboard')
@section('js_block')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" type="text/javascript"></script>
    <script src="http://myiideveloper.com/helsinki/helsinki-green/javascripts/examples/dashboard.js" type="text/javascript"></script>
@endsection
@section('content')
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-lg-9">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="panel widgetbox wbox-2 bg-scale-0">
                        <a href="#">
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <span class="icon fa fa-globe color-darker-1"></span>
                                    </div>
                                    <div class="col-xs-8">
                                        <h4 class="subtitle color-darker-1">News</h4>
                                        <h1 class="title color-primary"> <a href="{{ url('news/list') }} ">154</a></h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                        <a href="#">
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <span class="icon fa fa-user color-darker-2"></span>
                                    </div>
                                    <div class="col-xs-8">
                                        <h4 class="subtitle color-darker-2">Comments</h4>
                                        <h1 class="title color-w"> 105</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                        <a href="#">
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <span class="icon fa fa-envelope color-lighter-1"></span>
                                    </div>
                                    <div class="col-xs-8">
                                        <h4 class="subtitle color-lighter-1">Share</h4>
                                        <h1 class="title color-light"> 124</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="panel">
                        <div class="panel-content">
                            <h5><b>Montly</b> Visitors</h5>
                            <canvas id="area-chart" width="400" height="160"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="panel b-primary bt-md">
                        <div class="panel-content p-none">
                            <div class="widget-list list-to-do">
                                <h4 class="list-title">Popular Categories</h4>
                                <button class="add-item btn btn-o btn-primary btn-xs"><i class="fa fa-plus"></i></button>
                                <ul>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-h1" value="option1">
                                            <label class="check" for="check-h1">Sports</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-h3" value="option1">
                                            <label class="check" for="check-h3">Business</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-h4" value="option1">
                                            <label class="check" for="check-h4">Education</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-h5" value="option1">
                                            <label class="check" for="check-h5">National</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-h6" value="option1">
                                            <label class="check" for="check-h6">Culture</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="tabs mt-none">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#home" data-toggle="tab">Employees</a></li>
                            <li><a href="#profile" data-toggle="tab">Sells</a></li>
                            <li><a href="#messages" data-toggle="tab">Messages</a></li>
                            <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>34</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <p><b>Profile</b> content</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla libero. Donec iaculis sit amet nibh non laoreet.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <p><b>Message</b> content</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla libero. Donec iaculis sit amet nibh non laoreet.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="settings">
                                <p><b>Settings</b> content</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla libero. Donec iaculis sit amet nibh non laoreet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-3">
            <div class="timeline">
                <div class="timeline-box">
                    <div class="timeline-icon bg-primary">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="timeline-content">
                        <h4 class="tl-title">Ello impedit iusto</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                    </div>
                    <div class="timeline-footer">
                        <span>Today. 14:25</span>
                    </div>
                </div>
                <div class="timeline-box">
                    <div class="timeline-icon bg-primary">
                        <i class="fa fa-tasks"></i>
                    </div>
                    <div class="timeline-content">
                        <h4 class="tl-title">consectetur adipisicing </h4> Lorem ipsum dolor sit amet. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                    </div>
                    <div class="timeline-footer">
                        <span>Today. 10:55</span>
                    </div>
                </div>
                <div class="timeline-box">
                    <div class="timeline-icon bg-primary">
                        <i class="fa fa-file"></i>
                    </div>
                    <div class="timeline-content">
                        <h4 class="tl-title">Impedit iusto minima nisi</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                    </div>
                    <div class="timeline-footer">
                        <span>Today. 9:20</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
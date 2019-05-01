@extends('layouts.admin')

@section('content')

        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">overview</h2>
                                <!--<button class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button>-->
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-25">
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-account-calendar "></i>
                                        </div>
                                        <div class="text">
                                            <h2>10368</h2>
                                            <span>Seen </span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c2">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                        <div class="text">
                                            <h2>388,688</h2>
                                            <span>All users </span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c3">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                        <div class="text">
                                            <h2>1,086</h2>
                                            <span>Teachers</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c4">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-money"></i>
                                        </div>
                                        <div class="text">
                                            <h2>$1,060,386</h2>
                                            <span> earnings</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                <div class="au-card-title" style="background-image:url('/dashboard/images/bg-title-01.jpg');">
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3>
                                        <i class="zmdi zmdi-comment-text "></i>New Messages</h3>
                                    <button class="au-btn-plus">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                </div>
                                <div class="au-task js-list-load">
                                    <div class="au-task__title">
                                        <p>Tasks for John Doe</p>
                                    </div>
                                    <div class="au-task-list js-scrollbar3">
                                        <div class="au-task__item au-task__item--danger">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class="time">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class="au-task__item au-task__item--warning">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Create new task for Dashboard</a>
                                                </h5>
                                                <span class="time">11:00 AM</span>
                                            </div>
                                        </div>
                                        <div class="au-task__item au-task__item--primary">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class="time">02:00 PM</span>
                                            </div>
                                        </div>
                                        <div class="au-task__item au-task__item--success">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Create new task for Dashboard</a>
                                                </h5>
                                                <span class="time">03:30 PM</span>
                                            </div>
                                        </div>
                                        <div class="au-task__item au-task__item--danger js-load-item">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class="time">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class="au-task__item au-task__item--warning js-load-item">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Create new task for Dashboard</a>
                                                </h5>
                                                <span class="time">11:00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-task__footer">
                                        <button class="au-btn au-btn-load js-load-btn">load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                <div class="au-card-title" style="background-image:url('/dashboard/images/bg-title-02.jpg');">
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3>
                                        <i class="zmdi zmdi-account-o"></i>Top teachers</h3>
                                    <button class="au-btn-plus">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                </div>
                                <div class="au-inbox-wrap js-inbox-wrap">
                                    <div class="au-message js-list-load">
                                        <div class="au-message__noti">

                                        </div>
                                        <div class="au-message-list">
                                            <div class="au-message__item unread">
                                                <div class="au-message__item-inner">
                                                    <div class="au-message__item-text">
                                                        <div class="avatar-wrap">
                                                            <div class="avatar">
                                                                <img src="/dashboard/images/icon/avatar-02.jpg" alt="John Smith">
                                                            </div>
                                                        </div>
                                                        <div class="text">

                                                        </div>
                                                    </div>
                                                    <div class="au-message__item-time">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__item unread">
                                                <div class="au-message__item-inner">
                                                    <div class="au-message__item-text">
                                                        <div class="avatar-wrap online">
                                                            <div class="avatar">
                                                                <img src="/dashboard/images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="name">Nicholas Martinez</h5>
                                                            <p>Art</p>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item-time">
                                                        <span>11:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__item">
                                                <div class="au-message__item-inner">
                                                    <div class="au-message__item-text">
                                                        <div class="avatar-wrap online">
                                                            <div class="avatar">
                                                                <img src="/dashboard/images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="name">Michelle Sims</h5>
                                                            <p>General</p>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item-time">
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__item">
                                                <div class="au-message__item-inner">
                                                    <div class="au-message__item-text">
                                                        <div class="avatar-wrap">
                                                            <div class="avatar">
                                                                <img src="/dashboard/images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="name">Michelle Sims</h5>
                                                            <p>Sport</p>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item-time">
                                                        <span>Sunday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__item js-load-item">
                                                <div class="au-message__item-inner">
                                                    <div class="au-message__item-text">
                                                        <div class="avatar-wrap online">
                                                            <div class="avatar">
                                                                <img src="/dashboard/images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="name">Michelle Sims</h5>
                                                            <p>Traffic</p>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item-time">
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__item js-load-item">
                                                <div class="au-message__item-inner">
                                                    <div class="au-message__item-text">
                                                        <div class="avatar-wrap">
                                                            <div class="avatar">
                                                                <img src="/dashboard/images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="name">Michelle Sims</h5>
                                                            <p>Study</p>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item-time">
                                                        <span>Sunday</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-message__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                    <div class="au-chat">
                                        <div class="au-chat__title">
                                            <div class="au-chat-info">
                                                <div class="avatar-wrap online">
                                                    <div class="avatar avatar--small">
                                                        <img src="/dashboard/images/icon/avatar-02.jpg" alt="John Smith">
                                                    </div>
                                                </div>
                                                <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="au-chat__content">
                                            <div class="recei-mess-wrap">
                                                <span class="mess-time">12 Min ago</span>
                                                <div class="recei-mess__inner">
                                                    <div class="avatar avatar--tiny">
                                                        <img src="/dashboard/images/icon/avatar-02.jpg" alt="John Smith">
                                                    </div>
                                                    <div class="recei-mess-list">
                                                        <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="send-mess-wrap">
                                                <span class="mess-time">30 Sec ago</span>
                                                <div class="send-mess__inner">
                                                    <div class="send-mess-list">
                                                        <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-chat-textfield">
                                            <form class="au-form-icon">
                                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                <button class="au-input-icon">
                                                    <i class="zmdi zmdi-camera"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="row">
                        <div class="col-lg-6">
                            <div class="au-card recent-report">
                                <div class="au-card-inner">
                                    <h3 class="title-2">recent reports</h3>
                                    <div class="chart-info">
                                        <div class="chart-info__left">
                                            <div class="chart-note">
                                                <span class="dot dot--blue"></span>
                                                <span>products</span>
                                            </div>
                                            <div class="chart-note mr-0">
                                                <span class="dot dot--green"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                        <div class="chart-info__right">
                                            <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                <span class="label">products</span>
                                            </div>
                                            <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                <span class="label">services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-report__chart">
                                        <canvas id="recent-rep-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="au-card chart-percent-card">
                                <div class="au-card-inner">
                                    <h3 class="title-2 tm-b-5">char by %</h3>
                                    <div class="row no-gutters">
                                        <div class="col-xl-6">
                                            <div class="chart-note-wrap">
                                                <div class="chart-note mr-0 d-block">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0 d-block">
                                                    <span class="dot dot--red"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="percent-chart">
                                                <canvas id="percent-chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="title-1 m-b-25">last Courses</h2>
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Create date</th>
                                        <th>order ID</th>
                                        <th>Title</th>
                                        <th class="text-right">Hourly rate</th>
                                        <th class="text-right">Capacity</th>
                                        <th class="text-right">Total price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>lowaefasdf asfdasdf</td>
                                        <td class="text-right">$999.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$999.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-28 01:22</td>
                                        <td>100397</td>
                                        <td>jhkfuyu asfdasdf</td>
                                        <td class="text-right">$756.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$756.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-27 02:12</td>
                                        <td>100396</td>
                                        <td>lowaefasdf asfdasdf</td>
                                        <td class="text-right">$22.00</td>
                                        <td class="text-right">2</td>
                                        <td class="text-right">$44.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-26 23:06</td>
                                        <td>100395</td>
                                        <td>wer 44434</td>
                                        <td class="text-right">$1199.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$1199.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-25 19:03</td>
                                        <td>100393</td>
                                        <td>lowaefasdf asfdasdf</td>
                                        <td class="text-right">$10.00</td>
                                        <td class="text-right">3</td>
                                        <td class="text-right">$30.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100392</td>
                                        <td>Smartwatch </td>
                                        <td class="text-right">$199.00</td>
                                        <td class="text-right">6</td>
                                        <td class="text-right">$1494.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-24 19:10</td>
                                        <td>100391</td>
                                        <td>lowaefasdf asfdasdf</td>
                                        <td class="text-right">$699.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$699.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-22 00:43</td>
                                        <td>100393</td>
                                        <td>retert asfdasdf</td>
                                        <td class="text-right">$10.00</td>
                                        <td class="text-right">3</td>
                                        <td class="text-right">$30.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h2 class="title-1 m-b-25">Categories</h2>
                            <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                <div class="au-card-inner">
                                    <div class="table-responsive">
                                        <table class="table table-top-countries">
                                            <tbody>
                                            <tr>
                                                <td>Art</td>
                                                <td class="text-right">12</td>
                                            </tr>
                                            <tr>
                                                <td>Music</td>
                                                <td class="text-right">33</td>
                                            </tr>
                                            <tr>
                                                <td>Art</td>
                                                <td class="text-right">12</td>
                                            </tr>
                                            <tr>
                                                <td>Music</td>
                                                <td class="text-right">33</td>
                                            </tr>
                                            <tr>
                                                <td>Art</td>
                                                <td class="text-right">12</td>
                                            </tr>
                                            <tr>
                                                <td>Music</td>
                                                <td class="text-right">33</td>
                                            </tr>
                                            <tr>
                                                <td>Art</td>
                                                <td class="text-right">12</td>
                                            </tr>
                                            <tr>
                                                <td>Music</td>
                                                <td class="text-right">33</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>CMS Powered by <a target="_blank" href="https://cyancoder.co/en"> Cyan Coder</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
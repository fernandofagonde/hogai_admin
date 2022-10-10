@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Mensagens</span>
                    <span class="info-box-number">1,410</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Pessoas</span>
                    <span class="info-box-number">410</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-file"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Contas a Receber</span>
                    <span class="info-box-number">R$ 3.648,00</span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-money"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Contas a pagar</span>
                    <span class="info-box-number">R$ 1.648,00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <section class="col-lg-7 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        To Do List
                    </h3>
                    <div class="card-tools">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a href="#" class="page-link">«</a></li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">»</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <span class="text">Design a nice theme</span>
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="done">
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                                <label for="todoCheck2"></label>
                            </div>
                            <span class="text">Make the theme responsive</span>
                            <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                <label for="todoCheck3"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                <label for="todoCheck4"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                <label for="todoCheck5"></label>
                            </div>
                            <span class="text">Check your messages and notifications</span>
                            <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                            <span class="handle ui-sortable-handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                <label for="todoCheck6"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer clearfix">
                    <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add
                        item</button>
                </div>
            </div>
        </section>

        <section class="col-lg-5 connectedSortable ui-sortable">
            <div class="card bg-gradient-success">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendar
                    </h3>
                    <div class="card-tools">
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"
                                data-offset="-52">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">Add new event</a>
                                <a href="#" class="dropdown-item">Clear events</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">View calendar</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="calendar" style="width: 100%">
                        <div class="bootstrap-datetimepicker-widget usetwentyfour">
                            <ul class="list-unstyled">
                                <li class="show">
                                    <div class="datepicker">
                                        <div class="datepicker-days" style="">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left" title="Previous Month"></span>
                                                        </th>
                                                        <th class="picker-switch" data-action="pickerSwitch"
                                                            colspan="5" title="Select Month">September 2022</th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Month"></span>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="dow">Su</th>
                                                        <th class="dow">Mo</th>
                                                        <th class="dow">Tu</th>
                                                        <th class="dow">We</th>
                                                        <th class="dow">Th</th>
                                                        <th class="dow">Fr</th>
                                                        <th class="dow">Sa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="08/28/2022"
                                                            class="day old weekend">28</td>
                                                        <td data-action="selectDay" data-day="08/29/2022"
                                                            class="day old">29</td>
                                                        <td data-action="selectDay" data-day="08/30/2022"
                                                            class="day old">30</td>
                                                        <td data-action="selectDay" data-day="08/31/2022"
                                                            class="day old">31</td>
                                                        <td data-action="selectDay" data-day="09/01/2022"
                                                            class="day">1</td>
                                                        <td data-action="selectDay" data-day="09/02/2022"
                                                            class="day">2</td>
                                                        <td data-action="selectDay" data-day="09/03/2022"
                                                            class="day weekend">3</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="09/04/2022"
                                                            class="day weekend">4</td>
                                                        <td data-action="selectDay" data-day="09/05/2022"
                                                            class="day">5</td>
                                                        <td data-action="selectDay" data-day="09/06/2022"
                                                            class="day">6</td>
                                                        <td data-action="selectDay" data-day="09/07/2022"
                                                            class="day">7</td>
                                                        <td data-action="selectDay" data-day="09/08/2022"
                                                            class="day">8</td>
                                                        <td data-action="selectDay" data-day="09/09/2022"
                                                            class="day">9</td>
                                                        <td data-action="selectDay" data-day="09/10/2022"
                                                            class="day weekend">10</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="09/11/2022"
                                                            class="day weekend">11</td>
                                                        <td data-action="selectDay" data-day="09/12/2022"
                                                            class="day">12</td>
                                                        <td data-action="selectDay" data-day="09/13/2022"
                                                            class="day">13</td>
                                                        <td data-action="selectDay" data-day="09/14/2022"
                                                            class="day">14</td>
                                                        <td data-action="selectDay" data-day="09/15/2022"
                                                            class="day">15</td>
                                                        <td data-action="selectDay" data-day="09/16/2022"
                                                            class="day">16</td>
                                                        <td data-action="selectDay" data-day="09/17/2022"
                                                            class="day weekend">17</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="09/18/2022"
                                                            class="day weekend">18</td>
                                                        <td data-action="selectDay" data-day="09/19/2022"
                                                            class="day">19</td>
                                                        <td data-action="selectDay" data-day="09/20/2022"
                                                            class="day">20</td>
                                                        <td data-action="selectDay" data-day="09/21/2022"
                                                            class="day">21</td>
                                                        <td data-action="selectDay" data-day="09/22/2022"
                                                            class="day">22</td>
                                                        <td data-action="selectDay" data-day="09/23/2022"
                                                            class="day">23</td>
                                                        <td data-action="selectDay" data-day="09/24/2022"
                                                            class="day weekend">24</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="09/25/2022"
                                                            class="day weekend">25</td>
                                                        <td data-action="selectDay" data-day="09/26/2022"
                                                            class="day">26</td>
                                                        <td data-action="selectDay" data-day="09/27/2022"
                                                            class="day">27</td>
                                                        <td data-action="selectDay" data-day="09/28/2022"
                                                            class="day active today">28</td>
                                                        <td data-action="selectDay" data-day="09/29/2022"
                                                            class="day">29</td>
                                                        <td data-action="selectDay" data-day="09/30/2022"
                                                            class="day">30</td>
                                                        <td data-action="selectDay" data-day="10/01/2022"
                                                            class="day new weekend">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="10/02/2022"
                                                            class="day new weekend">2</td>
                                                        <td data-action="selectDay" data-day="10/03/2022"
                                                            class="day new">3</td>
                                                        <td data-action="selectDay" data-day="10/04/2022"
                                                            class="day new">4</td>
                                                        <td data-action="selectDay" data-day="10/05/2022"
                                                            class="day new">5</td>
                                                        <td data-action="selectDay" data-day="10/06/2022"
                                                            class="day new">6</td>
                                                        <td data-action="selectDay" data-day="10/07/2022"
                                                            class="day new">7</td>
                                                        <td data-action="selectDay" data-day="10/08/2022"
                                                            class="day new weekend">8</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datepicker-months" style="display: none;">
                                            <table class="table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left" title="Previous Year"></span>
                                                        </th>
                                                        <th class="picker-switch" data-action="pickerSwitch"
                                                            colspan="5" title="Select Year">2022</th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Year"></span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="7"><span data-action="selectMonth"
                                                                class="month">Jan</span><span data-action="selectMonth"
                                                                class="month">Feb</span><span data-action="selectMonth"
                                                                class="month">Mar</span><span data-action="selectMonth"
                                                                class="month">Apr</span><span data-action="selectMonth"
                                                                class="month">May</span><span data-action="selectMonth"
                                                                class="month">Jun</span><span data-action="selectMonth"
                                                                class="month">Jul</span><span data-action="selectMonth"
                                                                class="month">Aug</span><span data-action="selectMonth"
                                                                class="month active">Sep</span><span
                                                                data-action="selectMonth" class="month">Oct</span><span
                                                                data-action="selectMonth" class="month">Nov</span><span
                                                                data-action="selectMonth" class="month">Dec</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datepicker-years" style="display: none;">
                                            <table class="table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left"
                                                                title="Previous Decade"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch"
                                                            colspan="5" title="Select Decade">2020-2029</th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Decade"></span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="7"><span data-action="selectYear"
                                                                class="year old">2019</span><span
                                                                data-action="selectYear" class="year">2020</span><span
                                                                data-action="selectYear" class="year">2021</span><span
                                                                data-action="selectYear"
                                                                class="year active">2022</span><span
                                                                data-action="selectYear" class="year">2023</span><span
                                                                data-action="selectYear" class="year">2024</span><span
                                                                data-action="selectYear" class="year">2025</span><span
                                                                data-action="selectYear" class="year">2026</span><span
                                                                data-action="selectYear" class="year">2027</span><span
                                                                data-action="selectYear" class="year">2028</span><span
                                                                data-action="selectYear" class="year">2029</span><span
                                                                data-action="selectYear" class="year old">2030</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datepicker-decades" style="display: none;">
                                            <table class="table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left"
                                                                title="Previous Century"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch"
                                                            colspan="5">2000-2090</th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Century"></span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="7"><span data-action="selectDecade"
                                                                class="decade old"
                                                                data-selection="2006">1990</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2006">2000</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2016">2010</span><span
                                                                data-action="selectDecade" class="decade active"
                                                                data-selection="2026">2020</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2036">2030</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2046">2040</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2056">2050</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2066">2060</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2076">2070</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2086">2080</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2096">2090</span><span
                                                                data-action="selectDecade" class="decade old"
                                                                data-selection="2106">2100</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <li class="picker-switch accordion-toggle"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

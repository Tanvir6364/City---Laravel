@extends('frontEnd.master')

@section('title')
    About Us

@endsection

@section('mainContent')
<div class="team portfolio " id="team">
    <div class="container">
        <h3 class="w3_heade_tittle_agile">Amazing Team</h3>
        <p class="sub_t_agileits">Meet Our Amazing Team...</p>
        <div class="w3layouts-grids">
            <div class="col-md-3 wthree_team_grid">
                <div class="wthree_team_grid1">
                    <div class="hover14 column">
                        <div>
                            <figure><img src="{{asset('public/frontEnd/images/t4.jpg')}}" alt=" " class="img-responsive" /></figure>
                        </div>
                    </div>
                    <div class="wthree_team_grid1_pos">
                        <h4>Rabecca Scot</h4>
                    </div>
                </div>
                <div class="wthree_team_grid2">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 wthree_team_grid">
                <div class="wthree_team_grid1">
                    <div class="hover14 column">
                        <div>
                            <figure><img src="{{asset('public/frontEnd/images/t3.jpg')}}" alt=" " class="img-responsive" /></figure>
                        </div>
                    </div>
                    <div class="wthree_team_grid1_pos">
                        <h4>Rosy Carl </h4>
                    </div>
                </div>
                <div class="wthree_team_grid2">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 wthree_team_grid">
                <div class="wthree_team_grid1">
                    <div class="hover14 column">
                        <div>
                            <figure><img src="{{asset('public/frontEnd/images/t2.jpg')}}" alt=" " class="img-responsive" /></figure>
                        </div>
                    </div>
                    <div class="wthree_team_grid1_pos">
                        <h4>David Martin</h4>
                    </div>
                </div>
                <div class="wthree_team_grid2">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 wthree_team_grid">
                <div class="wthree_team_grid1">
                    <div class="hover14 column">
                        <div>
                            <figure><img src="{{asset('public/frontEnd/images/t1.jpg')}}" alt=" " class="img-responsive" /></figure>
                        </div>
                    </div>
                    <div class="wthree_team_grid1_pos">
                        <h4>Reena Scot</h4>
                    </div>
                </div>
                <div class="wthree_team_grid2">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
    @endsection
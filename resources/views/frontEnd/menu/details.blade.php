@extends('frontEnd.master')

@section('title')
    Details

@endsection


@section('mainContent')

<div class="banner-bottom" id="about">
    <div class="container">
        <h2 class="w3_heade_tittle_agile">Single Page</h2>
        <p class="sub_t_agileits">Add Short Description</p>
        <div class="single-grid">
            <div class="col-md-8 w3ls-blog-left">
                <div class="w3-blog-left-grid">
                    <div class="w3ls-blog-leftl">
                        <h4>Mar <span>15</span></h4>
                        <a href="#"><i class="fa fa-tags" aria-hidden="true"></i>10</a>
                    </div>
                    <div class="w3ls-blog-leftr">
                        <img src="{{asset('public/frontEnd/images/banner2.jpg')}}" alt=" " class="img-responsive" />
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>User Name</a></li>
                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>0 Tags</a></li>
                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>10 Comments</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="admin-text">
                        <h5>Written By Admin Name</h5>
                        <div class="admin-text-left">
                            <a href="#"><img src="{{asset('public/frontEnd/images/ad1.jpg')}}" alt=""/></a>
                        </div>
                        <div class="admin-text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span>View all posts by:<a href="#"> Admin </a></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="response">
                        <h4>Responses</h4>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img class="media-object" src="{{asset('public/frontEnd/images/ad.jpg')}}" alt=""/>
                                </a>
                                <h5><a href="#">Admin</a></h5>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li>Mar 15, 2017</li>
                                    <li><a href="single.html">Reply</a></li>
                                </ul>
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" src="{{asset('public/frontEnd/images/ad1.jpg')}}" alt=""/>
                                        </a>
                                        <h5><a href="#">Admin</a></h5>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <ul>
                                            <li>May 05, 2017</li>
                                            <li><a href="single.html">Reply</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img class="media-object" src="{{asset('public/frontEnd/images/ad.jpg')}}" alt=""/>
                                </a>
                                <h5><a href="#">Admin</a></h5>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li>June 15, 2017</li>
                                    <li><a href="single.html">Reply</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="coment-form">
                        <h4>Leave your comment</h4>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name "  required="">
                            <input type="email" name="email" placeholder="Email (will not be published)*" required="">
                            <input type="text" name="website" placeholder="Website" required="">
                            <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                            <input type="submit" value="Submit Comment" >
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 w3-agile-blog-right">
                <h3>Categories</h3>
                <ul>
                    <li><a href="#">Aliquam erat volutpat</a></li>
                    <li><a href="#">Integer rutrum ante eu lacus</a></li>
                    <li><a href="#">Cum sociis natoque penatibus</a></li>
                    <li><a href="#">Mauris fermentum dictum magna</a></li>
                    <li><a href="#">Sed laoreet aliquam leo</a></li>
                    <li><a href="#">Cum sociis natoque penatibus</a></li>
                </ul>
                <div class="agile-info-recent">
                    <h3>Recent Posts</h3>
                    <div class="w3ls-recent-grids">
                        <div class="w3l-recent-grid">
                            <div class="wom">
                                <a href="#"><img src="{{asset('public/frontEnd/images/t1.jpg')}}" alt=" " class="img-responsive" /></a>
                            </div>
                            <div class="wom-right">
                                <h4><a href="#">Integer rutrum ante eu</a></h4>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                    Ut tellus dolor, dapibus eget.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3l-recent-grid">
                            <div class="wom">
                                <a href="#"><img src="{{asset('public/frontEnd/images/t2.jpg')}}" alt=" " class="img-responsive" /></a>
                            </div>
                            <div class="wom-right">
                                <h4><a href="#">Integer rutrum ante eu</a></h4>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                    Ut tellus dolor, dapibus eget.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3l-recent-grid">
                            <div class="wom">
                                <a href="#"><img src="{{asset('public/frontEnd/images/t3.jpg')}}" alt=" " class="img-responsive" /></a>
                            </div>
                            <div class="wom-right">
                                <h4><a href="#">Integer rutrum ante eu</a></h4>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo.
                                    Ut tellus dolor, dapibus eget.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="w3-agile-poll">
                    <h3>Poll</h3>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            80%
                        </div>
                    </div>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            90%
                        </div>
                    </div>
                    <div class="progress p">
                        <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //single -->
    </div>
</div>
@endsection
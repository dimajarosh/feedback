<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <script src="https://kit.fontawesome.com/b64e10b681.js"></script> -->
    <!-- <script src="https://kit.fontawesome.com/b64e10b681.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="js/main.js"></script>

    <!-- fancyBox CSS -->
    <link href="css/jquery.fancybox.css" rel="stylesheet">
 
    <!-- fancyBox JS -->
    <script src="js/jquery.fancybox.js"></script>
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <!-- <script type="text/javascript" src="js/ajax.js"></script> -->
    <title>
        
    </title>
</head>
<body>
    <!--  Review Form -->
    <div class="container">
        <div class="row">
        <div class="col-md-9 col-md-offset-0">
            <div>
                <h2>Feedback</h2>
                @if ($errors->any())
                    <div class="alert alert-danger col-md-9">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    @if(Request::method() == 'POST')
                        <div class="alert alert-primary" role="alert">
                          Your feedback saved
                        </div>
                    @endif
                @endif

                <form class="form-horizontal" action="/" method="post" enctype="multipart/form-data" >
                    <fieldset>
                        {{ csrf_field() }}
                        <!-- Name input-->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Full Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>
        
                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Your E-mail</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>
                
                        <!-- Message body -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="message">Your message</label>
                          <div class="col-md-9">
                            <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>
                          </div>
                        </div>

                        <div class="form-group col-md-9">
                            <label for="file">Your photo</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                        
                        <!-- Rating -->
                        <div class="form-group">
                          <div class="col-md-9 starrating risingstar d-flex justify-content-end flex-row-reverse">
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star">5</label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star">4</label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star">3</label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star">2</label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star">1</label> 
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        <button type="reset" class="btn btn-default btn-md">Clear</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-9 col-md-offset-0">
        <h2>Rating</h2>
        <div class="col-xs-12 col-md-10">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
                        <h1 class="rating-num">{{ round($param[1], 1) }}</h1>
                        <div class="rating">
                            @for($i=0; $i<(round($param[1])); $i++)
                            <span class="text-warning fa fa-star"></span>
                            @endfor
                            @for($i=0; $i<(5-(round($param[1]))); $i++)
                            <span class="fa fa-star"></span>
                            @endfor
                        </div>
                        <div>
                            <span class="fa fa-user"></span> {{ $param[2] }} total
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="row rating-desc">
                            @for($i=count($param[3])-1; $i>=0; $i--)
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="text-warning fa fa-star"></span> {{$i+1}}
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{$param[3][$i]}}%">
                                        <span class="sr-only">{{$param[3][$i]}}%</span>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            <!-- end 5 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-9 col-md-offset-0">
        <h2>Feedbacks</h2>
        <div class="row mt-2">
            @foreach ($param[0] as $feedback)
            <div class="col-md-12 card mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                        </div>
                        <div class="col-md-10">
                            <p>
                                <strong>{{ $feedback->name }}</strong>
                                @for($i=0;$i<(5-($feedback->rating));$i++)
                                    <span class="float-right"><i class="fa fa-star"></i></span>
                                @endfor
                                @for($i=0; $i<$feedback->rating; $i++)
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                @endfor
                                <p style="clear:both"> {{$feedback->created_at->toDateString()}}</p>

                           </p>
                           <div class="clearfix"></div>
                            <p>{{$feedback->description}}</p>
                            @if($feedback->photo != NULL)
                            <a data-fancybox="gallery" href="photo/{{$feedback->photo}}" class="link-image-review"><img src="photo/{{$feedback->photo}}" width="100" class="image-review"></a>
                            @endif
                        </div>
                    </div>
                </div>  
            </div>
            @endforeach
        </div>
        <div class="row mt-2">{{$param[0]->links()}}</div>
        </div>
    </div>
</div>
<br>
</body>
</html>



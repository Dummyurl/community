@extends('../app');

@section('title', 'Forum');


@section('main-content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New Poll</h2>
            </div>


            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>

                                <small>Add New Poll</small>
                            </h2>

                        </div>
                        <div class="body">
                            <form method="post" action="{{url('/User/store')}}">

                                {{csrf_field()}}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name ='emaildetails' type="text" id="email_address" class="form-control" required>
                                        <label class="form-label">Poll Title</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name='polldetails' type="text" id="email_address" class="form-control"  required>
                                        <label class="form-label">Poll Details</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="pollquestion" type="text" id="password" class="form-control" required>
                                        <label class="form-label">Poll Question</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->

        </div>
    </section>



@endsection
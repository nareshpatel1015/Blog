@extends('layouts.master')


@section('title')
    Welcome to My Blog 
@endsection


@section('content')
    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            
                
                
                <div>
                <?php 
                use App\Http\Controllers\HomeController;
                echo HomeController::getPosts();?>
            </div>


        </div>  <!-- /.row -->


    </main><!-- /.container -->

@endsection





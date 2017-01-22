@extends('layouts.app')
@section('content')
<div class ="row">
    @forelse($articles as $article)
    <div class ="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class ="panel-heading">
                <span>Shaalan Hussein</span>
                <span class="pull-right">{{$article->created_at}}</span>
            </div>
            <div class="panel-body">
               Shalan 
            </div>
            <div class="panel-footer clearfix" style="background-color: white">
                <i class="fa fa-heart pull-right "></i>
            </div>
        </div>
    </div>
    @empty
    No Articles.
    @endforelse
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                   <table class="table">
                    <tr>
                        <td>Bil.</td>
                        <td>Tajuk</td>
                        <td>Penulis</td>
                        <td>Bil Komen</td>
                        <td>Tindakan</td>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $loop->iteration + ( $posts->perPage() * ($posts->currentPage() - 1) ) }}
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                           {{ $post->comments->count() }}
                        </td>
                        <td>
                            <a href="{{ route('post.show',['post'=>$post->id]) }}">Papar</a>
                        </td>
                    </tr>
                    @endforeach
                   </table>
                   {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends ('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-8/12 p-6 bg-white rounded-lg">

    @if ($posts->count())
    @foreach ($posts as $post)
      <x-post :post="$post" />
    @endforeach
  
    {{ $posts->links() }}
    @else
        <p>There are no posts yet </p>
    @endif

  </div>

</div>
@endsection
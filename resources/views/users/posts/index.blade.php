@extends ('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-8/12 ">
    <div class="p-6">
      <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
      <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and recieved {{ $user->recievedLikes->count() }} {{ Str::plural('like', $user->recievedLikes->count()) }}</p>
    </div>
    <div class="p-6 bg-white rounded-lg">
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

</div>
@endsection
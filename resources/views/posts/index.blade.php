@extends ('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-8/12 p-6 bg-white rounded-lg">
    @auth
      <form action="{{route('posts')}} " method="post" class="mb-4">
        @csrf
        <div class="mb-4">
          <label for="body">Your Post</label>
          <textarea name="body" id="body" cols="30" rows="4" placeholder="Post Something"
            class="rounded-lg w-full bg-gray-100 p-4 border-2 @error('body') border-red-500 @enderror">

          </textarea>
          @error('body')
          <div class="text-sm text-red-500">{{$message}} </div>
          @enderror
        </div>
        <div>
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Submit</button>
        </div>
      </form>
    @endauth


    @if ($xyz->count())
        @foreach ($xyz as $post)
         <x-post :post="$post" />
        @endforeach
      
        {{$xyz->links()}}
    @else
        <p>There are no posts yet </p>
    @endif



  </div>

</div>
@endsection
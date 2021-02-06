@extends ('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-4/12 p-6 bg-white rounded-lg">
    <form action="{{route('register')}}" method="POST">
      @csrf

      <div class="mb-4">
        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" id="name" placeholder="Name"
          class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4 @error('name') border-red-500 @enderror"
          value="{{old('name')}}">

        @error('name')
        <div class="text-red-500 text-sm mt-2">{{$message}} </div>
        @enderror
      </div>


      <div class="mb-4">
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" id="username" placeholder="Username"
          class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4 @error('username') border-red-500 @enderror"
          value="{{old('username')}}">

        @error('username')
        <div class="text-red-500 text-sm mt-2">{{$message}} </div>
        @enderror
      </div>

      <div class="mb-4">
        <label for="email" class="sr-only">Email</label>
        <input type="text" name="email" id="email" placeholder="Your Email"
          class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4 @error('email') border-red-500 @enderror"
          value="{{old('email')}}">
        @error('email')
        <div class="text-red-500 text-sm mt-2">{{$message}} </div>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" placeholder="Choose a password"
          class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4 @error('password') border-red-500 @enderror" value="">

        @error('password')
        <div class="text-red-500 text-sm mt-2">{{$message}} </div>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password_confirmation" class="sr-only">Password Again</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password"
          class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4 @error('password_confirmation') border-red-500 @enderror"
          value="">

        @error('password_confirmation')
        <div class="text-red-500 text-sm mt-2">{{$message}} </div>
        @enderror
      </div>

      <div>
        <button type="submit" class="bg-blue-600 w-full px-4 py-3 rounded-lg text-white font-medium">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
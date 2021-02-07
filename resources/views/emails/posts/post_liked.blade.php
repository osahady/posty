@component('mail::message')
# Your Post Was Liked

{{ $liker->name }} Liked one of your posts.

@component('mail::button', ['url' => route('posts.show', $post)])
Show Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

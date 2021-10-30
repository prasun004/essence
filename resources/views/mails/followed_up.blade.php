@component('mail::message')
# SIGNED UP

You're successfully signed up and You're following My blog. You'll get notified when there is a new blog.

@component('mail::button', ['url' => $url])
CHECK BLOG
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

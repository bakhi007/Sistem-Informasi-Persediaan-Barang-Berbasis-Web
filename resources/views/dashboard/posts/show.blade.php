<x-layout>
<x-slot:title> {{ $title }} </x-slot:title>

  <!-- <article class="py-8 max-w-screen-md">
    
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title']}}</h2>

    <div>
      By
      <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a>
      in
      <a href="/categories/{{ $post->category->slug }}" class="text-base text-gray-500 hover:underline" >{{ $post->category->name }}</a>
       | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; Kembali</a>
  </article> -->

  <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
          <a href="/dashboard/posts" class="text-blue-500 text-xs font-medium hover:underline">&laquo; Back to my posts</a>
              
              <h1 class="my-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title}}</h1>
          </header>
          <p class="my-4 font-light">{{ $post['body'] }}</p>
      </article>
  </div>
</main>


</x-layout>
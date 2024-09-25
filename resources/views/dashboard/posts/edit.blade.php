

<x-layout>
  <x-slot:title> {{ $title }} </x-slot:title>  
  
  <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Ubah post</h2>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post">
        @method('put')
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Title
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('title') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Ketikkan judul post" 
                    required
                    autofocus
                    value="{{ old('title', $post->title) }}"
                >
                @error('title')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full">
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white disabled readonly">Slug</label>
                <input 
                    type="text"
                    name="slug" 
                    id="slug" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('slug') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"

                    placeholder="Ketikkan slug" 
                    required
                    value="{{ old('slug', $post->slug)}}" 
                >
                @error('slug')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
              <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                  <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                      @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                      @endforeach
                      
                  </select>
              </div>
              <div class="sm:col-span-2">
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Body
                </label>
                <input 
                    id="body" 
                    type="hidden" 
                    name="body" 
                    rows="8" 
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500
                        @error('body') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                    placeholder="Your body here"
                    required
                    value="{{ old('body', $post->body) }}"
                >
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
              </div>

          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Update Post
          </button>
      </form>
  </div>

  

</section>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>

</x-layout>
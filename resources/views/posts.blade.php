<x-layout>
<x-slot:title> {{ $title }} </x-slot:title>

<div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
      <div class="mx-auto max-w-screen-md sm:text-center">
          
          
          <form>
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category')}}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author')}}">
            @endif

              <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                  <div class="relative w-full">
                      <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                      </div>
                      <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search something.." type="search" id="search" name="search" autocomplete="off">
                  </div>
                  <div>
                      <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                  </div>
              </div>
              
          </form>
      </div>
  </div>

  {{ $posts->links() }}

  <!--Card 1-->
  <div class="mt-8 max-w-screen-xl rounded overflow-hidden shadow-lg">
  <img class="w-full h-[300px] object-cover" id="unsplashImage" alt="Image">

      <div class="px-6 py-4">
        <a href="/posts/{{ $posts[0]->slug}}"><div class="font-bold text-xl mb-2">{{ $posts[0]->title }}</div></a>
        
        <div class="my-4 flex items-center space-x-3">
                      <a href="/posts?author={{ $posts[0]->author->username }}">
                        <div class="flex items-center space-x-3">
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="{{ $posts[0]->author->name }}" />
                            
                              <span class="font-medium text-sm dark:text-white">
                              {{ $posts[0]->author->name }}
                              </span>
                        </div>
                      </a>
                        <span class="font-medium text-sm dark:text-white">
                        {{ $posts[0]->created_at->diffForHumans() }}
                        </span>
                  </div>
        <p class="text-gray-700 text-base">
        {{ Str::limit($posts[0]->body, 270) }}
        </p>
        <a href="/posts/{{ $posts[0]->slug}}" class="mt-4 inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-sm">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
      </div>
      <!-- <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
      </div> -->
    </div>

  <div class="my-4 py-4 px-0 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
@forelse ($posts->skip(1) as $post)

          <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                <a href="/posts?category={{ $post->category->slug }}">
                  <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                  {{ $post->category->name }}
                  </span>
                </a>
                <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
              </div>
              <a href="/posts/{{ $post->slug}}" class="hover:underline">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title}}
                </h2>
              </a>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->body, 150) }}</p>
              <div class="flex justify-between items-center">
                <a href="/posts?author={{ $post->author->username }}">
                  <div class="flex items-center space-x-3">
                      <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="{{ $post->author->name }}" />
                      
                        <span class="font-medium text-sm dark:text-white">
                        {{ $post->author->name }}
                        </span>
                  </div>
                </a>
                  <a href="/posts/{{ $post->slug}}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-sm">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </article>                  
      @empty
      <div>
        <p class="font-semibold text-xl my-4">Artikel tidak ada!</p>
        <a href="/posts" class="block text-blue-500 hover:underline">&laquo; Back to all posts</a>
      </div>
@endforelse

</div>  
  </div>

  {{ $posts->links() }}

  <script>
        let query = '{{ $posts[0]->category->name }}'; // Kategori pencarian
        let page = Math.floor(Math.random() * 100) + 1; // Mengambil halaman acak
        let perPage = 5; // Jumlah gambar per halaman
        let endpoint = `https://api.unsplash.com/search/photos?query=${query}&page=${page}&per_page=${perPage}&client_id=NCB940vBkilLkn7iYSu1WtyoJnO65x6ejuA1mOjpdAY`;

        let imageElement = document.querySelector("#unsplashImage");

        function updateImage() {
            fetch(endpoint)
                .then(function (response) {
                    return response.json();
                })
                .then(function (jsonData) {
                    if (jsonData.results && jsonData.results.length > 0) {
                        // Ambil gambar pertama dari hasil pencarian
                        let imageUrl = jsonData.results[0].urls.regular;
                        // Tambahkan timestamp untuk menghindari caching
                        imageElement.src = `${imageUrl}?t=${new Date().getTime()}`;
                    } else {
                        imageElement.alt = "No images found";
                    }
                })
                .catch(function (error) {
                    console.error('Error fetching image:', error);
                    imageElement.alt = "Error loading image";
                });
        }

        updateImage();
    </script>

</x-layout>
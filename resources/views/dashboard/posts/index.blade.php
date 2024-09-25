<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title> 
<!-- <a href="/home"><h1>Welcome, bro!</h1></a> -->
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">

  <div class="mb-2 mx-auto max-w-screen-xl px-4 lg:px-12">
  @if (session()->has('success'))
      <!-- Success -->
      <div class="mb-4 flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
        <p class="self-center">
          <strong>{{ session('success')}} </strong>
        </p>
        <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
      </div>
    @endif
      <!-- Start coding here -->
      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
          <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

              <!-- search -->
              <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-0 flex-shrink-0">
                  <form method="GET" action="{{ route('posts.index') }}" class="flex items-center">
                      <label for="search" class="sr-only">Search</label>
                      <div class="relative w-full flex">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                              </svg>
                          </div>
                          <input type="search" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" style="width: 300px;" placeholder="Search for articles">
                          <button type="submit" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-r-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                              Search
                          </button>
                      </div>
                  </form>
              </div>
              <!-- end of search -->




              <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                  <a href="/dashboard/posts/create">
                  <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                      <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                      </svg>
                      Tambah data
                  </button>
                  </a>
                  
                  <div class="flex items-center space-x-3 w-full md:w-auto">
                      <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                          <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                          </svg>
                          Actions
                      </button>
                      <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                              <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                              </li>
                          </ul>
                          <div class="py-1">
                              <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                          </div>
                      </div>

                      <!-- Filter -->
<button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
  </svg>
  Filter Data
  <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
  </svg>
</button>


<!-- End of Filter -->

                      
                  </div>
              </div>
          </div>
          <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <!-- <th scope="col" class="px-4 py-3">#</th> -->
                          <th scope="col" class="px-4 py-3">Title</th>
                          <!-- <th scope="col" class="px-4 py-3">Author</th> -->
                          <th scope="col" class="px-4 py-3">Category</th>
                          <th scope="col" class="px-4 py-3">Action</th>
                          <!-- <th scope="col" class="px-4 py-3">Price</th> -->
                          <!-- <th scope="col" class="px-4 py-3">
                              <span class="sr-only">Actions</span>
                          </th> -->
                      </tr>
                  </thead>
                  <tbody>

                      
                      @foreach ($posts as $post)
                      <tr class="border-b dark:border-gray-700">
                          <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $post->title }}</th>
                          <td class="px-4 py-3">
                              <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-800 dark:text-primary-800">
                              {{ $post->category->name }}
                              </span>
                          </td>
                          <td class="px-4 py-3 flex space-x-2">
                              <!-- Show -->
                              <a href="/dashboard/posts/{{ $post->slug }}" class="inline-flex items-center px-3 py-1 text-sm font-medium text-blue-800 bg-blue-100 rounded-full hover:bg-blue-200 dark:text-white dark:bg-blue-600 dark:hover:bg-blue-700">
                                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                      <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                      <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                  </svg>
                              </a>

                              <!-- Edit -->
                              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="inline-flex items-center px-3 py-1 text-sm font-medium text-yellow-800 bg-yellow-100 rounded-full hover:bg-yellow-200 dark:text-white dark:bg-yellow-600 dark:hover:bg-yellow-700">
                                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                  </svg>
                              </a>

                              <!-- Delete -->
                              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" class="inline-flex items-center px-3 py-1 text-sm font-medium text-red-800 bg-red-100 rounded-full hover:bg-red-200 dark:text-white dark:bg-red-600 dark:hover:bg-red-700" onclick="return confirm('Are you sure?')">
                                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                      </svg>
                                  </button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>

                  
              </table>
          </div>
          
      </div>

      <!-- Dropdown Filter -->
      <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
          <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose Category</h6>
          <!-- Formulir Filter -->
          <form method="GET" action="{{ route('posts.index') }}">
              <div class="mb-4">
                  <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" />
              </div>
              <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                  @foreach ($categories as $category)
                      <li class="flex items-center">
                          <input id="category-{{ $category->id }}" type="checkbox" value="{{ $category->id }}" 
                              name="categories[]" 
                              class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 
                                      focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 
                                      focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                              {{ in_array($category->id, request('categories', [])) ? 'checked' : '' }}>
                          <label for="category-{{ $category->id }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                              {{ $category->name }} ({{ $category->posts_count }})
                          </label>
                      </li>
                  @endforeach
              </ul>
              <button type="submit" class="mt-2 w-full text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                  Apply Filters
              </button>
          </form>
      </div>
      <!-- End of Dropdown Filter -->
      {{ $posts->links() }}
  </div>
  
  </section>
  <script> // Script For Close alert

  var alert_del = document.querySelectorAll('.alert-del');
  alert_del.forEach((x) =>
  x.addEventListener('click', function () {
      x.parentElement.classList.add('hidden');
  })
  );
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
      const checkboxes = document.querySelectorAll('input[name="categories[]"]');
      
      checkboxes.forEach(checkbox => {
          checkbox.addEventListener('change', function () {
              const selectedCategories = Array.from(checkboxes)
                  .filter(cb => cb.checked)
                  .map(cb => cb.value);
              
              fetchFilteredPosts(selectedCategories);
          });
      });

      function fetchFilteredPosts(categories) {
          fetch('/path-to-your-endpoint', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              },
              body: JSON.stringify({ categories })
          })
          .then(response => response.json())
          .then(data => {
              updatePosts(data.posts);
          })
          .catch(error => console.error('Error:', error));
      }

      function updatePosts(posts) {
          const postsContainer = document.getElementById('posts-container');
          postsContainer.innerHTML = posts.map(post => `
              <tr class="border-b dark:border-gray-700">
                  <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">${post.title}</th>
                  <td class="px-4 py-3">
                      <span class="bg-${post.category.color}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-800 dark:text-primary-800">
                          ${post.category.name}
                      </span>
                  </td>
                  <!-- Tombol aksi di sini -->
              </tr>
          `).join('');
      }
  });
</script>

</x-sidebar>
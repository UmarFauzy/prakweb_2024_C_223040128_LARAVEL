<x-Layout>
  <x-slot:tittle>{{ $tittle }}</x-slot:tittle>

  <article class="py-8 mx-w-screen-md">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900"> {{ $post ['tittle'] }}</h2>
    <div class="text-base text-gray-500">
      <a href="#">{{ $post ['author'] }}</a> | 28 October 2024
    </div>
    <p class="my-4 font-light">
      {{ $post ['body'] }}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Back to posts</a>
  </article>



</x-Layout>
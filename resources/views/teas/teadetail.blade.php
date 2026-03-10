<x-layout>
    <h1>Tea Detail Page
</h1>
    <h2 class="text-3xl
    bg-blue-500 p-4 rounded-2xl
    mt-4">{{ $tea['name'] }}</h2>
      <h2 class="text-3xl
    bg-blue-500 p-4 rounded-2xl
    mt-4">{{ $tea['price'] }}</h2>

    <a href="/teas" class="bg-orange-500 p-4 mt-4 rounded-2xl">Back to Tea List</a>

</x-layout>
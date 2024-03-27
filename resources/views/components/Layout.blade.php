<x-app-layout>
  <header>
    </header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('sidebar')  </div>
      <div class="col-md-10">
        <main>
          @yield('content')  </main>
      </div>
    </div>
  </div>
</x-app-layout>

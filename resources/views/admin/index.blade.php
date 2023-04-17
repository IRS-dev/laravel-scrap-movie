@extends('layouts/admin')
@section('card')
      <!-- end Navbar -->
      <!-- cards -->
      {{-- popular Movie --}}
      <h6 class=" ml-12 mb-0 font-bold text-dark capitalize">Movies</h6>
      <div class="w-full px-6 py-2 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          @foreach ($movies as $movie)
          <div class="w-full max-w-full px-3 mb-6 mt-2  sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <img class="w-full rounded-t-2xl" src="{{ $movie->poster}}" alt="profile cover image">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                        <h5 class="mb-2 mt-2 font-bold dark:text-white">{{$movie->title}}</h5>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal  dark:text-white dark:opacity-60">Genre :{{$movie->genre}}</p>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal  dark:text-white dark:opacity-60">Rating :
                        <span class="text-sm font-semibold leading-normal text-blue-800">{{$movie->rating}}</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
      </div>




@endsection

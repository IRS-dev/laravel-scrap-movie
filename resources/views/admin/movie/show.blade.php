@extends('layouts/admin')
@section('card')
      <!-- end Navbar -->
      <!-- cards -->
      {{-- popular Movie --}}
      <a href="/dashboard/movie" class="inline-block px-8 py-2 mt-3 ml-12 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-cyan-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Back to Movie List</a>
      <div class="w-full px-6 py-2 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          <div class="w-full max-w-full px-3 mb-6 mt-2  sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/2">
            <div class="relative flex flex-col min-w-0 break-words bg-black shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                   
                <img class="w-full rounded-t-2xl" src="{{ $movie->poster}}" alt="profile cover image">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none max-w-full px-3">
                    <div>
                      <h1 class="mb-2 mt-2 font-bold text-white">{{ $movie->title }}</h1>
                      <a href="" class="mb-0 font-sans text-sm font-semibold leading-normal  text-white dark:opacity-60">{{$movie->genre}}</a>
                      <p class="mb-0 dark:text-white dark:opacity-60">
                        <span class="text-sm font-bold leading-normal text-emerald-500">Rating {{$movie->rating}}</span>
                      </p>
                      <h4 class="text-white">{{$movie->sinopsis}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>

@endsection

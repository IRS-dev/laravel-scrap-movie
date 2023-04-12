@extends('layouts/admin')
@section('card')
      <!-- end Navbar -->
      <!-- cards -->
      {{-- popular Movie --}}
      <a href="/dashboard/movie" class="inline-block px-8 py-2 mt-3 ml-12 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-cyan-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Back to Movie List</a>
      <div class=" mt-6 mx-4 py-2 w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
        <div class=" flex flex-col min-w-0 break-words bg-black border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <img class="w-full rounded-t-2xl" src="{{ asset('storage/'.$movie->poster)}}" alt="profile cover image">
          <div class="border-black/12.5 rounded-t-2xl p-6 text-center pt-0 pb-6 lg:pt-2 lg:pb-4">
            {{-- <div class="flex justify-between">
              <button type="button" class="hidden px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Connect</button>
              <button type="button" class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-cyan-500 lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                <i class="ni ni-collection text-2.8"></i>
              </button>
              <button type="button" class="hidden px-8 py-2 font-bold leading-normal text-center text-dark align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-white lg:block tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Message</button>
              <button type="button" class="block px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer text-xs bg-white lg:hidden tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                <i class="ni ni-email-83 text-2.8"></i>
              </button>
            </div> --}}
          </div>
            <div class="mb-3 px-3 text-start">
              <h5 class="text-blue-500 ">
               {{ $movie->title }}
              </h5>
              <h6 class="text-white text-lg">Sinopsis</h6>
              <p class="text-white text-sm text-light">{{ $movie->sinopsis }}</p>
              <span class="text-white text-sm text-light opacity-80 block"> Genre : {{ $movie->genre }}</span>

              <span class="text-white text-sm text-light opacity-80 block"> Actor : {{ $movie->actor }}</span>

                <span class="text-white text-sm text-light opacity-80 block"> Rating : {{ $movie->rating }}</span>
            </div>
          </div>
        </div>
      </div>
@endsection

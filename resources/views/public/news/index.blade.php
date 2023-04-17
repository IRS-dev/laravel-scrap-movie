@extends('layouts/main')
@section('card')
      <!-- end Navbar -->
      <!-- cards -->
      {{-- popular Movie --}}
      {{-- @if($moviesTitle = [])
      <h6 class="dark:text-white">belum ada judul Film</h6>
      @endif --}}
      <div class="w-full px-6 py-2 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          @foreach ($news as $new)
          <div class="w-full max-w-full px-3 mb-6 mt-2  sm:w-1/2 sm:flex-none xl:mb-0 xl:w-2/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none max-w-full px-3">
                    <div>
                        <h4> <a href="/news/{{$new->id}}" class="mb-2 mt-2 font-bold dark:text-white">{{ $new->title }}</a></h4>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal  dark:text-white dark:opacity-60">{{$new->body}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>



      {{-- end card --}}



@endsection

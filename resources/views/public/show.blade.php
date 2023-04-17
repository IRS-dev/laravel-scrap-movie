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
          <div class="w-full max-w-full px-3 mb-6 mt-2  sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/2">
            <div class="relative flex flex-col min-w-0 break-words bg-black shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                   
                <img class="w-full rounded-t-2xl" src="{{ $movie->poster}}" alt="profile cover image">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
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

          {{-- comment and reviw --}}
          <div class="w-full max-w-full px-3 mb-6 mt-2  sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/2">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3  md:flex-none">
                      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                          <h6 class="mb-0 dark:text-white">Comment</h6>
                        </div>
                        <div class="flex-auto p-4 pt-6">
                          <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                                <div class="flex flex-col">
                                    <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                    <p class="mb-2 text-xs leading-tight dark:text-white/80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni mollitia vero hic quas harum itaque magnam accusamus atque ullam cupiditate praesentium, eius consectetur officiis iure laborum natus sit asperiores voluptas!</span>
                                  </div>
                            </li>
                            <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-xl bg-gray-50 dark:bg-slate-850">
                                <div class="flex flex-col">
                                    <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                    <p class="mb-2 text-xs leading-tight dark:text-white/80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni mollitia vero hic quas harum itaque magnam accusamus atque ullam cupiditate praesentium, eius consectetur officiis iure laborum natus sit asperiores voluptas!</span>
                                  </div>
                            <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                              <div class="flex flex-col">
                                <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                <p class="mb-2 text-xs leading-tight dark:text-white/80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni mollitia vero hic quas harum itaque magnam accusamus atque ullam cupiditate praesentium, eius consectetur officiis iure laborum natus sit asperiores voluptas!</span>
                              </div>
                            </li>
                            <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                              <div class="flex flex-col">
                                <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                <p class="mb-2 text-xs leading-tight dark:text-white/80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni mollitia vero hic quas harum itaque magnam accusamus atque ullam cupiditate praesentium, eius consectetur officiis iure laborum natus sit asperiores voluptas!</span>
                              </div>
                            </li>
                            <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                              <div class="flex flex-col">
                                <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                <p class="mb-2 text-xs leading-tight dark:text-white/80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni mollitia vero hic quas harum itaque magnam accusamus atque ullam cupiditate praesentium, eius consectetur officiis iure laborum natus sit asperiores voluptas!</span>
                              </div>
                            </li>
                            <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                              <div class="flex flex-col">
                                <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                <p class="mb-2 text-xs leading-tight dark:text-white/80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni mollitia vero hic quas harum itaque magnam accusamus atque ullam cupiditate praesentium, eius consectetur officiis iure laborum natus sit asperiores voluptas!</span>
                              </div>
                            </li>
                            <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                                <div class="flex flex-col">
                                  <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                  <p class="mb-2 text-xs leading-tight dark:text-white/80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni mollitia vero hic quas harum itaque magnam accusamus atque ullam cupiditate praesentium, eius consectetur officiis iure laborum natus sit asperiores voluptas!</span>
                                </div>
                              </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
            </div>
          </div>
        </div>
      </div>

      {{-- user Comment --}}
      <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <form action="/dashboard/movie" method="POST" enctype="multipart/form-data">
                    @csrf
              <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                <div class="flex items-center">
                  <p class="mb-0 dark:text-white/80">Create New Comment</p>
                  <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Create</button>
                </div>
              </div>
              <div class="flex-auto p-6">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                        <div class="mb-4">
                          <label for="sinopsis" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Username</label>
                          <input name="sinopsis" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></input>
                        </div>
                      </div>
                  <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                    <div class="mb-4">
                      <label for="sinopsis" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Sinopsis</label>
                      <textarea name="sinopsis" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>


      {{-- end card --}}



@endsection

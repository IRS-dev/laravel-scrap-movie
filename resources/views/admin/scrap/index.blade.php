@extends('layouts.admin')
@section('card')
<div class="w-full p-6 mx-auto">
  <form action="/dashboard/scrap/imdb" method="post">
    @csrf
    <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-dark align-middle transition-all ease-in bg-white border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Generate Imdb Movie  </button>
  </form>

    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <form action="/dashboard/scrap" method="POST">
                @csrf
          <div class="flex-auto p-6">
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Scrap New Data</p>
            <div class="flex flex-wrap -mx-3">
              {{-- Link Url --}}
              <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
                <div class="mb-4">
                  <label for="link" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Link</label>
                  <input type="text" name="link" placeholder="https://www.imdb.com/" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="px-3 ">
                <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Scrap</button>
              </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('layouts/admin')
@section('card')
      <!-- end Navbar -->
      <!-- cards -->
      {{-- popular Movie --}}
      <a href="/dashboard/news" class="inline-block px-8 py-2 mt-3 ml-12 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-cyan-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Back to User List</a>
      {{-- table --}}
      <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                  <div class="flex-auto p-6">

                    <div class="flex flex-wrap -mx-3">
                      <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
                        <div class="mb-4">
                            <h1>{{$news->title}}</h1>
                        </div>
                      </div>
                      <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
                        <div class="mb-4">
                           <p>{{$news->body}}</p> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
</div>
@endsection

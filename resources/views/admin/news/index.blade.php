@extends('layouts/admin')
@section('card')
      <!-- end Navbar -->
      <!-- cards -->
      <a href="news/create" class="inline-block px-8 py-2 mt-3 ml-12 font-bold leading-normal text-center text-dark align-middle transition-all ease-in bg-white border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"> &plus; Create News</a>

      {{-- table --}}
      <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="dark:text-white">News Tables</h6>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $new)
                        <tr>
                            <td class="px-5 p7-3 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                  <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $loop->iteration }}</h6>
                                  </div>
                                </div>
                              </td>
                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <div class="flex px-2 py-1">
                                <div class="flex flex-col justify-center">
                                  <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $new->title }}</h6>
                                </div>
                              </div>
                            </td>
                            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                <a href="news/{{ $new->id }}" class=" mx-2 text-xs  text-white  font-semibold leading-tight bg-blue-500 rounded px-2"> Detail </a>
                                <a href="news/{{ $new->id }}/edit" class=" mx-2 text-xs font-semibold leading-tight bg-black rounded px-2 text-white"> Edit </a>
                                <form action="news/{{ $new->id }}" method="post" class="inline-block">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class=" mx-2 text-xs font-semibold leading-tight bg-slate-700 rounded text-white px-2"> Delete </button>
                                </form>
                              </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection

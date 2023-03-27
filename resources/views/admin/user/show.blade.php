@extends('layouts/admin')
@section('card')
      <!-- end Navbar -->
      <!-- cards -->
      {{-- popular Movie --}}
      <a href="/dashboard/user" class="inline-block px-8 py-2 mt-3 ml-12 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-cyan-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Back to User List</a>
      {{-- table --}}
      <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                  {{-- <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex items-center">
                      <p class="mb-0 dark:text-white/80">User Profile</p>
                      <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Settings</button>
                    </div>
                  </div> --}}
                  <div class="flex-auto p-6">
                    <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">User Information</p>
                    <div class="flex flex-wrap -mx-3">
                      <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                          <label for="username" class="inline-block mb-2  font-bold text-xs text-slate-700 dark:text-white/80">Username</label>
                          <p class="mb-0 dark:text-white/80">{{ $user->name }}</p>
                        </div>
                      </div>
                      <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                          <label for="email" class="inline-block mb-2  font-bold text-xs text-slate-700 dark:text-white/80">Email address</label>
                          <p class="mb-0 dark:text-white/80">{{ $user->email }}</p>
                        </div>
                      </div>
                      <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                        <div class="mb-4">
                          <label for="first name" class="inline-block mb-2  font-bold text-xs text-slate-700 dark:text-white/80">Role</label>
                          <p class="mb-0 dark:text-white/80">Admin</p>
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

@extends('register.main')

@section('container')
<div class="flex mt-0 ">
  <div class="w-full md:w-1/2 bg-hijau p-8 mx-auto">
      <h1 class="text-4xl font-bold mb-8 mt-6 text-white">Register</h1>
      <form action="/register/store" method="post">
        @csrf
          <div class="mb-4">
              <label class="block text-md text-white ">Nama Pemain</label>
              <input name="namapemain" type="text" id="namapemain" class="w-full border border-gray-300 px-4 py-2 rounded-lg" placeholder="">
          </div>
          <div class="mb-2">
              <label class="block text-md text-white">Email</label>
              <input name="email" type="email" id="email" class="w-full border border-gray-300 px-4 py-2 rounded-lg" placeholder="">
          </div>
          <div class="mb-2">
            <label class="block text-md text-white">No. HP</label>
            <input name="nohp" type="text" id="nohp" class="w-full border border-gray-300 px-4 py-2 rounded-lg" placeholder="">
        </div>
        <div class="mb-2">
            <label class="block text-md text-white">Password</label>
            <input name="password" type="password" id="password" class="w-full border border-gray-300 px-4 py-2 rounded-lg" placeholder="">
            
        </div>
          <div class="mb-6">
            <p class="text-sm mt-2 text-white">Sudah memiliki akun? Silahkan login<a href="/login" class="underline underline-offset-2 text-blue-700"> disini</a></p>
        </div>
        <button type="submit" class="bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">Register</button>
        </form>
  </div>
  <div class="hidden md:block w-full md:w-1/2">
      <img src="./img/register.png" alt="Beautiful Image" class="object-cover w-full h-full">
  </div>
</div>
    


@endsection
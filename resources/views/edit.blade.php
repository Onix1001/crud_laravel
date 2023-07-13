<x-app-layout>
    @foreach ($users as $user)
        <form action="{{ url('/update', $user->id) }}" method="post" class="px-56 py-20">
            @csrf
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Nama</label>
                <input type="text" id="nama" name="nama" value="{{ $user->nama }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required="">
            </div>
            <div class="mb-6">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Alamat</label>
                <input type="text" id="alamat" name="alamat" value="{{ $user->alamat }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Telepon</label>
                    <input type="tel" id="telepon" name="telepon" value="{{ $user->telepon }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="">
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Jenis Kelamin</label>
                    <div class="flex items-center justify-evenly">
                        <div class="">
                            <input id="default-radio-1" type="radio" value="pria" name="jk" {{ $user->jenis_kelamin == 'pria'? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pria</label>
                        </div>
                        <div class="">
                            <input id="default-radio-2" type="radio" value="wanita" name="jk" {{ $user->jenis_kelamin == 'wanita'? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wanita</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <label for="tp_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Tempat Lahir</label>
                    <input type="text" id="tp_lahir" name="tp_lahir" value="{{ $user->tempat_lahir }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="">
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $user->tanggal_lahir }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="">
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    @endforeach
</x-app-layout>

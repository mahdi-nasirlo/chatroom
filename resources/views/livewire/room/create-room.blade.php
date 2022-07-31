<div class="w-full">
    <form wire:submit.prevent='create'>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-full px-3">
                <label class="text-right block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for='Password'>
                    نام چت روم
                </label>
                <input wire:model.lazy='roomName'
                    class="text-right appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none">

                @error('roomName')
                    <div class="text-sm text-red-500 text-right w-full">{{ $message }}</div>
                @enderror
                <button type="submit"
                    class="mt-5 appearance-none block w-full bg-gray-600 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-3 leading-tight hover:bg-blue-500 focus:outline-none focus:bg-white focus:border-gray-500">
                    ایجاد
                </button>
            </div>
        </div>
    </form>

</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat App') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 gap-4 text-gray-900">
                    <h3 class="mb-5 text-2xl">{{__('User List')}}</h3>
                    @foreach ($users as $user)
                        <div class="bg-slate-50 gap-3 flex items-center mb-5">
                            <div class="h-12 w-12 rounded-full border-1 bg-gray-300"></div>
                            <p> <a href="{{route('chat', $user->id)}}">{{$user->name}}</a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

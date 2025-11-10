<x-layout title="Create-Job" heading="Create Job" class="bg-gray-200 h-full">
    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create A new Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what
                    you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" type="text" name="title" placeholder="Software Engineer" />

                            <x-form-error name="title" />
                        </div>
                    </x-form-field>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary" type="text" name="salary" placeholder="90,000" />

                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>

                <!-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class=" text-red-500 text-sm font-bold mt-3 ">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif -->
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-submit-button>Submit</x-form-submit-button>
        </div>
    </form>

</x-layout>
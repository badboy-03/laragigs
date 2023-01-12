<x-layout>
    @push('title')
    <title> Listings | Manage </title>
    @endpush
    <div class="mx-4">
        <x-card class="shadow-lg p-10">
            <header>
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    Manage Gigs
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)

                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="show.html">
                                {{$listing->title}}
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/listings/edit/{{$listing->id}}" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                    class="fa-solid fa-pen-to-square"></i>
                                Edit</a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form action="/listings/{{$listing->id}}" method="POST">
                                @csrf @method('DELETE')
                                <button class="text-red-600">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Trash
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-9 border-t border-b border-grey-300 text-lg">
                            <p class="text-center">
                                No Listing Fpund
                            </p>
                        </td>
                    </tr>
                    @endunless

                </tbody>
            </table>
        </x-card>
    </div>
</x-layout>